$( document ).ready(function() {
    console.log($('meta[name="csrf-token"]').attr('content'));
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'X-Requested-With' : 'XMLhttpRequest'
        }
    });

});

$('.itemViewImg').click(function(){
    $('#my_modal_title').text(this.title);
    $("#img_image_modal").attr("src",this.id);
    $("#img_image_modal").show();
    $('#div_my_modal').modal('show');
});

$('.butDel').click(function(){
    if(confirm("Удалить пост <" + this.name + "> ?")){
    $post_id = $(this).data("post_id");
    $.ajax({
        type: "POST",
        url:"/post/allPosts",
        data: { "post_id" : $post_id },
        dataType : "json",
        success: function(response){
            $('.divPostView').each(function () { 
                if($(this).data("post_id") == $post_id) $(this).remove();
            });
            //alert(response.title);
        }
    });}
});

$('.postsAuth').click(function(){
    var postsAuth_name = $(this).data("name_authtor");
    $('#titlePosts').text('Посты добавленные пользователем:' + postsAuth_name);
    $('#buttonAllPosts').show();
    $('.divPostView').each(function () { 
        if(postsAuth_name == $(this).data("name_authtor")) $(this).show();
        else $(this).hide();
    });
});

$('#buttonAllPosts').click(function(){
    $('#titlePosts').text('All posts');
    $('#buttonAllPosts').hide();
    $('.divPostView').each(function () { 
        $(this).show();
    });
});