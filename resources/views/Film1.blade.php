<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
         <meta charset="utf-8">
         <title>Films</title>
         <link href="css/film1Style.css" rel="stylesheet"/>
    </head>
    <body>
              <div id="admin">
                  <div id='log'><a href="/login">login</a></div><br>
                  <div id='reg'><a href="/register">registration</a></div>
              </div>
          <div id='forImg'>
             <!--films  -->
             @foreach ($allFilms as $film)
                 <div class='images'>
                     <a href=/film/{{$film->id}}><img src={{ $film->images}}></a>
                     <div id='varnagir'>{{$film->name}}</div>
                     <div id='comment'>{{ $film->comment }}</div>
                 </div>
             @endforeach
           <!--next buttons -->
            <div id='Nex'>
                 {{$allFilms->links()}}
            </div>
       </div>
    </body>
</html>
