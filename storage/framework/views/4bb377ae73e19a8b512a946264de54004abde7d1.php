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


        /** {*/
        /*    box-sizing: border-box;*/
        /*}*/

        /*body {*/
        /*    background: rgba(255,255,255,0.9);*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    flex-direction: column;*/
        /*    font-family: 'Poppins', sans-serif;*/

        /*    !*font-family: 'Montserrat', sans-serif;*!*/
        /*    height: 100vh;*/
        /*    margin: -20px 0 50px;*/
        /*}*/

        /*h1 {*/
        /*    !*font-weight: bold;*!*/
        /*    font-size: 23px;*/
        /*    margin: 0;*/
        /*}*/

        /*h2 {*/
        /*    text-align: center;*/
        /*    font-size : 23px;*/
        /*}*/

        /*!*p {*!*/
        /*!*    font-size: 14px;*!*/
        /*!*    font-weight: 100;*!*/
        /*!*    line-height: 20px;*!*/
        /*!*    letter-spacing: 0.5px;*!*/
        /*!*    margin: 20px 0 30px;*!*/
        /*!*}*!*/

        /*span {*/
        /*    font-size: 15px;*/
        /*}*/

        /*a {*/
        /*    color: #333;*/
        /*    font-size: 14px;*/
        /*    text-decoration: none;*/
        /*    margin: 15px 0;*/
        /*}*/

        /*button {*/
        /*    border-radius: 20px;*/
        /*    border: 2px solid mediumseagreen;*/
        /*    background-color: seagreen;*/
        /*    color: #FFFFFF;*/
        /*    font-size: 12px;*/
        /*    font-weight: bold;*/
        /*    padding: 12px 45px;*/
        /*    letter-spacing: 1px;*/
        /*    text-transform: uppercase;*/
        /*    transition: transform 80ms ease-in;*/
        /*}*/

        /*button:active {*/
        /*    transform: scale(0.95);*/
        /*}*/

        /*button:focus {*/
        /*    outline: none;*/
        /*}*/

        /*button.ghost {*/
        /*    background-color: transparent;*/
        /*    border-color: #FFFFFF;*/
        /*}*/

        /*form {*/
        /*    background-color: #FFFFFF;*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    flex-direction: column;*/
        /*    padding: 0 50px;*/
        /*    height: 100%;*/
        /*    text-align: center;*/
        /*    padding-top: 31px;*/
        /*    padding-bottom: 88px;*/
        /*}*/

        /*input {*/
        /*    background-color: #eee;*/
        /*    border: 2px solid seagreen;*/
        /*    border-radius: 3px;*/
        /*    padding: 7px 5px;*/
        /*    margin: 4px 0;*/
        /*    width: 100%;*/
        /*}*/

        /*.container {*/
        /*    background-color: #fff;*/
        /*    border-radius: 10px;*/
        /*    box-shadow: 0 14px 28px rgba(0,0,0,0.25),*/
        /*    0 10px 10px rgba(0,0,0,0.22);*/
        /*    position: relative;*/
        /*    overflow: hidden;*/
        /*    width: 768px;*/
        /*    height: 513px;*/
        /*    max-width: 100%;*/
        /*}*/

        /*.form-container {*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    height: 100%;*/
        /*    transition: all 0.6s ease-in-out;*/
        /*}*/

        /*.sign-in-container {*/
        /*    left: 0;*/
        /*    width: 50%;*/
        /*    z-index: 2;*/
        /*}*/

        /*.container.right-panel-active .sign-in-container {*/
        /*    transform: translateX(100%);*/
        /*}*/

        /*.sign-up-container {*/
        /*    left: 0;*/
        /*    width: 50%;*/
        /*    opacity: 0;*/
        /*    z-index: 1;*/
        /*}*/

        /*.container.right-panel-active .sign-up-container {*/
        /*    transform: translateX(100%);*/
        /*    opacity: 1;*/
        /*    z-index: 5;*/
        /*    animation: show 0.6s;*/
        /*}*/

        /*@keyframes  show {*/
        /*    0%, 49.99% {*/
        /*        opacity: 0;*/
        /*        z-index: 1;*/
        /*    }*/

        /*    50%, 100% {*/
        /*        opacity: 1;*/
        /*        z-index: 5;*/
        /*    }*/
        /*}*/

        /*.overlay-container {*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 50%;*/
        /*    width: 50%;*/
        /*    height: 100%;*/
        /*    overflow: hidden;*/
        /*    transition: transform 0.6s ease-in-out;*/
        /*    z-index: 100;*/
        /*}*/

        /*.container.right-panel-active .overlay-container{*/
        /*    transform: translateX(-100%);*/
        /*}*/

        /*.overlay {*/
        /*    background: #FF416C;*/
        /*    background: -webkit-linear-gradient(to right, mediumseagreen, seagreen);*/
        /*    background: linear-gradient(to right, mediumseagreen, seagreen);*/
        /*    background-repeat: no-repeat;*/
        /*    background-size: cover;*/
        /*    background-position: 0 0;*/
        /*    color: #FFFFFF;*/
        /*    position: relative;*/
        /*    left: -100%;*/
        /*    height: 100%;*/
        /*    width: 200%;*/
        /*    transform: translateX(0);*/
        /*    transition: transform 0.6s ease-in-out;*/
        /*}*/

        /*.container.right-panel-active .overlay {*/
        /*    transform: translateX(50%);*/
        /*}*/

        /*.overlay-panel {*/
        /*    position: absolute;*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    flex-direction: column;*/
        /*    padding: 0 12px;*/
        /*    text-align: center;*/
        /*    top: 0;*/
        /*    height: 100%;*/
        /*    width: 50%;*/
        /*    transform: translateX(0);*/
        /*    transition: transform 0.6s ease-in-out;*/
        /*}*/

        /*.overlay-left {*/
        /*    transform: translateX(-20%);*/
        /*}*/

        /*.container.right-panel-active .overlay-left {*/
        /*    transform: translateX(0);*/
        /*}*/

        /*.overlay-right {*/
        /*    right: 0;*/
        /*    transform: translateX(0);*/
        /*}*/

        /*.container.right-panel-active .overlay-right {*/
        /*    transform: translateX(20%);*/
        /*}*/

        /*.social-container {*/
        /*    margin: 20px 0;*/
        /*}*/

        /*.social-container a {*/
        /*    border: 1px solid #DDDDDD;*/
        /*    border-radius: 50%;*/
        /*    display: inline-flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    margin: 0 5px;*/
        /*    height: 40px;*/
        /*    width: 40px;*/
        /*}*/

        /*footer {*/
        /*    background-color: #222;*/
        /*    color: #fff;*/
        /*    font-size: 14px;*/
        /*    bottom: 0;*/
        /*    position: fixed;*/
        /*    left: 0;*/
        /*    right: 0;*/
        /*    text-align: center;*/
        /*    z-index: 999;*/
        /*}*/

        /*footer p {*/
        /*    margin: 10px 0;*/
        /*}*/

        /*footer i {*/
        /*    color: red;*/
        /*}*/

        /*footer a {*/
        /*    color: #3c97bf;*/
        /*    text-decoration: none;*/
        /*}*/
        /*.alert-danger {*/
        /*    color: red;*/
        /*    font-size: 12px;*/
        /*    align-content: start;*/
        /*}*/
        /*.logo{*/
        /*    width: 17%;*/
        /*}*/







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
            text-align: center;
        }
        .forgotPassLabel {
            font-size: 17px;
            color: seagreen;
            margin-bottom: 6px;
            margin-top: 24px;
            text-align: center;
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
            margin-top: 5px;
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
    </style>
</head>
<body>

<div class="mainDiv">
    <div class="cardStyle">
        <form action="<?php echo e(URL('login')); ?>" method="POST" name="login" id="login">
            <?php echo csrf_field(); ?>
            <p style="text-align: center"><img class="logo" src="<?php echo e(asset('image/rsa.png')); ?>" ></p>
            <h3 class="formTitle">
                Sign in
            </h3>
            <?php if(\Illuminate\Support\Facades\Session::has('success')): ?>
                <div style="text-align: center" class="alert alert-success" role="alert">
                    <?php echo e(\Illuminate\Support\Facades\Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(\Illuminate\Support\Facades\Session::has('failure')): ?>
                <div style="text-align: center" class="alert alert-danger" role="alert">
                    <?php echo e(\Illuminate\Support\Facades\Session::get('failure')); ?>

                </div>
            <?php endif; ?>
            <br>
            <div class="inputDiv">
                <input placeholder="Email Address" type="email" id="email" name="email" required>
            </div><br>

            <div class="inputDiv">
                <input placeholder="Password" type="password" id="password" name="password" required>
            </div>

            <div class="inputDiv">
                <a typeof="button" onclick="window.location='<?php echo e(url('/forgot_pin')); ?>'" class="forgotPassLabel" href="#" >Forgot password</a>
            </div>

            <div class="buttonWrapper">
                <button type="submit" id="submitButton" onclick="validateForm()" class="submitButton pure-button pure-button-primary">
                    <span>Sign In</span>
                </button>
            </div>

            <div class="inputDiv">
                <a typeof="button" onclick="window.location='<?php echo e(url('/register')); ?>'" class="loginLabel" href="#" >Create an account</a>
            </div>
        </form>
    </div>
</div>

<script>
    $("#danger").fadeTo(10000, 500).slideUp(500, function(){
        $("#danger").slideUp(500);
    });
</script>
<footer>

</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Abigail\GBV\gbvf-web-form\resources\views/login.blade.php ENDPATH**/ ?>