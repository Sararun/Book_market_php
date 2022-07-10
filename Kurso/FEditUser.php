<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$id=$_REQUEST['Код_читателя'];
$sql="select * from читатель where Код_читателя='$id'";
$r=mysqli_query($link, $sql) or die("error delete");
$arr=mysqli_fetch_assoc($r);

$fio=$arr['ФИО'];
$passw=$arr['Пароль'];
?>
<form action=EditUser.php >
    Регистрация:<br>
    Введите <br>
    <input type=hidden name=Код_читателя value="<?php echo $id?>"> <br>
    ФИО <input type=text name=ФИО value="<?php echo $fio?>"> <br>
    пароль <input type=password name=Пароль value="<?php echo $passw?>"> <br>
    <input type=submit name=sub value="ввод"> <br>
</form>
