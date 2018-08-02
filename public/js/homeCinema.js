
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
                  })
          })
