<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>GBVF Web form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



    <style>
        .table-bordered td, .table-bordered th {
            border: 2px solid mediumseagreen;
            padding: 4px;
            border-bottom-width: 3px;
            outline: none;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color: #2c2c2c;
        }
        body a {
            color: inherit;
            text-decoration: none;
        }

        .content {
            width: 95%;
            margin: 0 auto 50px;
        }

        .multisteps-form__progress {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
            width: 130%;
            margin-left: -98px;
        }

        .multisteps-form__progress-btn {
            transition-property: all;
            transition-duration: 0.15s;
            transition-timing-function: linear;
            transition-delay: 0s;
            position: relative;
            padding-top: 20px;
            color: rgba(108, 117, 125, 0.7);
            text-indent: -9999px;
            border: none;
            background-color: transparent;
            outline: none !important;
            cursor: pointer;
        }
        @media (min-width: 500px) {
            .multisteps-form__progress-btn {
                text-indent: 0;
            }
        }
        .multisteps-form__progress-btn:before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 13px;
            height: 13px;
            content: '';
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
            transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
            transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
            border: 2px solid currentColor;
            border-radius: 50%;
            background-color: #fff;
            box-sizing: border-box;
            z-index: 3;
        }
        .multisteps-form__progress-btn:after {
            position: absolute;
            top: 5px;
            left: calc(-50% - 13px / 2);
            transition-property: all;
            transition-duration: 0.15s;
            transition-timing-function: linear;
            transition-delay: 0s;
            display: block;
            width: 100%;
            height: 2px;
            content: '';
            background-color: currentColor;
            z-index: 1;
        }
        .multisteps-form__progress-btn:first-child:after {
            display: none;
        }
        .multisteps-form__progress-btn.js-active {
            color: mediumseagreen;
        }
        .multisteps-form__progress-btn.js-active:before {
            -webkit-transform: translateX(-50%) scale(1.2);
            transform: translateX(-50%) scale(1.2);
            background-color: currentColor;
        }

        .multisteps-form__form {
            position: relative;
        }
        .form__form {
            position: relative;
        }

        .multisteps-form__panel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            opacity: 0;
            visibility: hidden;
        }
        .multisteps-form__panel.js-active {
            height: auto;
            opacity: 1;
            visibility: visible;
        }
        .multisteps-form__panel[data-animation="scaleOut"] {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        .multisteps-form__panel[data-animation="scaleOut"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        .multisteps-form__panel[data-animation="slideHorz"] {
            left: 50px;
        }
        .multisteps-form__panel[data-animation="slideHorz"].js-active {
            transition-property: all;
            transition-duration: 0.25s;
            transition-timing-function: cubic-bezier(0.2, 1.13, 0.38, 1.43);
            transition-delay: 0s;
            left: 0;
        }
        .multisteps-form__panel[data-animation="slideVert"] {
            top: 30px;
        }
        .multisteps-form__panel[data-animation="slideVert"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            top: 0;
        }
        .btn-save{
            width: 100%;
            background-color: seagreen;
            font-size: 1.15rem;
            font-weight: 400;
            border: none;
            border-radius: 0.25rem;
            padding: 0.38rem ;
            outline: none;
        }
        .btn-new_project{
            width: 100%;
            background-color: seagreen;
            font-size: 1.15rem;
            font-weight: 400;
            border: none;
            border-radius: 0.25rem;
            padding: 0.38rem ;
            outline: none;
        }
        .multisteps-form__panel[data-animation="fadeIn"].js-active {
            transition-property: all;
            transition-duration: 0.3s;
            transition-timing-function: linear;
            transition-delay: 0s;
        }
        .multisteps-form__panel[data-animation="scaleIn"] {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }
        .header {
            margin-left : auto;
            margin-right:auto;
            width: 613px;
            margin: 20px auto;
            text-align: center;
        }
        .multisteps-form__panel[data-animation="scaleIn"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            -webkit-transform: scale(1);
            transform: scale(1);
            width: 172%;
            margin-left: -239px;

        }

        .multisteps-form__pan {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            opacity: 0;
            visibility: visible;
        }
        .multisteps-form__pan.js-active {
            height: auto;
            opacity: 1;
            visibility: visible;
        }
        .multisteps-form__pan[data-animation="scaleOut"] {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        .multisteps-form__pan[data-animation="scaleOut"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        .multisteps-form__panel[data-animation="slideHorz"] {
            left: 50px;
        }
        .multisteps-form__panel[data-animation="slideHorz"].js-active {
            transition-property: all;
            transition-duration: 0.25s;
            transition-timing-function: cubic-bezier(0.2, 1.13, 0.38, 1.43);
            transition-delay: 0s;
            left: 0;
        }
        .multisteps-form__pan[data-animation="slideVert"] {
            top: 30px;
        }
        .multisteps-form__pan[data-animation="slideVert"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            top: 0;
        }
        .multisteps-form__pan[data-animation="fadeIn"].js-active {
            transition-property: all;
            transition-duration: 0.3s;
            transition-timing-function: linear;
            transition-delay: 0s;
        }
        .multisteps-form__pan[data-animation="scaleIn"] {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }
        .header {
            margin-left : auto;
            margin-right:auto;
            width: 613px;
            margin: 20px auto;
            text-align: center;
        }
        .multisteps-form__pan[data-animation="scaleIn"].js-active {
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: linear;
            transition-delay: 0s;
            -webkit-transform: scale(1);
            transform: scale(1);
            width: 172%;
            margin-left: -239px;
        }

        .doublediv{
            display: inline-block;
            border: 2px solid seagreen;
            padding: 1%;
            border-radius: 10px;
            padding-bottom: 9px;
        }
        .myPaddling{
            padding: 1%;
            vertical-align: top;
            height: auto;
            padding-bottom: 10px;
            padding-right: 0px;
            margin-top: -55px;
            width: 33%;
            display: inline-block;
            border: 2px solid seagreen;
            border-radius: 10px;
            border-collapse: separate;
            border-spacing: 150px 50px;
        }
        .singleDiv{
            border: 2px solid seagreen;
            padding: 10px;
            border-radius: 10px;
            padding-bottom: 20px;
            margin-top: 7px;
        }
        .singleDiv2{
            display: inline-block;
        }

        .part1label{
            font-size: 19px;
        }
        .form-control{
            display: block;
            position: inherit;
            width: 99%;
            border: 2px solid seagreen;
            background-color: #f7fafc;
        }

        .asterisks{
            color: red;
            margin-bottom: 0px;
        }
        .form-control-officer{
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            border: 2px solid seagreen;
            display: inline;
            width: 82%;
            outline: cornflowerblue;
        }
        .form-control-project{
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            border: 2px solid seagreen;
            width: 98%;
            display: block;
            outline: cornflowerblue;
        }
        .container_one{
            display: inline-block;
            width: 33%;
        }
        .container_two{
            display: inline-block;
            width: 33%;
        }

        #officer_name:focus {
            box-shadow: 0 0 10px #719ECE;
        }
        #officer_name{
            background-color: #f7fafc;
            width : 95%;
        }
        #approver_position{
            background-color: #f7fafc;
            width : 95%;
        }
        #mandate {
            width: 100%;
            height: 300px;
            padding: 2px 2px;
            box-sizing: border-box;
            border: 2px solid seagreen;
            border-radius: 4px;
            background-color: #f7fafc;
            font-size: 16px;
            resize: none;
            position: center;
            outline: none;
        }
        #project_summary {
            width: 100%;
            height: 150px;
            padding: 2px 2px;
            box-sizing: border-box;
            border: 2px solid seagreen;
            border-radius: 4px;
            background-color: #f7fafc;
            font-size: 16px;
            resize: none;
            position: center;
            outline: none;
        }
        .instructions{
            padding: 1%;
            height: auto;
            margin-top: -45px;
        }
        .titl{
            background-color: seagreen;
            padding: 4px;
            font-size: 20px;
            position: relative;
            top: -44px;
            width: 104%;
            left: -23px;
            margin: 20px auto;
            text-align: center;
            color: #fff;
        }
        img {
            padding-top: 4px;
        }
        .edict{
            margin-top: -45px;
        }
        .container_content{
        }
        .para{
            margin-top: -45px;
        }
        .pillar-reference{
            font-size: 15px;
            text-align: left;
            display: inline-block;
        }

        .project_container{
            margin-top: -45px;
        }
        .pillars{
            border: none;
            color: dodgerblue;
            outline: white;
            background-color: white;
        }
        .pillars:focus{
            outline: none;
        }
        .form-contro{
            border: none;
            outline: none;
            width: 100%;
            height: 35px;
            display: block;
            position: inherit;
        }
        thead{
            background-color: seagreen;
        }
        .btn-block{
            background-color: #f7fafc;
        }

        input[type=checkbox], input[type=radio] {
            box-sizing: border-box;
            padding: 0;
            margin-right: 5px;
        }

        .table_header{
            font-size: medium;
        }
        caption {
            margin-bottom: 1em;
            font-size: 23px;
            font-weight: bold;
            text-align: center;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            top: -10px;
            width: 1139px;
        }
        .form_container{
            margin-left:auto;
            margin-right:auto;
            width:1169px;
        }
        .heading{
            padding: 12px;
            font-size: 21px;
            font-weight: 500;
            color: #fff;
        }

        .complete{
            background-color: seagreen;
            text-align: center;
            padding: 12%;
            border-radius: 6px;
            color: white;
            font-size: 20px;
            margin-left: 110px;
            margin-right: 110px;
        }
    </style>
