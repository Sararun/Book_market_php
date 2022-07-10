<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$id = $_REQUEST['Код_читателя'];
$sql = "delete from читатель where Код_читателя='$id'";
$r = mysqli_query($link, $sql) or die("error delete");
// автоматический переход к странице администрирования all.php(редирект)
echo "<HTML><HEAD>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=allUSers.php'>
</HEAD>";
?>

