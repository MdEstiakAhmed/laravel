$(document).ready(function () {
    if( $('.notification').is(':visible') ){
        $(".notification").fadeOut(2000);
        console.log("ok");
    }
        
});

// function searchWithKey(){
//     $(document).ready(function(){
//         if($('#searchBar').val() == ''){
//             console.log('ok');
//         }
//         else{
//             var str = $('#searchBar').val();
//             console.log(str);
//             $.ajax({
//                 type:'POST',
//                 url:"/home/postManager/ajaxData",
//                 data:str,
//                 success:function(data) {
//                    console.log("aaa:",data.success);
//                 }
//              });
//         }
//     });
// }
