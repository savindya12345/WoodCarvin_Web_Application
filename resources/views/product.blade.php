@extends('master')

@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wood Carvings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        .row-background {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .bottom-left {
            position: absolute;
            bottom: 25px;
            left: 100px;
        }

        .top-right-1 {
            position: absolute;
            top: 30px;
            right: 150px;
        }

        .ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .li {
            display: inline;
            margin: 5px;
            padding: 5px;
            font-size: large;
        }

        .center {
            text-align: center;
        }

        h5 {
            float: center;
            color: rgb(59, 133, 207);
        }

        .price {
            font-size: large;
            color: darkolivegreen;
        }
        
        .nam, .price{
            margin-left: 60px;
        }

        a:link {
        text-decoration: none;
        }

        .data{
            color: black;
            margin: 20px;
        }

        .btn-outline-info{
            margin-bottom: 10px;
            margin-left: 40px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row-background">
            <div class="col-sm-12 col-md-6 col-lg-12">
                <div>
                    <img src="img/Homepage.jpg" alt="Wood Carvings" width="1116" height="451">
                    <div class="bottom-left">
                        <h1>Wood Carvings</h1>
                        <p>Customize your feelings</p>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <h1 style="text-align: center;">Welcome to Wood Carvings</h1>
            <h5 style="text-align: center;">You can customize your items and you can see some items in this <br> page. If you want to buy one, contact us.</h5>
        </div>
        <br>



        <div class="row">
            @foreach ($products as $item)
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="item {{$item['id']}}">
                    <a class="data" href="detail/{{$item['id']}}">
                    <img src="{{$item['gallary']}}" alt="Wood Carvings" width="200" height="200">
                    <figcaption>
                        <h5 class="nam">{{$item['Name']}}</h5>
                        <p class="price">$ {{$item['Price']}}</p>
                        <button type="button" class="btn btn-outline-info">More Details</button>
                    </figcaption>
                    </a>
                </div>  
            </div>
            @endforeach
        </div><br>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>
@endsection