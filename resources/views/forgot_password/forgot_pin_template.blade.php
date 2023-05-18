<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .heading{
            font-size: 20px;

            text-align: center;
            margin: auto;
            width: 60%;
            border: none;
            padding: 20px;
            background-color: mediumseagreen;
            border-radius: 3px;
            color: white;

        }
        .card{
            text-align: left;
            margin: auto;
            width: 60%;
            border: none;
            padding: 20px;
            background-color: aliceblue;
            border-radius: 3px;
        }

        p{
            font-size: 16px;
            color: black;
        }
        a{
            padding: 0px 0px;
            background-color: white;
            text-decoration: none;
            color: whitesmoke;
            border-radius: 5px;
            display: inline-block;
            margin-top: 0px;
        }
        footer
        {
            text-align: center;
            font-size: 16px;
            color: gray;
        }

    </style>
</head>
<body>
<div class="heading">
    <h4 class="heading">Forgot Password </h4>
</div>
<div class="card" id="msg">
    <p>Hi {{$email_required_details['names']}} <br> </p>
    <p>There was a request to change your password!</p>
    <p>If you did not make this request then please ignore this email.</p>
    <p>Otherwise, please use this temporary password: <strong> {{$email_required_details['pin']}} </strong> and click the provided link below to change your password :
        <a href ="{{env('FORGOT_PIN_REDIRECT_LINK')}}">forgot password</a>
    </p>
</div>
</body>
<footer>

</footer>
</html>
