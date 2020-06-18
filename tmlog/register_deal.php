<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "Conn/conn.php";
$UserName=$_POST[txt_regname];
$sql=mysql_query("select * from tb_user where regname = '$UserName'");
$result=mysql_fetch_array($sql);
if ($result!=false){
	echo ("<script>alert('用户名已被注册！');history.go(-1);</script>");
	exit();
}

$_SESSION[username]=$_POST[txt_regname];
$regname=$_POST[txt_regname];
$regrealname=$_POST[txt_regrealname];
$regpwd=$_POST[txt_regpwd];
$regemail=$_POST[txt_regemail];
$regcity=$_POST[txt_province].$_POST[txt_city];
$regico=$_POST[txt_ico];
$regsex=$_POST[txt_regsex];
$regintroduce=$_POST[txt_regintroduce];

	$INS=mysql_query("Insert Into tb_user (regname,regrealname,password,email,city,usericon,gender,selfintro,fig) Values ('$regname','$regrealname','$regpwd','$regemail','$regcity','$regico','$regsex','$regintroduce',0)");
	echo "<script> alert('用户注册成功！');</script>";
	echo "<script> window.location='file.php';</script>";
?>
