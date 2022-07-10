<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
require_once("ADmin.html");
$ad=$_REQUEST['Имя'];
$pa=$_REQUEST['Пароль'];
$q="select * from админ where Имя='$ad' and Пароль='$pa'";
$r=mysqli_query($link, $q) or die("error 1");
$arr=mysqli_fetch_array($r) or die("error 2");
$nom=mysqli_num_rows($r);

if ($nom==0)
{ echo " ошибка!"; }
else
{
    $name=$ad;
    setcookie("name",$name);
    header("Location: all_Books.php");
}
