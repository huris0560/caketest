function ajaxMethod() {
    $.ajax({
        url: "myaonapp/data/add",
        type: "POST",
        data: { name : "tanaka" },
        dataType: "text",
        success : function(response){
            //通信成功時の処理
            alert(response);
        },
        error: function(){
            //通信失敗時の処理
            alert('通信失敗');
        }
    });
}
