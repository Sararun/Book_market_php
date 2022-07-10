
<form action="add_Books.php">
<p>Добавление</p>
    <input type=text name="Название_книги" value="" placeholder="Название_книги">
    <input type=text name="image" value="" placeholder="image">
    <input type=text name="Код_Автора" value="" placeholder="Код_автора">
    <input type=text name="Год_издания" value="" placeholder="Год_издания">
<button type="submit" >Добавить</button><br>
</form>
<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$query = "SELECT * FROM книги ORDER BY Название_книги ";
$r = mysqli_query($link, $query) or die("error 1");
?>
<table border=1>
    <tr align="center">
        <td>ID </td>
        <td>Название_книги </td>
        <td>image</td>
        <td>Код автора</td>
        <td>Год_издания</td>
    </tr>
<?Php
while($arr = mysqli_fetch_assoc($r))
{
    echo "<tr>";
    echo "<td>".$arr['Код_книги']."</td>";
    echo "<td>".$arr['Название_книги']."</td>";
    echo "<td>".$arr['image']."</td>";
    echo "<td>".$arr['Код_Автора']."</td>";
    echo "<td>".$arr['Год_издания']."</td>";
    echo "<td> <a href=dell_Books.php?Код_книги=".$arr['Код_книги']." > удалить </a></td>";
    echo "<td> <a href=FeditBooks.php?Код_книги=".$arr['Код_книги']." > изменить </a></td>";
    echo "</tr>";
}
?>
    <form action="all.php" target="_blank">
        <button>Назад</button>
    </form>
