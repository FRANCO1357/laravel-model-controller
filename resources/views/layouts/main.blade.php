<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel Model Controller</title>
</head>
<body>

    @include('includes.header')
    @foreach ($movies as $movie)
        <div class="card">
            <p>{{$movie->id}}</p>
            <h2>{{$movie->title}}</h2>
            <p>{{$movie->original_title}}</p>
            <p>{{$movie->nationality}}</p>
            <p>{{$movie->date}}</p>
            <h3>{{$movie->vote}}</h3>
        </div>
    @endforeach

    @include('includes.footer')
    
</body>
</html>

`id`, `title`, `original_title`, `nationality`, `date`, `vote`