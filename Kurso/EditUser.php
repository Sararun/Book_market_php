<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$id = $_REQUEST['Код_читателя'];
$fio = $_REQUEST['ФИО'];
$passw = $_REQUEST['Пароль'];
$sql = "update читатель set ФИО='$fio', Пароль='$passw' where Код_читателя='$id'";
echo "sql=$sql<br>";
$r = mysqli_query($link, $sql) or die("error update");
?>
// Переход к странице администрирования all.php
<?php
echo "<HTML><HEAD>
    <META HTTP-EQUIV='Refresh' CONTENT='0; URL=allUSers.php'>
</HEAD>";?>
