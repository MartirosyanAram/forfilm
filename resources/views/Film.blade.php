<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Film</title>
<link href="{{asset('css/filmStyle.css')}}" rel="stylesheet"/>
</head>
    <body>
        <div id="head">
          @foreach ($film as $fil)
            <div class='images'>
              <img src= {{ $fil->images}} >
              <div id='vernagir'>{{$fil->name}}</div>
              <div id='comment'>{{ $fil->comment }}</div>
            </div>
          @endforeach

    <div id="home"><a href='/'>home</a></div>
      </div>
    </body>
</html>
