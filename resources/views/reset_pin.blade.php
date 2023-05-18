<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GBVF Web form</title>

    <style>

        .cardStyle {
            width: 350px;
            border-color: white;
            background: #fff;
            padding: 36px 0;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: 0px 0 10px 0 mediumseagreen;
        }

        .formTitle{
            font-weight: 500;
            margin-top: 10px;
            color: #fff;
            text-align: center;
            background-color: seagreen;
            padding: 2px;
        }
        .inputLabel {
            font-size: 17px;
            color: #555;
            margin-bottom: 6px;
            margin-top: 8px;
        }
        .loginLabel {
            font-size: 17px;
            color: seagreen;
            margin-bottom: 6px;
            margin-top: 24px;
        }
        .inputDiv {
            width: 70%;
            display: flex;
            flex-direction: column;
            margin: auto;
        }
        input {
            height: 40px;
            font-size: 16px;
            border-radius: 4px;
            border: solid 2px seagreen;
            padding: 0 11px;
            outline: none;
        }
        input:disabled {
            cursor: not-allowed;
            border: solid 1px #eee;
        }
        .buttonWrapper {
            margin-top: 40px;
        }
        .submitButton {
            width: 70%;
            height: 40px;
            margin: auto;
            display: block;
            color: #fff;
            background-color: seagreen;
            border-color: mediumseagreen;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .submitButton:disabled,
        button[disabled] {
            border: 1px solid #cccccc;
            background-color: #cccccc;
            color: #666666;
        }
        .mainDiv {
            display: flex;
            min-height: 100%;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;

            /*font-family: 'Open Sans', sans-serif;*/
        }
        body{
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            background-color : aliceblue;
        }
        .logo{
            width: 17%;
            margin-top: -20px;
        }
        .alert{
            font-size: 17px;
        }
    </style>
</head>
<body>

<h2></h2>

<div class="mainDiv">
    <div class="cardStyle">
        <form action="{{URL('reset_pin')}}" method="POST" name="forgot_pin" id="forgot_pin">
            @csrf
            <p style="text-align: center"><img class="logo" src="{{asset('image/rsa.png')}}" ></p>
            <h3 class="formTitle">
                Forgot Password
            </h3>
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
            <div class="inputDiv">
                <label class="inputLabel" for="password">Temporary Pin</label>
                <input type="password" id="temporary_pin" name="temporary_pin" required>
            </div>
            <div class="inputDiv">
                <label class="inputLabel" for="password">New Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="inputDiv">
                <label class="inputLabel" for="password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="buttonWrapper">
                <button type="submit" id="submitButton" onclick="validateForm()" class="submitButton pure-button pure-button-primary">
                    <span>Continue</span>
                </button>

            </div>

            <div class="inputDiv">
                <a typeof="button" onclick="window.location='{{ url('/')}}'" class="loginLabel" href="#" >Return to Login</a>
            </div>
        </form>
    </div>
</div>


{{--<div class="container" id="container">--}}
{{--    <div class="form-container sign-in-container">--}}
{{--        <form action="{{URL('login')}}" method="POST">--}}
{{--            @csrf--}}
{{--            <p style="text-align: center"><img class="logo" src="{{asset('image/rsa.png')}}" ></p>--}}
{{--            <h1>Sign in</h1>--}}
{{--            <span>or use your account</span>--}}
{{--            <input name="email" type="email" placeholder="Email" required/>--}}

{{--            <input type="password" name="password" placeholder="Password" required />--}}
{{--            <a type="button" onclick="window.location='{{ url('/register')}}'" href="#">Forgot your password?</a>--}}
{{--            <button type="submit" >Sign In</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
<script>

</script>
<footer>

</footer>
</body>
</html>
