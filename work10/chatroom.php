<?php

// 获得最新的聊天信息
$conn = mysql_connect('localhost','87654321','mysql');
mysql_select_db('test');
mysql_query('set names utf8');

$maxId = $_GET['maxId'];

// 防止获取重复数据，本次请求的记录结果id要大鱼上次获得的id
$sql = "select * from message where id >"."'$maxId'";
$qry = mysql_query($sql);

$info = array();
while($rst = mysql_fetch_assoc($qry)){
  $info[] = $rst;
}


// 通过json格式给客户端提供数据
echo json_encode($info);


?>

