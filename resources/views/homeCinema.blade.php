<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Film</title>
<link href="{{asset('css/filmStyle.css')}}" rel="stylesheet"/>
</head>
<form id="logout-form" action="{{ route('logout') }}" method="POST" >
    @csrf
    <button id="logout">logout</button>
</form>
    <body>
        <div id="head">
          @foreach ($cinema as $ci)
            <div class='images'>
              <img src= {{ $ci->images}} >
              <div id='vernagir'>{{ $ci->name}}</div>
              <div id='comment'>{{  $ci->comment }}</div>
            </div>
          @endforeach

    <div id="home"><a href='/home'>home</a></div>
      </div>
    </body>
</html>
