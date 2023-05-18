<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>GBVF Form</title>
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
        .table-bordered th {
            color : #fff;
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
            color: #fff;
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
            color: #fff;
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
            color: #fff;
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

    </style>
</head>
<body>

<div class=" form_container">
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
                <form class="pick-animation my-4">
                    <div class="form-row">
                    </div>
                </form>

            </div>
            <div class="container overflow-hidden">
                <div class="multisteps-form">
                    <div class="row">
                        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" id="instruction" title="instruction_nxt" >Instructions</button>
                                <button class="multisteps-form__progress-btn" type="button" id="instruction_nav" title="contact" disabled>Contact information</button>
                                <button class="multisteps-form__progress-btn" type="button" id="mandate_nav" title="mandate" disabled>GBVF Mandate</button>
                                <button class="multisteps-form__progress-btn" type="button" id="project_nav" title="project" disabled>Project</button>
                                <button class="multisteps-form__progress-btn" type="button" id="progress_nav" title="report" disabled>Progress report</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <div id="success_validation" class="alert alert-success" role="alert" style="display: none; text-align: center ;width: 100%"></div>
                            <div id="error_validation" class="alert alert-danger" role="alert" style="display: none; text-align: center ;width: 100%"></div>
                            <form class="multisteps-form__form" method="post" id="gbvf_form" action="{{url('form')}}">
                                @csrf
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn" >
                                    <h6 class="titl">Instructions</h6>
                                    <div class="instructions" id="instructions">
                                        <ol type = "1">
                                            <li>Please ensure all sections are populated – there are 4 sections to be completed.</li>
                                            <li>Part 3 requires all sections to be completed. Where not applicable, please select N/A</li>
                                            <li>Please report on all targets for the financial year and outstanding targets for pervious financial years.</li>
                                            <li>Please do not report on previously reported progress – where no progress has been made for the month, please report as “No progress” for data collection purposes.</li>
                                            <li>Please note requirement for Approval by the Accounting Officer</li>
                                            <li>All fields marked with an asterisks (<label class="asterisks">*</label>) require information. </li>
                                        </ol>

                                        <input type="checkbox" id="approved" name="approved" onclick="instruction_auth(this),terms_changed_nav1(this)" aria-label="Checkbox for following text input"> I acknowledge the above instructions and will complete all sections as required. <p style="color: red; display: inline-block"> *</p><br>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary ml-auto js-btn-next" id="instruction_nxt" type="button" title="Next" disabled>Next</button>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" id="accounting_info" data-animation="scaleIn">
                                    <h1 class="titl" style=" text-align: center">Monthly Progress Report Template: Part 1: Contact Information</h1>
                                    <br>
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="danger" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    {{--===================================== Accounting information ====================================================--}}
                                    <div class="myPaddling" name="accounting information">
                                        <label class="part1label" >Details of representative compiling report:</label>
                                        <div >
                                            <label> Name of Department/Agency <label class="asterisks">*</label>  : </label>
                                            <input type="text" class="form-control" id="department_name" name="department_name" placeholder="" >
                                        </div><br>
                                        <div >
                                            <label for="period">Monthly Reporting Period <label class="asterisks">*</label>  :</label>
                                            <input type="date" class="form-control" id="period" name="period" placeholder="" required>
                                        </div><br>
                                        <div >
                                            <label for="name">Name & Surname <label class="asterisks">*</label>  : </label>
                                            <input type="text" class="form-control" id="compiler_name" name="compiler_name" placeholder="" >
                                        </div><br>
                                        <div >
                                            <label for="">Email Address <label class="asterisks">*</label>  :</label>
                                            <input type="email" class="form-control" id="compiler_email"  name="compiler_email" placeholder="" >
                                        </div><br>
                                        <div >
                                            <label>Cell Number <label class="asterisks">*</label> :</label>
                                            <input type="text" class="form-control" id="compiler_phone" name="compiler_phone" placeholder="" >
                                        </div><br>
                                    </div>

                                    <!--===================================================== M&E CONTACT PERSON =============================================================-->

                                    <div style="width: 66% ; border: none; padding-top: 0px" class="myPaddling" name="accounting information">
                                        <div style="width: 49%" class="doublediv" name="accounting information">
                                            <label class="part1label">Monitoring & Evaluation contact person:</label>

                                            <div >
                                                <label for="">Name & Surname <label class="asterisks">*</label> :</label>
                                                <input type="text" class="form-control" id="me_name" name="me_name" placeholder="" >
                                            </div>
                                            <br>

                                            <div >
                                                <label for="">Cell Number <label class="asterisks">*</label> :</label>
                                                <input type="text" class="form-control" id="me_phone" name="me_phone" placeholder="" >
                                            </div>
                                            <br>

                                            <div >
                                                <label for="">Email Address <label class="asterisks">*</label> :</label>
                                                <input type="text" class="form-control" id="me_email" name="me_email" placeholder="" >
                                            </div>
                                        </div>

                                        <div style="width: 49%" class="doublediv" name="accounting information">
                                            <label class="part1label" >Lead Contact person (if different person):</label>
                                            <div >
                                                <label for="">Name & Surname:</label>
                                                <input type="text" class="form-control" id="lead_name" name="lead_name" placeholder="">
                                            </div>
                                            <br>

                                            <div >
                                                <label for="">Cell Number:</label>
                                                <input type="text" class="form-control" id="lead_phone" name="lead_phone" placeholder="">
                                            </div>
                                            <br>

                                            <div >
                                                <label for="">Email Address :</label>
                                                <input type="text" class="form-control" id="lead_email" name="lead_email" placeholder="">
                                            </div>
                                        </div><br>

                                        <div style="width: 99%" class="singleDiv" name="accounting information">
                                            <div style="width: 45%" class="singleDiv2">
                                                <label class="part1label" >Accounting Officer Approval:</label><br>
                                                <label for="">Position <label class="asterisks">*</label> :</label><br>
                                                <input class="form-control-officer" id="approver_position" name="approver_position" placeholder="" type="text" list="position" />
                                                <datalist id="position">
                                                    <option>Accounting officer</option>
                                                    <option>Manager</option>
                                                    <option>Supervisor</option>
                                                    <option>COO</option>
                                                </datalist>
                                                <label for="">Name & Surname <label class="asterisks">*</label> :</label><br>
                                                <input type="text" class="form-control-officer" id="officer_name" name="officer_name" placeholder="">

                                            </div>
                                            <div style="width: 54%" class="singleDiv2">
                                                {{--                              <input type="checkbox" id="approved" name="approved" onclick="terms_changed1(this)" aria-label="Checkbox for following text input"> Approved by accounting officer <br>--}}
                                                <input type="checkbox" id="agree" name="agreed" onclick="contact_auth(this), mandate_auth(this)" aria-label="Checkbox for following text input"> Agree that the above provided information is correct <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary ml-auto js-btn-next" id="details_nxt" type="button" title="Next" disabled>Next</button>
                                    </div>

                                </div>
                                <!--===================================================== part 2 =============================================================-->


                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                    <h1 class="titl" >Part 2: Mandate in relation to GBVF</h1>
                                    <div  class="part2">
                                        <div class="edict">
                                            <p>Mandate in relation to GBVF :</p>
                                            <textarea id="mandate" name="mandate_text"></textarea>
                                        </div>
                                        <input type="checkbox" id="mandate_agree" name="mandate_agreed" onclick="mandate_nxt_auth(this), mandate_auth(this), project_auth(this) " aria-label="Checkbox for following text input"> I acknowledge the above instructions and will complete all sections as required.
                                    </div>
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary ml-auto js-btn-next js-btn-skip" id="skip" type="button" title="Next" disabled>Next</button>
                                    </div>
                                </div>


                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" id="project_info" data-animation="scaleIn">
                                    <h1 class="titl" style=" text-align: center">Monthly Progress Report Template: Adding of Project</h1>
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="danger" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    {{--===================================== Project information ====================================================--}}
                                    <div class="project_container">
                                        <label class="part1label" >New Project Details:</label>
                                        <div id="success_validation" class="alert alert-success" role="alert" style="display: none;width: 100%"></div>
                                        <div id="error_validation" class="alert alert-danger" role="alert" style="display: none;width: 100%"></div>
                                        <br>
                                        <div class="container_one">
                                            <label> Name of Project <label class="asterisks">*</label>  : </label><br>
                                            <input type="text" aria-placeholder="" class="form-control-project" id="project_name" name="project_name" placeholder="" >
                                        </div>
                                        <div class="container_one">
                                            <label> Project Lead <label class="asterisks">*</label>  : </label><br>
                                            <input type="text" class="form-control-project" id="project_lead_name" name="project_lead_name" placeholder="" >
                                        </div>
                                        <div class="container_one">
                                            <label> Project Lead Contact <label class="asterisks">*</label>  : </label><br>
                                            <input type="text" class="form-control-project" id="project_lead_contact" name="project_lead_contact" placeholder="" >
                                        </div>
                                        <br><br>

                                        <div class="container_two">
                                            <label> Project Start Date <label class="asterisks">*</label>  : </label>
                                            <input type="date" class="form-control form-control-project"  id="project_start_date" name="project_start_date" placeholder="" >
                                        </div>
                                        <div class="container_two">
                                            <label> Project End Date <label class="asterisks">*</label>  : </label>
                                            <input type="date" class="form-control form-control-project" id="project_end_date" name="project_end_date" placeholder="" >
                                        </div>

                                        <br><br>
                                        <div  class="">
                                            <div class="">
                                                <p>Project details/summary <label class="asterisks">*</label> :</p>
                                                <textarea id="project_summary" name="project_summary"></textarea>
                                            </div>
                                        </div><br>
                                        <div class="containertable">
                                            <table id="myTable" style="font-size: 15px" class=" table order-list2 table-bordered">
                                                <caption>Note: Please use the Add Row button to add new rows </caption>
                                                <thead class="table_header">
                                                <tr>
                                                    <td class="col-sm-4">Intervention</td>
                                                    <td class="col-sm-4">Activities</td>
                                                    <td class="col-sm-4">Indicators</td>
                                                    <td class="col-sm-1">Target</td>
                                                    <td class=""><a class="deleteRow"></a>Action</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="10" style="text-align: left;">
                                                        <input type="button" class="btn btn-lg btn-block " id="addrow2" value="Add Row" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <p class="para pillar-reference">For reference on the pillars and interventions used to address GBVF please click <button type="button" class="pillars" onclick="window.location='{{ url('/pillars')}}'">here</button> </p>
                                        <br>
                                        <input type="checkbox" id="agree" class="pillar-reference" name="project_checkbox" onclick="project_save_auth(this), progress_auth(this)" aria-label="Checkbox for following text input"><p class="pillar-reference"> Agree that the above provided information is correct </p><br>
                                        <br>
                                        <button type="button" class="btn-save" id="btn-save" onclick="save_project()" disabled>Save</button>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" id="details_nxt" type="button" title="Next" >Next</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                    <h1 class="titl">Monthly Progress Report Template: Part 3: National Strategic Plan on GBVF Monthly Progress Report</h1>
                                    <p style="font-size: 15px; text-align: center" class="para">For reference on the pillars and interventions used to address GBVF please click <button type="button" class="pillars" onclick="window.location='{{ url('/pillars')}}'">here</button> </p>
                                    <div class="multisteps-form__content container_content">
                                        <div class="containertable" id="containerr">
                                            <table id="myTable" style="font-size: 15px" class=" table order-list table-bordered">
                                                <caption>Note: Please use the Add Row button to add new rows </caption>
                                                <thead>
                                                <tr class="table_header">
                                                    <td class="">Project Name</td>
                                                    <td class="">Indicators</td>
                                                    <td class="">Target </td>
                                                    <td class="">Progress </td>
                                                    <td class="">Deviation reason</td>
                                                    <td class="">Corrective measures</td>
                                                    <td class="">Performance</td>
                                                    <td class=""><a class="deleteRow"></a>Action</td>
                                                </tr>
                                                </thead>
                                                <tbody id="containertable">

                                                </tbody>
                                                <tfoot>

                                                <tr>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <br>
                                        <button type="button" id="new_project_slide_back" class="btn-new_project">New Project</button>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev js-btn-skip-back" type="button" title="Prev">Prev</button>
                                            {{--                                        <button class="btn btn-primary ml-auto js-btn-next" value="submit" title="Next" onclick="submit_form()" type="submit">Submit</button>--}}
                                            <button class="btn btn-success ml-auto" value="submit" title="Send" id="submitting" onclick="submit_form()" type="button">Submit</button>
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
</div>
<script  >

    var pillar_array = [];
    var intervention_array = [];
    var activity_array = [];
    var users =[];
    var accounting_info =[];
    var mandate_info =[];
    var projects_db_data =[];
    var counter = 0;
    var i = -1;
    var j;
    var countertwo = 0;
    var project_array = [];
    var progress_report_count = [];
    var progress_report_length = 0;
    var project_count = 1;

    fetchtable();
    fetchtabletwo();
    userData();

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

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
    });

    $("#addrow2").on("click", function () {
        var newRow2 = $("<tr id='project_table_rows' class='project_table'>");
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
                var project_data;
                users = response.user_data;
                accounting_info = response.accounting_information;
                mandate_info = response.mandate_informaton;
                project_data = response.project_information;
                console.log(project_data);
                console.log(response.count);

                for(let i=0; i< project_data.length; i++)
                {
                    var innerList = Object.values(project_data[i]);
                    innerList.splice(0,2);
                    project_array.push(innerList);
                }

                //$("#period").val(accounting_info[0].monthly_period);
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
                $('#mandate').val(mandate_info[0].instructions);
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

                $(`#pillars_id${counter}`).html(s);
                $(`#interventions${counter}`).html(int);
                $(`#activities${counter}`).html(activ);
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

                $(`#intervention${countertwo}`).html(int);
                $(`#activity${countertwo}`).html(activ);
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
                    console.log('make a plan');
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
                $('#project_name').val();
                $('#project_summary').val();
                $('#project_lead_name').val();
                $('#project_lead_contact').val();
                $('#project_start_date').val();
                $('#project_end_date').val();

            }else{
                for(let i = 0; i < countertwo; i++) {
                    if(!($('#project_name').val()))
                    {
                        project_list = [
                            project_array[i-1][0],
                            project_array[i-1][1],
                            project_array[i-1][2],
                            project_array[i-1][3],
                            project_array[i-1][4],
                            project_array[i-1][5],
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
                    $(`#intervention${i}`).val('');
                    $(`#activity${i}`).val('');
                    $(`#indicator_project${i}`).val('');
                    $(`#target${i}`).val('');
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

                var elem = document.getElementById("project_table_rows");
                elem.remove("project_table");
            }
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

    function project_save_auth(termsCheckBox)
    {
        if(termsCheckBox.checked)
        {
            document.getElementById("btn-save").disabled = false;
        }else{
            document.getElementById("btn-save").disabled = true;
        }
    }

    function instruction_auth(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("instruction_nxt").disabled = false;
        } else{
            document.getElementById("instruction_nxt").disabled = true;
        }
    }
    function contact_auth(termsCheckBox){
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
    function mandate_auth(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("mandate_nav").disabled = false;
        } else{
            document.getElementById("mandate_nav").disabled = true;
        }
    }
    function mandate_nxt_auth(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("skip").disabled = false;
        } else{
            document.getElementById("skip").disabled = true;
        }
    }
    function project_auth(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("project_nav").disabled = false;
        } else{
            document.getElementById("project_nav").disabled = true;
        }
    }
    function progress_auth(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("progress_nav").disabled = false;
        } else{
            document.getElementById("progress_nav").disabled = true;
        }
    }

    var start_date = document.getElementById('project_start_date');
    start_date.addEventListener('change', () =>{
        $('#error_validation').hide();
        $('#success_validation').hide();

        var date = Date.parse($('#project_start_date').val());
        var todaysDate = new Date();
        todaysDate.setDate(todaysDate.getDate() - 1);
        todaysDate.toISOString();
        Date.parse(todaysDate);

        if(date < todaysDate){
            $('#error_validation').show();
            $('#error_validation').html("Start date cannot be less than current Date");
            $('#project_start_date').val('');
            window.scrollTo(0,0);
            return false;
        }
    });

    var end_date = document.getElementById('project_end_date');
    end_date.addEventListener('change', () =>{
        $('#error_validation').hide();
        $('#success_validation').hide();

        var date = Date.parse($('#project_end_date').val());
        var todaysDate = new Date();
        todaysDate.setDate(todaysDate.getDate() - 1);
        Date.parse(todaysDate);
        todaysDate.toISOString().split('T')[0];
        if(date < todaysDate){
            $('#error_validation').show();
            $('#error_validation').html("End date cannot be less than current Date");
            $('#project_end_date').val('');
            window.scrollTo(0,0);
            return false;
        }
        return true;
    });

    var reporting_period = document.getElementById('period');
    reporting_period.addEventListener('change', () =>{
        $('#error_validation').hide();
        $('#success_validation').hide();

        var date = Date.parse($('#period').val());
        var todaysDate = new Date();
        todaysDate.setDate(todaysDate.getDate() - 1);
        todaysDate.toISOString();
        Date.parse(todaysDate);

        if(date < todaysDate){
            $('#error_validation').show();
            $('#error_validation').html("Reporting_period cannot be less than current Date");
            $('#period').val('');
            window.scrollTo(0,0);
            return false;
        }
    });

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
        stepSkipBtnClass: 'js-btn-skip',
        stepSkipBackBtnClass: 'js-btn-skip-back',
    };

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
            return;
        }
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            $('#error_validation').hide();
            $('#success_validation').hide();
            activePanelNum--;

        } else {
            $('#error_validation').hide();
            $('#success_validation').hide();
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
                return false;
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
            //     $('#error_validation').show();
            //     $('#error_validation').html("Evaluator's email address is invalid");
            //     window.scrollTo(0, 0);
            //     return false;
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
            console.log(project_array);
            $('#error_validation').hide();
            $('#success_validation').hide();
            if(project_array.length > 0)
            {
                console.log('suppose to move');
                if (eventTarget.classList.contains(`${DOMstrings.stepSkipBtnClass}`)) {
                    activePanelNum++;
                }
                if (eventTarget.classList.contains(`${DOMstrings.stepSkipBackBtnClass}`)) {
                    activePanelNum--;
                }
            }
            if($('#mandate').val() === '')
            {
                $('#error_validation').show();
                $('#error_validation').html("Please fill in the Mandate in relation to GBVF");
                window.scrollTo(0,0);
                return false
            }
            getActivePanel();
            setActivePanel(3);
            getActiveStep();
            setActiveStep(3);
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
            if(projects_db_data)
            {
                if(i>-1)
                {
                    i =-1;
                }
                projects_db_data.map(function (projectdb) {
                    i++;
                    j = i;

                    containertable.innerHTML +=
                        `
                                                <tr>
                                                    <td class="col-sm-2" id="project_name_report`+ i +`"><input type="hidden" name="project_name_report`+ i +`" id="project_name_report` + i + `" class="form-contro" />${projectdb[2]}</td>
                                                    <td class=""><input type="hidden" class="form-contro" id="indicators_report` + i + `" name="indicators_report` + i + `"/>${projectdb[10]}</td>
                                                    <td class=""><input type="hidden" class="form-contro" id="target_report` + i + `" name="target_report` + i + `"/>${projectdb[11]}</td>
                                                    <td class="" contenteditable="true"><input type="hidden" class="form-contro" id="progress_report` + i + `" name="progress_report` + i + `"/>${projectdb[12]}</td>
                                                    <td class="col-sm-2" contenteditable="true"><input type="hidden" class="form-contro" id="deviation_report` + i + `" name="deviation_report` + i + `"/>${projectdb[13]}</td>
                                                    <td class="col-sm-2" contenteditable="true"><input type="hidden" class="form-contro" id="measure_report` + i + `" name="measures_report` + i + `"/>${projectdb[14]}</td>
                                                    <td class=""><select onchange="perfom(i)" class="form-select form-contro" id="performance_report` + i + `" name="performance_report` + i + `" aria-label="Default select example">
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
                $(`#project_name_report${i}`).val();
            }
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
                                                <tr class="table_formed">
                                                    <td class=""><div id="project_name_report` + i + `">${project[0]}</div></td>
                                                    <td class="" name="indicators_report` + i + `"><div class="form-contro" id="indicators_report` + i + `" name="indicators_report` + i + `">${project[8]}</div></td>
                                                    <td class=""><div class="form-contro" id="target_report` + i + `" name="target_report` + i + `">${project[9]}</div></td>
                                                    <td class="" ><div contenteditable="true" class="form-contro" id="progress_report` + i + `" name="progress_report` + i + `">${project[10]}</div></td>
                                                    <td class="col-sm-2" ><div contenteditable="true" class="form-contro" id="deviation_report` + i + `" name="deviation_report` + i + `">${project[11]}</div></td>
                                                    <td class="col-sm-2" ><div contenteditable="true" class="form-contro" id="measure_report` + i + `" name="measures_report` + i + `">${project[12]}</div></td>
                                                    <td class="" id="performance_report` + i + `">
                                                            <select class="form-select form-contro" onchange="per(i)" id="performance_report` + i + `" name="performance_report` + i + `" aria-label="Default select example">
                                                            <option value="gt" ></option>
                                                            <option value="Achieved">Achieved</option>
                                                            <option value="In progress">In progress</option>
                                                            <option value="Not achieved">Not achieved</option>
                                                            </select>
                                                        </td>
                                                    <td class=""><input type="button" id="del_project_row" onclick="delete_row(`+i+`)" class="ibtnDeltwo btn btn-md btn-danger "  value="Del"></td>
                                                </tr>
                                           `;
                });
                console.log(project_array);
                progress_report_count.push(i+1);
                progress_report_length = i+1;

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
            getActiveStep();
            setActiveStep(3);
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
        if($(`#performance_report${i} option:selected`).text() === '')
        {
            $('#error_validation').show();
            $('#error_validation').html('Please enter the performance');
            window.scrollTo(0,0);
            return false
        }
        for(let i=0; i < progress_report_length; i++)
        {
            var progress_report = document.getElementById("progress_report"+i);
            var deviation_report = document.getElementById("deviation_report"+i);
            var measure_report = document.getElementById("measure_report"+i);

            var progress = progress_report.innerHTML;
            var deviation = deviation_report.innerHTML;
            var measure = measure_report.innerHTML;

            project_array[i][10] = progress;
            project_array[i][11] = deviation;
            project_array[i][12] = measure;
            project_array[i][13] = $(`#performance_report${i} option:selected`).text();
        }

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

    const animationSelect = document.querySelector('.pick-animation__select');
    animationSelect.addEventListener('change', () => {
        const newAnimationType = animationSelect.value;
        setAnimationType(newAnimationType);
    });

</script>

</body>
</html>

