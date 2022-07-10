<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$id = $_REQUEST['Код_книги'];
$naz = $_REQUEST['Название_книги'];
$img = $_REQUEST['image'];
$aut=$_REQUEST['Код_Автора'];
$date=$_REQUEST['Год_издания'];
$sql = "update книги set Название_книги='$naz', image='$img',Код_Автора='$aut',Год_издания='$date'where Код_книги='$id'";
echo "sql=$sql<br>";
$r = mysqli_query($link, $sql) or die("error update");
?>
// Переход к странице администрирования all.php
<?php
echo "<HTML><HEAD>
    <META HTTP-EQUIV='Refresh' CONTENT='0; URL=all_Books.php'>
</HEAD>";
?>