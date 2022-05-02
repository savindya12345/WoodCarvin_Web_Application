@extends('master')

@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      /* background-image: url('img/backlogin1.jpg'); */
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;

    }

    h1 {
      text-align: center;
      color: black;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-size: 60px;
    }

    .h5 {
      text-align: center;
      color: black;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .image {
      text-align: center;
    }

    img {
      border-radius: 40%;
    }

    .container2 {
      padding-left: 500px;
      padding-right: 500px;
    }



    input[type=email],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    #loginbtn {
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
  <div class="container2">
    <h1>Welcome</h1>
    <h5 class="h5">To Your Account</h5>
    <br><br>
    <div class="image">
      <img src="img/user.png" alt="User" width="100" height="100">
    </div>
    <br>

    <form action="login" method="POST">
      @csrf
      <label for="email"><b>Email : </b></label>
      <input class="form-control form-control" type="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password : </b></label>
      <input class="form-control form-control" type="password" placeholder="Enter Password" name="password" required>
      <br>
      <button class="btn btn-success" id="loginbtn" type="submit">Login</button>
      <br><br>

  </div>
  </form>

</body>

</html>
@endsection