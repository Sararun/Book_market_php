<form action="addAutors.php">
<p>Добавление</p>
<input type=text name="ФИО_автора" value="" placeholder="ФИО_автора">
<button type="submit" >Добавить</button><br>
</form>

<?php
$link=mysqli_connect("127.0.0.1","root","","kr");
$query = "SELECT * FROM автор ORDER BY ФИО_автора ";
$r = mysqli_query($link, $query) or die("error 1");
?>
<table border=1>
    <tr align="center">
        <td>ID </td>
        <td>ФИО </td>
    </tr>
    <?Php
    while($arr = mysqli_fetch_assoc($r))
    {
        echo "<tr>";
        echo "<td>".$arr['Код_автора']."</td>";
        echo "<td>".$arr['ФИО_автора']."</td>";
        echo "<td> <a href=dellAutors.php?Код_автора=".$arr['Код_автора']." > удалить </a></td>";
        echo "<td> <a href=FeditAutors.php?Код_автора=".$arr['Код_автора']." > изменить </a></td>";
        echo "</tr>";
    }
    ?>
    <form action="all.php" target="_blank">
        <button>Назад</button>
    </form>

