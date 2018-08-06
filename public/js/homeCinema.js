
        var heigth=6;
        var offset=0;
     $('#forComments').scroll( function() {
      if($(this).scrollTop()>=heigth){
         heigth+=280;
         offset+=8;
         $.ajax({
             url: "/scrolling",
             type: "POST",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),},
             data:{ offset:offset },
             })
             .done( function(arr) {
                for( var j=0; j<8; j++ ) {
                $('#table').append("<tr><td><i><b> "+arr[j].user+"  || </b></i> " +arr[j].comment+" </td></tr>");
                }
             })
        }
      })

    $('.comment').click(function(){
           var comment = $('#com').val();
         $.ajax({
             url: "/user/commented",
             type: "POST",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),},
             data: {
               comment:comment,
                   },
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


////////////////////////////////////////////////////////////////////////////
          Cookies.set('user/NullLike','null') ;
            $('#like').click(function(){
                if(Cookies.get('user/dislike')=='plus' &&
                  ( Cookies.get('user/like')=='minus' || Cookies.get('user/NullLike')=='null' ) )
                {
               forLike('/back/dislike');
                       Cookies.set('user/like','plus');
                       Cookies.set('user/dislike','minus');
                       Cookies.set('user/disabledDis','false');
                       Cookies.set('user/disabledLike','true');
               }

               else if( Cookies.get('user/disabledLike')!='true' &&  Cookies.get('user/like')!='plus' ){
                        forLike('/plus/like');
                        Cookies.set('user/like','plus');
               }
                else if( Cookies.get('user/disabledLike')!='true' &&  Cookies.get('user/like')!='minus' ) {
                        forLike('/minus/like');
                        Cookies.set('user/like','minus');
                 }
          })


///////////////////////////////////////////////////////////////////////////////////

          Cookies.set('user/NullDisike','null') ;

            $('#dislike').click(function(){

              if( Cookies.get('user/like')=='plus' &&
                ( Cookies.get('user/dislike')=='minus' || Cookies.get('user/NullDisike')=='null' ) ){
                        forDislike('/back/like');
                        Cookies.set('user/dislike','plus');
                        Cookies.set('user/disabledDis','true');
                        Cookies.set('user/disabledLike','false');
                        Cookies.set('user/like','minus');
                  }
               else if( Cookies.get('user/disabledDis')!='true' &&  Cookies.get('user/dislike')!='plus' ){
                        forDislike('/plus/dislike');
                        Cookies.set('user/dislike','plus');
                 }
              else if( Cookies.get('user/disabledDis')!='true' &&  Cookies.get('user/dislike')!='minus' ){
                forDislike('/minus/dislike');
                Cookies.set('user/dislike','minus');
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
