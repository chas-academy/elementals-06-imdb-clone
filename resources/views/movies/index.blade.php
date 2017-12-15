<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    div{
        width: 400px;
        margin: 0px;
    }
    h1{
        font-size: 26px;
    }
    img{
        width: 180px
    }
    </style>
</head>
<body>
    @foreach($movies as $movie)
    <div>
    <a href="/movies/{{$movie->id}}"><h1>{{$movie->title}}</h1></a>
    <strong>{{$movie->runtime}}</strong><br> 
    <strong>{{$movie->rating}}</strong><br>
    <img src='{{$movie->poster}}'>
    </div>
    @endforeach
</body>
</html>