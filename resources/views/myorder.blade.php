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

        h4,
        p {
            color: black;
        }

        .result {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        img {
            margin-bottom: 20px;
        }

        .btn-warning {
            margin-top: 50px;
        }

        .price {
            font-size: 20px;
            color: darkolivegreen;
        }

        a:link {
            text-decoration: none;
        }

        .cartdata {
            color: black;
        }

        #ordrbtn {
            width: 150px;
            height: 40px;
        }


        /* .cover{
            border:1px solid rgb(240, 195, 99);
            border-radius: 8px;
            border-width: 25px 10px 4px 35px;
        } */
    </style>
</head>

<body>
    <div class="container">

        <h4 class="result">My Orders</h4>
        @foreach ($orders as $item)

        <div class="row">
            <div class="col-sm-3">
                <div class="cartdata">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallary}}" alt="Wood Carvings" width="150" height="150">
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="cartdata">
                    <a href="detail/{{$item->id}}">
                        <h4>Name : {{$item->Name}}</h4>
                        <p>Delivery Status : {{$item->status}}</p>
                        <p>Address : {{$item->address}}</p>
                        <p>Payment Status : {{$item->payment_status}}</p>
                        <p>Payment Method : {{$item->payment_method}}</p>
                    </a>
                    <hr>
                </div>
            </div>
            @endforeach
        </div><br><br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>
@endsection