@extends('master')

@section("content")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">



    <style>
        body {
            /* background-image: url('img/backlogin1.jpg'); */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        h1 {
            font-size: 60px;
        }

        h5,
        h1 {
            text-align: center;
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .container2 {
            padding-left: 500px;
            padding-right: 500px;
        }

        .container1 {
            padding-left: 10px;
            padding-right: 10px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        #submitbtn {
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: large;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }
    </style>

</head>

<body>
    <div class="container2"><br>
        <h1>Welcome</h1>
        <h5>Creat an Account</h5>
        <br><br>

        <form action="register" method="POST">
            @csrf
            <label for="uname"><b>Username : </b></label>
            <input class="form-control form-control" type="text" placeholder="Enter Username" name="name" required>

            <label for="email"><b>E-mail : </b></label>
            <input class="form-control form-control" type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password : </b></label>
            <input class="form-control form-control" type="password" placeholder="Enter Password" name="password" required>

            <button class="btn btn-success" id="submitbtn" type="submit">Sign In</button>
            
           
            <br><br>

            
    </div>
    </form>

</body>

</html>
@endsection