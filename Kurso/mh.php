<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
if(isset($_POST["Action"])){
$_name=$_POST["Action"];
$query="select * from книги where Название_книги='$_name'";
$r=mysqli_query($link,$query);
if($r){
    echo "vlad";
    $arr=mysqli_fetch_assoc($r);
    $cart_query="Insert into корзина (Название_книги,FIO) values('$_name', '.$_COOKIE[name].')";
    $shop=mysqli_query($link,$cart_query);
    if($shop){
        echo "молодец";
    }
}

}
?>
