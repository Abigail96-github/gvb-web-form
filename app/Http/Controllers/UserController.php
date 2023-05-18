<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPin;
use App\Models\AccountingInformation;
use App\Models\Activity;
use App\Models\AuditLog;
use App\Models\Covid19Response;
use App\Models\GbvfProject;
use App\Models\Intervention;
use App\Models\Mandate;
use App\Models\Organization;
use App\Models\Pillar;
use App\Models\ProgressReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('/');
    }

    public function fetchtable()
    {
        //$user = Session::get('user_id');
        $pillar_table = Pillar::all();
        $intervention_table = Intervention::all();
        $activities_table = Activity::all();
        //$user_data = User::where('id', $user)->get();
        return response()->json([
            'pillar_table' => $pillar_table,
            'intervention_table' => $intervention_table,
            'activities_table' => $activities_table,
            //'user_data'=> $user_data,
        ]);
    }

    public function userData()
    {
        $user = Session::get('user_id');
        $user_data = User::where('id', $user)->get();
        $accounting_information = AccountingInformation::where('user_id', $user)->get();
        $mandate_informaton = Mandate::where('user_id', $user)->get();
        $submission_count = GbvfProject::where('user_id',$user)->orderBy('submission_count', 'DESC')->value('submission_count');

        $project_information = GbvfProject::where('user_id', $user)
            ->where('performance', 'In progress')
            ->where('submission_count',$submission_count)
            ->orWhere('performance', 'Not achieved')
            ->orWhere('performance', null)
            ->get();
        return response()->json([
            'user_data'=> $user_data,
            'accounting_information' => $accounting_information,
            'project_information' => $project_information,
            'mandate_informaton' => $mandate_informaton,
            'count' => $submission_count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function saver(Request $request)
    {
        /**======================================== storing data =======================================================**/
        $user = Session::get('user_id');
        $submission_count = GbvfProject::where('user_id',$user)->orderBy('submission_count', 'DESC')->value('submission_count');
        if($submission_count === null)
        {
            $submission_count = 0;
        }
        DB::beginTransaction();
        try {
            $accounting_info =  new AccountingInformation();
            $accounting_info->user_id = $user;
            $accounting_info->monthly_period = $request->period;
            $accounting_info->m_e_firstname_lastname = $request->me_name;
            $accounting_info->m_e_email = $request->me_email;
            $accounting_info->m_e_phone = $request->me_phone;
            $accounting_info->compiler_firstname_lastname = $request->compiler_name;
            $accounting_info->compiler_email  = $request->compiler_email;
            $accounting_info->compiler_phone = $request->compiler_phone;
            $accounting_info->lead_firstname_lastname = $request->lead_name;
            $accounting_info->lead_email = $request->lead_email;
            $accounting_info->lead_phone = $request->lead_phone;
            $accounting_info->approver_position = $request->approver_position;
            $accounting_info->approver_name = $request->officer_name;
            $accounting_info->save();

            $mandate = new Mandate();
            $mandate->user_id = $user;
            $mandate->instructions = $request->mandate_text;
            $mandate->save();

            $submission_count++;
            $submit_project_array = json_decode($request->submit_project_array);
            $array_length = $request->progress_report_length;
            for($i=0; $i < $array_length ; $i++)
            {
                $project = new GbvfProject();
                $project->user_id = $user ;
                if(isset($submit_project_array[$i][0]))
                {
                    $project->project_name = $submit_project_array[$i][0];
                    $project->project_lead_name =  $submit_project_array[$i][1];
                    $project->project_lead_contact = $submit_project_array[$i][2];
                    $project->project_start_date = $submit_project_array[$i][3];
                    $project->project_end_date = $submit_project_array[$i][4];
                    $project->project_summary = $submit_project_array[$i][5];
                    $project->intervention = $submit_project_array[$i][6];
                    $project->activity = $submit_project_array[$i][7];
                    $project->indicators = $submit_project_array[$i][8];
                    $project->target = $submit_project_array[$i][9];
                    $project->progress = $submit_project_array[$i][10];
                    $project->deviation_reason = $submit_project_array[$i][11];
                    $project->corrective_measures = $submit_project_array[$i][12];
                    $project->performance = $submit_project_array[$i][13];
                    $project->submission_count = $submission_count;
                    $project->save();
                }
            }
            DB::commit();
        }
        catch (\Exception $ex)
        {
            DB::rollBack();
            Session::flash('failure', "Some required fields where not provided");
            return view('logout');     // add the message to the form
        }
        catch (\Throwable $ex)
        {
            DB::rollBack();
            Session::flash('failure', "Some required fields where not provided");
            return view('logout');
        }
        Session::flash('success', "Thank you for your monthly progress report submission");
        return view('logout');
    }

    public function register(Request $request)
    {
        if($request->password !== $request->confirm_password)
        {
            Session::flash('failure', 'Password does not match');
            return back();
        }

        $inactive = 0;
        $login_email = DB::table('users')
            ->where('email',$request->email)
            ->exists();

        if($login_email == true){
            Session::flash('failure', 'User already exist');
            return back();
        }
        else{
            $user_info = new User();
            $user_info->organization_name = $request->organization;
            $user_info->firstname_lastname = $request->name_surname;
            $user_info->email = $request->email;
            $user_info->phone = $request->phone;
            $user_info->password = Hash::make($request->password);
            $user_info->save();
            $user_id = $user_info->id;

            $audit_info = new AuditLog();
            $audit_info->user_id = $user_id;
            $audit_info->status = $inactive;
            $audit_info->save();

            Session::flash('success', 'Registration successful');
            return redirect('/');
        }
    }

    public function login(Request $request)
    {

        $active = 1;
        /**==================================== Request verification to DB ==========================================**/
        $user_details = DB::table('users')
            ->where('email', $request->email)
            ->get();

        if(!isset($user_details[0]))
        {
            Session::flash('failure','User does not exist');
            return back();
        }

        if (!(Hash::check($request->password, $user_details[0]->password)))
        {
            Session::flash('failure', 'Invalid Password');
            return back();
        }

        $active_user = $user_details[0]->id;
        DB::table('audit_logs')
            ->where('user_id', $active_user)
            ->update(['status'=> $active]);

        session(['user_id'=>$active_user]);
        return redirect('form');
    }

    function forgot_pin(Request $request)
    {
        $user_details = DB::table('users')
            ->where('email',$request->email)
            ->get();

        if(!isset($user_details[0]))
        {
            Session::flash('failure','User does not exist');
            return back();
        }

        $email = $user_details[0]->email;
        $names = $user_details[0]->firstname_lastname;
        $new_pin = $this->generate_pin(6);
        DB::table('users')
            ->where('email', $email)
            ->update([
                'password'=> Hash::make($new_pin)
            ]);

        $email_required_details = [
          'names' => $names,
          'pin' => $new_pin
        ];

        Mail::to($email)->send(new ForgotPin($email_required_details));
        Session::flash('success', 'Enter new password');
        session([
            'change_pass_email' => $email,
        ]);
        return redirect('reset_pin');

    }

    function reset_pin(Request $request)
    {
        $email = Session::get('change_pass_email');
        $user_details = DB::table('users')
            ->where('email', $email)
            ->get();

        if(!isset($user_details[0]))
        {
            Session::flash('failure','User does not exist');
            return back();
        }

        if (!(Hash::check($request->temporary_pin , $user_details[0]->password)))
        {
            Session::flash('failure', 'Invalid Temporary Pin');
            return back();
        }

        if($request->password !== $request->confirm_password)
        {
            Session::flash('failure', 'Password does not match');
            return back();
        }

        DB::table('users')
            ->where('email', $user_details[0]->email)
            ->update([
                'password'=> Hash::make($request->password)
            ]);
        Session::flash('success', 'Change password successful');
        return redirect('/');
    }

    public function generate_pin($length){
        $pin="";
        for ($i = 1; $i <= $length; $i++ ){
            $pin .=rand(0,9);
        }
        return (int)$pin;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
