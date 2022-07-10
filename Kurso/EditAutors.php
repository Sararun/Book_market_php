<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$id = $_REQUEST['Код_автора'];
$fio=$_REQUEST['ФИО_автора'];

$sql = "update автор set ФИО_автора='$fio' where Код_автора='$id'";
echo "sql=$sql<br>";
$r = mysqli_query($link, $sql) or die("error update");
?>
// Переход к странице администрирования all.php
echo "
<?php
echo "<HTML><HEAD>
    <META HTTP-EQUIV='Refresh' CONTENT='0; URL=allAutors.php'>
</HEAD>";
?>