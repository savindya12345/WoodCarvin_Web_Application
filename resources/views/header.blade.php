<?php
use App\Http\Controllers\ProductController;
$total=0;
//dd(session('user')->all());
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    #leftside{
      margin-right: 100px;
    }
    .topnav-right {
      float: right;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myorder">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Product</a>
        </li>
      <form action="/search" class="d-flex">
        <input name="quaery" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </ul>

      <div class="topnav-right">
      <ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
      <li><a class="nav-link active" href="/cartlist">cart({{$total}})</a></li>
      @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle nav-link active" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link active" href="/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li><a class="nav-link active" href="/login">Login</a></li>
      <li><a class="nav-link active" href="/register">Register</a></li>
      @endif
      </ul>
      </div>
    </div>
  </div>
</nav>

</body>
</html>

