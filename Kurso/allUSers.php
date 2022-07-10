<?php
// вывод всех записей из т USER
$link=mysqli_connect("127.0.0.1","root","","kr");
$query = "SELECT * FROM читатель ORDER BY ФИО ";
$r = mysqli_query($link, $query) or die("error 1");
if ($r = mysqli_query($link, $query)) echo("ok");
else echo "error";
?>
    <a href=Regist.html> Добавить </a>
    <table border=1>
        <tr align="center">
            <td>ID </td>
            <td>ФИО </td>
            <td>Пароль</td>
        </tr>
<?Php
while($arr = mysqli_fetch_assoc($r))
{
    echo "<tr>";
    echo "<td>".$arr['Код_читателя']."</td>";
    echo "<td>".$arr['ФИО']."</td>";
    echo "<td>".$arr['Пароль']."</td>";
    echo "<td> <a href=DelUser.php?Код_читателя=".$arr['Код_читателя']." > удалить </a></td>";
    echo "<td> <a href=FEditUser.php?Код_читателя=".$arr['Код_читателя']." > изменить </a></td>";
    echo "</tr>";
}
?>
        <form action="all.php" target="_blank">
            <button>Назад</button>
        </form>

