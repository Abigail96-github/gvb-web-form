<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
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
            margin-top: 24px;
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
            margin-bottom: 8px;
        }
        input:disabled {
            cursor: not-allowed;
            border: solid 1px #eee;
        }
        .buttonWrapper {
            margin-top: 20px;
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
<div class="mainDiv">
    <div class="cardStyle">
        <form action="{{URL('register')}}" method="POST" name="login" id="login">
            @csrf
            <p style="text-align: center"><img class="logo" src="{{asset('image/rsa.png')}}" ></p>
            <h3 class="formTitle">
                Register Account
            </h3><br>
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
                <input placeholder="Organization" name="organization" type="text" id="organization" required>
            </div>

            <div class="inputDiv">
                <input type="text" placeholder="Name & Surname" name="name_surname" id="name_surname" required>
            </div>

            <div class="inputDiv">
                <input type="text" placeholder="Phone Number" name="phone" id="phone" required>
            </div>

            <div class="inputDiv">
                <input type="email" placeholder="Email" name="email" id="email" required>
            </div>

            <div class="inputDiv">
                <input type="password" placeholder="Password" name="password" id="password" required>
            </div>

            <div class="inputDiv">
                <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>
            </div>

            <div class="buttonWrapper">
                <button type="submit" id="submitButton" onkeyup="validateForm()" class="submitButton pure-button pure-button-primary">
                    <span>Sign Up</span>
                </button>
            </div>

            <div class="inputDiv">
                <a typeof="button" onclick="window.location='{{ url('/')}}'" class="loginLabel" href="#" >Go to Login</a>
            </div>
        </form>
    </div>
</div>


<script>
    $("#danger").fadeTo(10000, 500).slideUp(500, function(){
        $("#danger").slideUp(500);
    });

    function validateForm() {
        $('#success_validation').hide();
        $('#error_validation').hide();

        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();

        if(password !== confirm_password) {
            console.log('password not match');
            $('#error_validation').show();
            $('#success_validation').html('Password does not match');
            window.scrollTo(0,0);
            return false;
        } else {
            return true;
        }
    }
</script>
<footer>

</footer>
</body>
</html>
