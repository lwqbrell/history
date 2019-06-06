/**
 * Created by lwq11 on 2019/6/6.
 */
$(function () {
    $("button").click(function(){
        var date = $("input").val();
        var fram=$("#content-fram");
        $.get("./history.php?date="+date,function(data,status){
            // 将json字符串转化为JavaScript Object
            var response=JSON.parse(data);
            var history=response.result;
            if (response.error_code!=0){
                alert("未知错误，请稍后再尝试！");
            }
            // 重新选择日期时移除已有的历史事件
            fram.empty();
            // 遍历添加历史事件
            for (var i in history) {
                var title=history[i].title;
                var year=history[i].year;
                var month=history[i].month;
                var day=history[i].day;
                var des=history[i].des;
                var pic=history[i].pic;
                if (pic==''){
                    pic='./error.jpg';
                }
                // 显示历史事件的模板
                var str='<div class="content-history">'+
                    '<h2>'+title+'</h2>'+
                    '<p>'+year+'年'+month+'月'+day+'日</p>'+
                    '<img class="img-history" src="'+pic+'">'+
                    '<p>'+des+'</p>'+
                    '</div>';
                fram.append(str);
            }


        });
    });
})