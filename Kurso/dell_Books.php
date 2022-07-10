<?php

$link = mysqli_connect("127.0.0.1", "root", "", "kr");
$id = $_REQUEST['Код_книги'];
$sql = "delete from книги where Код_книги='$id'";
$r = mysqli_query($link, $sql) or die("error delete");
// автоматический переход к странице администрирования all.php(редирект)
echo "<HTML><HEAD>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=all_Books.php'>
</HEAD>";
