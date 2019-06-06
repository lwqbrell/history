<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/6/5
 * Time: 17:58
 */
//2019-06-05
$date=$_GET['date'];
$month=substr($date,5,2);
$day=substr($date,8,2);
$url="http://live.langziphp.com/v1/history?month=".$month."&day=".$day;
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);

/*$result=<<<EFO
{
    "result":[
        {
            "_id":"12650605",
            "title":"意大利著名诗人但丁诞生",
            "pic":"http://juheimg.oss-cn-hangzhou.aliyuncs.com/toh/201106/5/67133646264.jpg",
            "year":1265,
            "month":6,
            "day":5,
            "des":"在754年前的今天，1265年6月5日 (农历五月二十)，意大利著名诗人但丁诞生。",
            "lunar":"乙丑年五月二十"
        }
    ],
    "reason":"请求成功！",
    "error_code":0
}
EFO;*/

echo $result;
