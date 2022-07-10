<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$id=$_REQUEST['Код_автора'];
$sql="select * from автор where Код_автора='$id'";
$r=mysqli_query($link, $sql) or die("error delete");
$arr=mysqli_fetch_assoc($r);
$fio=$arr['ФИО_автора'];
?>
<form action=EditAutors.php >
    Введите <br>
    <input type=hidden name=Код_автора value="<?php echo $id?>"> <br>
    ФИО <input type=text name=ФИО_автора value="<?php echo $fio?>"> <br>
    <input type=submit name=sub value="ввод"> <br>
</form>
