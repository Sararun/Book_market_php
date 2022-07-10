<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
require_once("Regist.html"); // подключение файла connect.php
$fio=$_REQUEST['ФИО'];
$passw=$_REQUEST['Пароль'];
$sql="insert into читатель (ФИО,Пароль) values ('$fio','$passw');";
$result = mysqli_query($link, $sql);
if ($result) {
    $name=$fio;
    setcookie("name",$name);
    header("Location: Menu.php");
}
else "<br> error";
?>

