
  var heigth=6;
  var offset=0;
$('#forComments').scroll(function(){

   if( $(this).scrollTop()>=heigth ) {
          heigth+=280;
          offset+=8;
     $.ajax({
           url: "/scrolling",
           type: "POST",
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),},
           data: { offset:offset },})
           .done( function(arr) {
            for( var j=0 ; j<8; j++ ) {
            $('#table').append("<tr><td><i><b>"+arr[j].user+" || </b></i>" +arr[j].comment+"</td></tr>");
             }
             })
         }
           })

      $('.comment').click(function(){
            var comment = $('#com').val();

       $.ajax({
             url: "/commented",
             type: "POST",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),},
             data: { comment:comment },
               })
             .done( function(arr) {
                 $('#com').val('');
                 $('#table').html('');
                 for( var i=0; i<8; i++ ) {
                 $('#table').append("<tr><td><i><b>"+arr[i].user+" || </b></i>" +arr[i].comment+"</td></tr>");
                 }
                 heigth=6;
                 offset=0;
                 $('#forComments').scrollTop(0);
             })
        })

//for like and dislike
Cookies.set('i', 0);
Cookies.set('j', 0);
  $('#like').click(function(){
   if(Cookies.get('dislike')=='ancanot'){forLike('/back/like');}
   if( Number(Cookies.get('i'))%2==0){forLike('/plus/like'); }
   else if( Number(Cookies.get('i'))%2!=0){forLike('/minus/like');}


        })

  $('#dislike').click(function(){
    if(Number(Cookies.get('j'))%2==0){
      Cookies.set('j',Number(Cookies.get('j'))+1);
     }
    else{;}
    Cookies.set('dislike','ancanot');
  /*  if( Cookies.get('dislike')=='ancanot' ){alert('duq arten dislikeleq') ;}
    else{
      var url="/dislike";
      if(Cookies.get('like')=='ancanot'){ url="/back/like"}
        Cookies.set('dislike', 'ancanot');
        $.ajax({
           url: url,
           type: "POST",
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),},
           })
           .done( function(dislike) {
             if( $.isArray(dislike) ) {
               $('#p1').html('likes- '+dislike[0]);
               $('#p2').html('dislikes- '+dislike[1]);
             }
             else{
               $('#p2').html('dislikes- '+dislike);
             }
           })
        }*/
      })

function forLike(url){

    alert(Cookies.get('i'));
    Cookies.set('i', Number(Cookies.get('i'))+1);
    Cookies.set('like', 'ancanot');
  $.ajax({
       url: url,
       type: "POST",
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),},
       })
    .done( function(like) {
        if( $.isArray(like) ) {
        $('#p1').html('likes- '+like[0]);
        $('#p2').html('dislikes- '+like[1]);
        }
    else {
        $('#p1').html('likes- '+like);
        }
          })
}
