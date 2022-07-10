<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$id = $_REQUEST['Код_книги'];
$sql="select * from книги where Код_книги='$id'";
$r=mysqli_query($link, $sql) or die("error delete");
$arr=mysqli_fetch_assoc($r);

$naz = $arr['Название_книги'];
$img = $arr['image'];
$aut=$arr['Код_Автора'];
$date=$arr['Год_издания'];

?>
// Переход к странице администрирования all.php
<form action=Edit_Books.php >
    Введите <br>
    <input type=hidden name=Код_книги value="<?php echo $id?>"> <br>
    Название_книги <input type=text name=Название_книги value="<?php echo $naz?>"> <br>
    image <input type=text name=image value="<?php echo $img?>"> <br>
    Код_Автора <input type=text name=Код_Автора value="<?php echo $aut?>"> <br>
    Год_издания <input type=text name=Год_издания value="<?php echo $date?>"> <br>
    <input type=submit name=sub value="ввод"> <br>
</form>
