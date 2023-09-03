
$(document).on('click','#saveLikeDislike',function(){
    var _post=$(this).data('post');
    var _type=$(this).data('type');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },

        url: "/rating" ,
        type:"post",
        dataType:'json',

        data:{
            post:_post,
            type:_type,


        },
        beforeSend:function(){
            vm.addClass('disabled');
        },
        success:function(res){
            if(res.bool==true){
                vm.removeClass('disabled').addClass('active');

            }
        }
    });
});
// End
$(document).on('click','#btn',function(){
    var _post=$(this).data('post');

    var vm=$(this);
    // Run Ajax
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },

        url: "/bag" ,
        type:"post",
        dataType:'json',

        data:{
            post:_post,



        },


        success:function(res){
            if(res.bool==true){
                vm.addClass('disabled');
                
            }
        }
    });
});

