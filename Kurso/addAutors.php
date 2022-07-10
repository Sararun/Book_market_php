<?php
$link = mysqli_connect("127.0.0.1","root","","kr");
require_once("allAutors.php");
$fio=$_REQUEST['ФИО_автора'];
$sql="insert into автор (ФИО_автора) values ('$fio');";
$result = mysqli_query($link, $sql);
if ($result) echo "запись успешно добавлена!";
else "<br> error";
?>
