
    //エラーメッセージの表示
function showErrMsg(target) {
    target.fadeIn();
    setTimeout(function(){
    target.fadeOut();
    }, 3000);
}

//5文字以上でエラーを出す
$("#age").on("validation change", function(){
    if($(this).val().length > 2){
    showErrMsg($(".error-aa"));
    }
});

//5文字以上でエラーを出す
$("#zipcode").on("validation change", function(){
    if($(this).val().length > 7){
    showErrMsg($(".error-zz"));
    }
});
