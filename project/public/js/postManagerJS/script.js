$(document).ready(function () {
    if( $('.notification').is(':visible') ){
        $(".notification").fadeOut(2000);
        console.log("ok");
    }
        
});

function searchWithKey(){
    $(document).ready(function(){
        
        $('#searchBar').keyup(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let str = $('#searchBar').val();
            console.log(str);
            $.ajax({
                type:'POST',
                url:"/home/postManager/ajaxSearch",
                method: "post",
                data: {
                    value: str
                },
                success:function(data) {
                    $(".search-post").empty();
                    // console.log(data.data.user_id);
                    console.log(data.data);
                    console.log(data.data.length);
                    for(let i=0; i<data.data.length;i++){
                        $('.search-post').append(
                            "<div class='post-area'><p class='user-name'><a class='text-dark' href='/home/postManager/profileView/"+data.data[i].user_id+"'>"+data.data[i].first_name+" "+data.data[i].last_name+"</a></p><p><span class='post-type bg-success mr-2'>"+data.data[i].post_status+"</span><span class='post-type'>"+data.data[i].post_type+"</span><span class='post-time'>"+data.data[i].post_time+"</span></p><p class='post-text'>"+data.data[i].post_text+"</p></div>"
                            );

                    }
                }
            });
        });
    });
}