</head>
<body>

<br>
<div class="content">
    <div class="content__inner">
        <div class="container overflow-hidden">
            <div class="multisteps-form">
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">

                        <form class="form__form">
                            <div class="multisteps-form__pan  p-4 js-active" data-animation="scaleIn" >
                                <h1 class="titl heading">Standard National Government Level Strategic Plan on Gender Based Violence & Femicide</h1>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header">
    <p style="text-align: center"><img src="{{asset('image/rsa.png')}}" width="15%" height="8%" alt=""></p>
</header>
<div class="content">
    <div class="content__inner">
        <div class="container overflow-hidden">
            <div class="multisteps-form">
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form class="form__form">
                            <div class="multisteps-form__pan  p-4 js-active" data-animation="scaleIn" >
                                <h1 class="titl heading">Monthly Progress Report Template</h1>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="content__inner">
        <div class="container">
            {{--      <h2 class="content__title content__title--m-sm">Choose Animation Type</h2>--}}

            <form class="pick-animation my-4">
                <div class="form-row">
                    {{--          <div class="col-5 m-auto">--}}
                    {{--            <select class="pick-animation__select form-control">--}}
                    {{--              <option value="scaleIn" selected="selected">ScaleIn</option>--}}
                    {{--              <option value="scaleOut">ScaleOut</option>--}}
                    {{--              <option value="slideHorz">SlideHorz</option>--}}
                    {{--              <option value="slideVert">SlideVert</option>--}}
                    {{--              <option value="fadeIn">FadeIn</option>--}}
                    {{--            </select>--}}
                    {{--          </div>--}}
                </div>
            </form>

        </div>
        <div class="container overflow-hidden">
            <div class="multisteps-form">
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <div id="success_validation" class="alert alert-success" role="alert" style="display: none;width: 100%"></div>
                        <div id="error_validation" class="alert alert-danger" role="alert" style="display: none;width: 100%"></div>
                        <form class="multisteps-form__form" method="post" id="gbvf_form" action="{{url('form')}}">
                            @csrf
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn" >
                                <div class="multisteps-form__content container_content">
                                    <div class="complete">
                                        <label style="text-align: center" for="">
                                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                                <div style="text-align: center" class="alert alert-success" role="alert">
                                                    {{ \Illuminate\Support\Facades\Session::get('success') }}
                                                </div>
                                            @endif
                                                @if(\Illuminate\Support\Facades\Session::has('failure'))
                                                    <div style="text-align: center" class="alert alert-danger" role="alert">
                                                        {{ \Illuminate\Support\Facades\Session::get('failure') }}
                                                    </div>
                                                @endif
                                        </label>
                                    </div>
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn btn-primary ml-auto js-btn-next" onclick="window.location='{{ url('/')}}'" type="button" title="logout">Logout</button>
                                    </div>
                                </div>
                            </div>

                            {{-- ======================================== Hidden variables ============================================--}}
                            <div class="hidden_variables">
                                <input type="hidden" id="submit_project_array" name="submit_project_array" >
                                <input type="hidden" name="length" id="length" >
                                <input type="hidden" name="progress_report_length" id="progress_report_length" >
                                <input type="hidden" name="row_length" id="row_length" >
                                <input type="hidden" name="last_row_length" id="last_row_length" >
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script  >

    @if ($errors->any())

    $("#instruction").removeClass("js-active");
    // $("#response_nav").removeClass("js-active");

    $("#part_four").removeClass("js-active");
    // $("#response_nav").removeClass("js-active");
    $("#accounting_info").addClass("js-active");
    $("#instruction_nav").addClass("js-active");

    @endif

    /**========================================== PART 3 : Table ===============================================**/

    var pillar_array = [];
    var intervention_array = [];
    var activity_array = [];
    var users =[];
    var accounting_info =[];
    var counter = 0;
    var i = -1;
    var j;
    var countertwo = 0;
    var project_array = [];
    var progress_report_count = [];
    var progress_report_length = 0;
    var project_count = 1;


    // $('#colorChanger').on('change', function() {
    //     $('.changeColor').addClass($('#colorChanger :selected').attr('class'));
    // });


    fetchtable();
    fetchtabletwo();
    userData();


    $("#addrow").on("click", function () {

        var newRow = $("<tr>");
        var cols = "";

        // cols += '<td><select name="pillars' + counter + '" id="pillars_id' + counter + '" onchange="pillarselectortwo(this.value, '+counter+')" class="form-contro" aria-label="Default select example"> </select></td>';
        cols += '<td class="col-sm-2"><input type="text" name="project_name' + counter + '" id="project_name' + counter + '" class="form-contro" /></td>';
        cols += '<td class=""><input type="text" class="form-contro" id="indicators' + counter + '" name="indicators' + counter + '"/></td>';
        cols += '<td class=""><input type="text" class="form-contro" id="target' + counter + '" name="target' + counter + '"/></td>';
        cols += '<td class=""><input type="text" class="form-contro" id="progress' + counter + '" name="progress' + counter + '"/></td>';
        cols += '<td class="col-sm-2"><input type="text" class="form-contro" id="deviation' + counter + '" name="deviation' + counter + '"/></td>';
        cols += '<td class="col-sm-2"><input type="text" class="form-contro" id="measure' + counter + '" name="measures' + counter + '"/></td>';
        cols += '<td class="">' +
            '<select class="form-select form-contro" name="performance' + counter + '" aria-label="Default select example">\n' +
            '                <option value=""></option>\n' +
            '                <option value="Achieved">Achieved</option>\n' +
            '                <option value="In progress">In progress</option>\n' +
            '            <option value="Not achieved">Not achieved</option>\n' +
            '</select>  ' +
            '</td>';



        cols += '<td class=""><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Del"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        fetchtable(counter);
        $("#length").val(counter+1);
        counter++;

        console.log("inside");


    });




    $("#addrow2").on("click", function () {
        var newRow2 = $("<tr>");
        var cols2 = "";

        cols2 += '<td><select name="covid_interventions' + countertwo + '" id="intervention' + countertwo + '" onchange="interventionselectortwo(this.value, '+countertwo+')" class="form-select form-contro" aria-label="Default select example"> </select></td>';
        cols2 += '<td><select name="covid_activities' + countertwo + '" id="activity' + countertwo + '" onchange="activityselector(this.value, '+countertwo+')" class="form-select form-contro" aria-label="Default select example"> </select></td>';
        cols2 += '<td><input type="text" class="form-contro" id="indicator_project' + countertwo + '" name="indicator' + countertwo + '"/></td>';
        cols2 += '<td><input type="text" class="form-contro" id="target' + countertwo + '" name="target' + countertwo + '"/></td>';

        cols2 += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Del"></td>';
        newRow2.append(cols2);
        $("table.order-list2").append(newRow2);
        fetchtabletwo(countertwo);
        countertwo++;
    });

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });

    $("table.order-list").on("click", ".ibtnDeltwo", function (event) {
        $(this).closest("tr").remove();
        progress_report_length -= 1;

    });

    $("table.order-list2").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        countertwo -= 1
    });

    $("table.order-list2").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        countertwo -= 1
    });


    function userData()
    {
        $.ajax({
            url: "/user_info",
            type: "GET",
            dataType : "JSON",
            success: function(response) {
                users = response.user_data;
                accounting_info = response.accounting_information;
                console.log(users);
                console.log(accounting_info);

                $("#period").val(accounting_info[0].monthly_period);
                $("#compiler_name").val(accounting_info[0].compiler_firstname_lastname);
                $("#compiler_email").val(accounting_info[0].compiler_email);
                $("#compiler_phone").val(accounting_info[0].compiler_phone);
                $("#me_name").val(accounting_info[0].m_e_firstname_lastname);
                $("#me_phone").val(accounting_info[0].m_e_phone);
                $("#me_email").val(accounting_info[0].m_e_email);
                $("#approver_position").val(accounting_info[0].approver_position);
                $("#officer_name").val(accounting_info[0].approver_name);

                $("#lead_name").val(users[0].firstname_lastname);
                $("#lead_email").val(users[0].email);
                $("#lead_phone").val(users[0].phone);
                $("#department_name").val(users[0].organization_name);
            }
        });
    }

    function fetchtable(counter)
    {
        $.ajax({
            url: "/fetch-table",
            type: "GET",
            dataType : "JSON",
            success: function(response) {
                pillar_array = response.pillar_table;
                intervention_array = response.intervention_table;
                activity_array = response.activities_table;
                users = response.user_data;

                var s = '<option value="-1"></option>';
                var int = '<option value="-1"></option>';
                var activ = '<option value="-1"></option>';


                for(var i=0; i<pillar_array.length ; i++)
                {
                    var pillars = pillar_array[i].pillar;
                    s += '<option value="' + pillars + '">' + pillars + '</option>';
                }
                for(var j=0; j<intervention_array.length; j++)
                {
                    var interventions = intervention_array[j].intervention;
                    var pillar_id = parseInt(intervention_array[j].pillar_id);
                    var intervention_id = parseInt(intervention_array[j].id);

                    int += '<option value="' + intervention_id + '">' + interventions + '</option>';
                }
                for(var m=0; m<activity_array.length; m++)
                {
                    var activity_id = parseInt(activity_array[m].id);
                    var activity = activity_array[m].activity;
                    activ += '<option value="' + activity_id + '">' + activity + '</option>';
                }
                // $("#pillars_id").html(s);
                // $("#interventions0").html(int);
                // $("#activities0").html(activ);

                $(`#pillars_id${counter}`).html(s);
                $(`#interventions${counter}`).html(int);
                $(`#activities${counter}`).html(activ);

                console.log(pillar_array);
                console.log(intervention_array);
                console.log(activity_array);

            }
        });
    }

    function fetchtabletwo(countertwo)
    {
        $.ajax({
            url: "/fetch-table",
            type: "GET",
            dataType : "JSON",
            success: function(response) {
                pillar_array = response.pillar_table;
                intervention_array = response.intervention_table;
                activity_array = response.activities_table;

                var s = '<option value="-1"></option>';
                var int = '<option value="-1"></option>';
                var activ = '<option value="-1"></option>';

                for(var i=0; i<pillar_array.length ; i++)
                {
                    var pillars = pillar_array[i].pillar;
                    s += '<option value="' + pillars + '">' + pillars + '</option>';
                }
                for(var j=0; j<intervention_array.length; j++)
                {
                    var interventions = intervention_array[j].intervention;
                    var pillar_id = parseInt(intervention_array[j].pillar_id);
                    var intervention_id = parseInt(intervention_array[j].id);

                    int += '<option value="' + intervention_id + '">' + interventions + '</option>';
                }
                for(var m=0; m<activity_array.length; m++)
                {
                    var activity_id = parseInt(activity_array[m].id);
                    var activity = activity_array[m].activity;
                    activ += '<option value="' + activity_id + '">' + activity + '</option>';
                }

                // $("#pillars_id_two").html(s);
                // $("#interventions_two").html(int);
                // $("#activities_two").html(activ);

                $(`#intervention${countertwo}`).html(int);
                $(`#activity${countertwo}`).html(activ);
                //countertwo++;

                // console.log(pillar_array);
                // console.log(intervention_array);
                // console.log(activity_array);
            }
        });
    }

    function validate_project()
    {
        if($('#project_name').val() === '')
        {
            $('#error_validation').show();
            $('#error_validation').html("Please enter project name");
            window.scrollTo(0,0);
            return false
        }
        if($('#project_summary').val() === '')
        {
            $('#error_validation').show();
            $('#error_validation').html("Please enter project summary");
            window.scrollTo(0,0);
            return false
        }
        else{
            return true;
        }
    }



    function save_project()
    {
        if(validate_project())
        {
            if(countertwo === 0)
            {
                var intervention_num = null;
                var activity_num = null;
                var indicator_num = null;
                var target_num = null;

                if(!($('#project_name').val()))
                {
                    var project_list = [
                        project_array[0][0],
                        project_array[0][1],
                        project_array[0][2],
                        project_array[0][3],
                        project_array[0][4],
                        project_array[0][5],
                        intervention_num,
                        activity_num,
                        indicator_num,
                        target_num

                    ];
                    project_array.push(project_list);
                }else{
                    project_list = [
                        $('#project_name').val(),
                        $('#project_lead_name').val(),
                        $('#project_lead_contact').val(),
                        $('#project_start_date').val(),
                        $('#project_end_date').val(),
                        $('#project_summary').val(),
                        intervention_num,
                        activity_num,
                        indicator_num,
                        target_num
                    ];
                    console.log(project_list);
                    project_array.push(project_list);
                }
                $('#project_name').val('');
                $('#project_summary').val('');
                $('#project_lead_name').val('');
                $('#project_lead_contact').val('');
                $('#project_start_date').val('');
                $('#project_end_date').val('');

            }else{
                for(let i = 0; i < countertwo; i++) {
                    if(!($('#project_name').val()))
                    {
                        project_list = [
                            project_array[0][0],
                            project_array[0][1],
                            project_array[0][2],
                            project_array[0][3],
                            project_array[0][4],
                            project_array[0][5],
                            $(`#intervention${i}`).val(),
                            $(`#activity${i}`).val(),
                            $(`#indicator_project${i}`).val(),
                            $(`#target${i}`).val()

                        ];
                        project_array.push(project_list);
                    }else{
                        project_list = [
                            $('#project_name').val(),
                            $('#project_lead_name').val(),
                            $('#project_lead_contact').val(),
                            $('#project_start_date').val(),
                            $('#project_end_date').val(),
                            $('#project_summary').val(),
                            $(`#intervention${i}`).val(),
                            $(`#activity${i}`).val(),
                            $(`#indicator_project${i}`).val(),
                            $(`#target${i}`).val()
                        ];
                        console.log(project_list);
                        project_array.push(project_list);
                    }
                    $('#project_name').val('');
                    $('#project_lead_name').val('');
                    $('#project_lead_contact').val('');
                    $('#project_start_date').val('');
                    $('#project_end_date').val('');
                    $('#project_summary').val('');
                    $(`#intervention${i}`).val('');
                    $(`#activity${i}`).val('');
                    $(`#indicator_project${i}`).val('');
                    $(`#target${i}`).val('');
                    //project_array.push(project_list);
                }
            }


            //project_array.push(project_list);
            $('#error_validation').hide();
            $('#success_validation').show();
            $('#success_validation').html('Successfully saved a project');
            window.scrollTo(0,0);
        }
        console.log(project_array);
    }


    function pillarselector(value, counter) {
        var pillar_val = parseInt(value);
        var int = '<option value="-1"></option>';

        for(var j=0; j<intervention_array.length; j++)
        {
            var interventions = intervention_array[j].intervention;
            var pillar_id = parseInt(intervention_array[j].pillar_id);
            var intervention_id = parseInt(intervention_array[j].id);

            if(pillar_val === pillar_id)
            {
                int += '<option value="' + intervention_id + '">' + interventions + '</option>';
            }
        }
        $("#interventions0").html(int);
        $("#interventions_two").html(int);
    }

    function pillarselectortwo(value, counter) {
        var pillar_val = parseInt(value);
        var int = '<option value="-1"></option>';

        for(var j=0; j<intervention_array.length; j++)
        {
            var interventions = intervention_array[j].intervention;
            var pillar_id = parseInt(intervention_array[j].pillar_id);
            var intervention_id = parseInt(intervention_array[j].id);

            if(pillar_val === pillar_id)
            {
                int += '<option value="' + intervention_id + '">' + interventions + '</option>';
            }
        }
        $(`#interventions${counter}`).html(int);
    }

    function interventionselector(value, counter) {
        var intervention_val = parseInt(value);
        console.log(intervention_val);
        var activ = '<option value="-1"></option>';

        for(var m=0; m<activity_array.length; m++)
        {
            var activity_id = parseInt(activity_array[m].id);
            var interventions_activity = parseInt(activity_array[m].intervention_id);
            var activity = activity_array[m].activity;
            var pilla = parseInt(activity_array[m].pillar_id);
            if(intervention_val === interventions_activity)
            {
                activ += '<option value="' + activity_id + '">' + activity + '</option>';
            }
        }
        $("#activities0").html(activ);
        $("#activities_two").html(activ);
    }

    function interventionselectortwo(value, counter) {
        var intervention_val = parseInt(value);

        var activ = '<option value="-1"></option>';

        for(var m=0; m<activity_array.length; m++)
        {
            var activity_id = parseInt(activity_array[m].id);
            var interventions_activity = parseInt(activity_array[m].intervention_id);
            var activity = activity_array[m].activity;
            var pilla = parseInt(activity_array[m].pillar_id);
            if(intervention_val === interventions_activity)
            {
                activ += '<option value="' + activity_id + '">' + activity + '</option>';
            }
        }
        $(`#activities${counter}`).html(activ);
    }

    function activityselector(value) {
        return parseInt(value);
    }

    /**============================================== Table add rows =========================================================**/

    function calculateRow(row) {
        var price = +row.find('input[name^="price"]').val();

    }

    function calculateGrandTotal() {
        var grandTotal = 0;
        $("table.order-list").find('input[name^="price"]').each(function () {
            grandTotal += +$(this).val();
        });
        $("#grandtotal").text(grandTotal.toFixed(2));
    }


    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next',
    };


    function terms_changed(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("instruction_nxt").disabled = false;
        } else{
            document.getElementById("instruction_nxt").disabled = true;
        }
    }
    function terms_changed_details(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("details_nxt").disabled = false;
        } else{
            document.getElementById("details_nxt").disabled = true;
        }
    }
    function terms_changed_nav1(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("instruction_nav").disabled = false;
        } else{
            document.getElementById("instruction_nav").disabled = true;
        }
    }
    function terms_changed_nav2(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("mandate_nav").disabled = false;
        } else{
            document.getElementById("mandate_nav").disabled = true;
        }
    }
    function terms_changed_nav3(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("progress_nav").disabled = false;
        } else{
            document.getElementById("progress_nav").disabled = true;
        }
    }
    function terms_changed_nav4(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("response_nav").disabled = false;
        } else{
            document.getElementById("response_nav").disabled = true;
        }
    }



    const removeClasses = (elemSet, className) => {

        elemSet.forEach(elem => {

            elem.classList.remove(className);

        });

    };

    const findParent = (elem, parentClass) => {

        let currentNode = elem;

        while (!currentNode.classList.contains(parentClass)) {
            currentNode = currentNode.parentNode;
        }

        return currentNode;

    };

    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    const setActiveStep = activeStepNum => {

        removeClasses(DOMstrings.stepsBtns, 'js-active');

        DOMstrings.stepsBtns.forEach((elem, index) => {

            if (index <= activeStepNum) {
                elem.classList.add('js-active');
            }

        });
    };

    const getActivePanel = () => {

        let activePanel;
        DOMstrings.stepFormPanels.forEach(elem => {

            if (elem.classList.contains('js-active')) {
                activePanel = elem;
            }

        });

        return activePanel;

    };

    const setActivePanel = activePanelNum => {

        removeClasses(DOMstrings.stepFormPanels, 'js-active');

        DOMstrings.stepFormPanels.forEach((elem, index) => {
            if (index === activePanelNum) {

                elem.classList.add('js-active');

                setFormHeight(elem);

            }
        });

    };

    const formHeight = activePanel => {

        const activePanelHeight = activePanel.offsetHeight;

        DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

    };

    const setFormHeight = () => {
        const activePanel = getActivePanel();

        formHeight(activePanel);
    };

    DOMstrings.stepsBar.addEventListener('click', e => {

        const eventTarget = e.target;

        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
            return;
        }

        const activeStep = getActiveStep(eventTarget);

        setActiveStep(activeStep);
        setActivePanel(activeStep);
    });



    DOMstrings.stepsForm.addEventListener('click', e => {

        const eventTarget = e.target;
        if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
        {
            console.log("number of rows: "+progress_report_length);
            return;
        }

        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
        let activePanelTitle = Array.from(DOMstrings.stepFormPanels).hasOwnProperty(activePanel);


        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;
        } else {
            activePanelNum++;
        }
        /*----------------------------- validating next-----------------------------*/
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(activePanelNum === 0)
        {
            $('#error_validation').hide();
            $('#success_validation').hide();
        }

        if(activePanelNum === 1)
        {
            $('#error_validation').hide();
            $('#success_validation').hide();
        }

        if(activePanelNum === 2)
        {
            $('#error_validation').hide();
            $('#success_validation').hide();
            if($('#department_name').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter department name");
                window.scrollTo(0,0);
                return false
            }

            if($('#period').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter your monthly reporting period");
                window.scrollTo(0,0);
                return false
            }

            if($('#compiler_name').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter compiler's name and surname");
                window.scrollTo(0,0);
                return false
            }

            if($('#compiler_email').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter compiler's email address");
                window.scrollTo(0,0);
                return false
            }


            if(($('#compiler_email').val()).match(mailformat))
            {
                $('#error_validation').hide();
                window.scrollTo(0, 0);
            }
            else
            {
                $('#error_validation').html("Compiler's email address is invalid");
                $('#error_validation').show();
                window.scrollTo(0, 0);
            }

            if($('#compiler_phone').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter compiler's contact number");
                window.scrollTo(0,0);
                return false
            }
            if($('#me_name').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter evaluator's name & surname");
                window.scrollTo(0,0);
                return false
            }
            if($('#me_phone').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter evaluator's contact number");
                window.scrollTo(0,0);
                return false
            }
            if($('#me_email_address').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter evaluator's email address ");
                window.scrollTo(0,0);
                return false
            }

            // if(($('#me_email_address').val()).match(mailformat))
            // {
            //     $('#error_validation').hide();
            //     window.scrollTo(0, 0);
            // }
            // else
            // {
            //     $('#error_validation').html("Evaluator's email address is invalid");
            //     $('#error_validation').show();
            //     window.scrollTo(0, 0);
            // }

            if($('#lead_email').val() !== '')
            {
                if(($('#lead_email').val()).match(mailformat))
                {
                    $('#error_validation').hide();
                    window.scrollTo(0, 0);
                }
                else
                {
                    $('#error_validation').html("Lead person's email address is invalid");
                    $('#error_validation').show();
                    window.scrollTo(0, 0);
                }
            }

            if($('#approver_position').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter the approver's position");
                window.scrollTo(0,0);
                return false
            }

            if($('#officer_name').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please enter the approver's name & surname");
                window.scrollTo(0,0);
                return false
            }
            else{
                $('#error_validation').hide();
                $('#success_validation').hide();
            }
        }

        if(activePanelNum === 3)
        {
            console.log('hello');
            $('#error_validation').hide();
            $('#success_validation').hide();
            if($('#mandate').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please fill in the Mandate in relation to GBVF");
                window.scrollTo(0,0);
                return false
            }

            if(project_array.length > 0)
            {
                $('#error_validation').hide();
                $('#success_validation').hide();
                if (eventTarget.classList.contains(`${DOMstrings.stepSkipBtnClass}`)) {
                    activePanelNum++;
                }
                if (eventTarget.classList.contains(`${DOMstrings.stepSkipBackBtnClass}`)) {
                    activePanelNum--;
                }
            }
            getActivePanel();
            setActivePanel(3);
            return true;

        }

        if(activePanelNum === 4)
        {
            if(project_array.length === 0)
            {
                $('#error_validation').hide();
                $('#success_validation').hide();
                $('#error_validation').show();
                $('#error_validation').html('Please enter at least one project');
                window.scrollTo(0,0);
                return false
            }

            $('#error_validation').hide();
            $('#success_validation').hide();

            var containertable = document.getElementById("containertable");
            containertable.innerHTML = "";

            if(project_array)
            {
                if(i>-1)
                {
                    i =-1;
                }
                project_array.map(function (project) {
                    i++;
                    j = i;

                    containertable.innerHTML +=
                        `
                                                <tr>
                                                    <td class="col-sm-2"><input type="hidden" name="project_name_report`+ i +`" id="project_name_report` + i + `" class="form-contro" />${project[0]}</td>
                                                    <td class=""><input type="hidden" class="form-contro" id="indicators_report` + i + `" name="indicators_report` + i + `"/>${project[8]}</td>
                                                    <td class=""><input type="text" class="form-contro" id="target_report` + i + `" name="target_report` + i + `"/></td>
                                                    <td class=""><input type="text" class="form-contro" id="progress_report` + i + `" name="progress_report` + i + `"/></td>
                                                    <td class="col-sm-2"><input type="text" class="form-contro" id="deviation_report` + i + `" name="deviation_report` + i + `"/></td>
                                                    <td class="col-sm-2"><input type="text" class="form-contro" id="measure_report` + i + `" name="measures_report` + i + `"/></td>
                                                    <td class=""><select class="form-select form-contro" name="performance_report` + i + `" aria-label="Default select example">
                                                            <option value=""></option>\\n' +
                                                            <option value="Achieved">Achieved</option>
                                                            <option value="In progress">In progress</option>
                                                            <option value="Not achieved">Not achieved</option>
                                                            </select>
                                                        </td>
                                                    <td class=""><input type="button" id="del_project_row" onclick="delete_row(`+i+`)" class="ibtnDeltwo btn btn-md btn-danger "  value="Del"></td>
                                                </tr>
                                           `;
                });
                progress_report_count.push(i+1);
                progress_report_length = i+1;
                console.log('progress report count '+ progress_report_count);
                console.log('progress report length '+ progress_report_length);
            }
            if(i < j)
            {
                const last_row_val = j+1;
                $('#last_row_length').val(last_row_val);
                console.log('this is j: '+ last_row_val);
            }
        }


        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);

        const new_project = document.getElementById('new_project_slide_back');
        new_project.addEventListener("click", () => {
            getActivePanel();
            setActivePanel(3);
        });


    });


    function delete_row(number)
    {
        console.log('deleting '+ number);
        project_array.splice(number,1);
        console.log(project_array);
    }

    function submit_form()
    {
        $('#submit_project_array').val(JSON.stringify(project_array));
        $('#progress_report_length').val(JSON.stringify(progress_report_length));
        $('#gbvf_form').submit();
    }

    window.addEventListener('load', setFormHeight, false);

    window.addEventListener('resize', setFormHeight, false);


    const setAnimationType = newType => {
        DOMstrings.stepFormPanels.forEach(elem => {
            elem.dataset.animation = newType;
        });
    };

    //changing animation
    const animationSelect = document.querySelector('.pick-animation__select');

    animationSelect.addEventListener('change', () => {
        const newAnimationType = animationSelect.value;

        setAnimationType(newAnimationType);
    });


</script>

</body>
</html>
