<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/25
 * Time: 18:26
 */
$conn=mysql_connect("183.129.178.23","cfkseg","csrkae");				//链接数据库服务器
mysql_select_db("test",$conn);						//链接数据库
mysql_query("set names 'utf8'");
?>