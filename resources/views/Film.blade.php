<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Film</title>
    <link href="{{asset('css/filmStyle.css')}}" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
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
              <div id='likeButtons'>
                <button id='like'>Like</button>
                <button id='dislike'>Dislike</button>
                <div id='p1' class='p'>likes- {{$like}}</div>
                <div id='p2' class='p'>dislikes- {{$dislike}}</div>
              </div>
          <div id="commentTable">
              <div id="forComments">
                  <table id='table'>
                     @foreach ($all as $al)
                       <tr> <td><i><b>{{$al->user}} || </b></i>  {{$al->comment}}</td></tr>
                     @endforeach
                 </table>
             </div>

             <textarea id='com' name="comment" cols="113"  rows="5"></textarea>
             <button class='comment' id='button'>COMMENT</button>
         </div>
          <script type="text/javascript" src="{{URL::asset('js/Film.js')}}"></script>
          <div id="home"><a href='/'>home</a></div>
      </div>
    </body>
</html>
