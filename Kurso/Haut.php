<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
require_once("Autores.html");
$fio=$_REQUEST['ФИО'];
$passw=$_REQUEST['Пароль'];
$q="select * from читатель where ФИО='$fio' and Пароль='$passw'";
$r=mysqli_query($link, $q) or die("error 1");
$arr=mysqli_fetch_array($r) or die("error 2");
$nom=mysqli_num_rows($r);

if ($nom==0)
{ echo " ошибка!"; }
else
{
    $name=$fio;
    setcookie("name",$name);
    header("Location: menu.php");
}

?>
