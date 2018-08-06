
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

Cookies.set('NullLike','null') ;
  $('#like').click(function(){
      if(Cookies.get('dislike')=='plus' &&
        ( Cookies.get('like')=='minus' || Cookies.get('NullLike')=='null' ) )
      {
     forLike('/back/dislike');
             Cookies.set('like','plus');
             Cookies.set('dislike','minus');
             Cookies.set('disabledDis','false');
             Cookies.set('disabledLike','true');
     }

     else if( Cookies.get('disabledLike')!='true' &&  Cookies.get('like')!='plus' ){
              forLike('/plus/like');
              Cookies.set('like','plus');
     }
      else if( Cookies.get('disabledLike')!='true' &&  Cookies.get('like')!='minus' ) {
              forLike('/minus/like');
              Cookies.set('like','minus');
       }
})




Cookies.set('NullDisike','null') ;

  $('#dislike').click(function(){

    if( Cookies.get('like')=='plus' &&
      ( Cookies.get('dislike')=='minus' || Cookies.get('NullDisike')=='null' ) ){
              forDislike('/back/like');
              Cookies.set('dislike','plus');
              Cookies.set('disabledDis','true');
              Cookies.set('disabledLike','false');
              Cookies.set('like','minus');
        }
     else if( Cookies.get('disabledDis')!='true' &&  Cookies.get('dislike')!='plus' ){
              forDislike('/plus/dislike');
              Cookies.set('dislike','plus');
       }
    else if( Cookies.get('disabledDis')!='true' &&  Cookies.get('dislike')!='minus' ){
      forDislike('/minus/dislike');
      Cookies.set('dislike','minus');
     }
  })

function forDislike(url){
  $.ajax({
        url: url,
        type: "PUT",
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
  }

function forLike(url){
  $.ajax({
         url: url,
         type: "PUT",
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
