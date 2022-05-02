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
            bottom: 246px;
            left: 156px;
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

        h4 , p{
            float: center;
            color: black;
        }

        .price {
            font-size: large;
            color: darkolivegreen;
        }
        a:link {
        text-decoration: none;
        }

    </style>
</head>

<body>
    <div class="container">
        <br>
        <div class="row">
            
            <h2>Results for Products</h2>
            
            @foreach ($products as $item)
            <div class="col-sm-4">
                <br>
                <div class="item {{$item['id']}}">
                    <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallary']}}" alt="Wood Carvings" width="200" height="200">
                    <figcaption>
                        <h4>{{$item['Name']}}</h4>
                        <p>{{$item['Description']}}</p>
                        <p class="price">$ {{$item['Price']}}</p>
                    </figcaption>
                    </a>
                </div>

                
            </div>
            @endforeach
            

        </div><br>

        <div class="row">

            

        </div>

        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>
@endsection