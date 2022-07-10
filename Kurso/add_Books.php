<?php
$link = mysqli_connect("127.0.0.1", "root", "", "kr");
require_once("all_Books.php");
$naz = $_REQUEST['Название_книги'];
$img = $_REQUEST['image'];
$aut = $_REQUEST['Код_Автора'];
$date= $_REQUEST['Год_издания'];
$sql = "insert into книги (Название_книги, image, Код_Автора, Год_издания) values ('$naz', '$img', '$aut', '$date');";
$result = mysqli_query($link, $sql);
if ($result) {
    echo "запись успешно добавлена!";
}
else "<br> error";
