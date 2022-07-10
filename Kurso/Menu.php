<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="Css/Menu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Меню</title>
    <div class="head">
    <h2 style="margin:10px">Выбор книг</h2>

    <form name="search" method="post" action="search.php">
        <input type="search" name="query" placeholder="Поиск">
       <button type="submit"></button>
    </form>
    </div>
</head>
<body>
<div class="container">
            <div align ="right" class="g"><?php echo 'Привет, ' . htmlspecialchars($_COOKIE["name"]) . '!';?>
            </div>
            <?php
            $link=mysqli_connect("127.0.0.1","root","","kr");
            $kr=mysqli_query($link,"Select * FROM`книги`");
            while($result = mysqli_fetch_assoc($kr))
            {
            echo("<div class='col-md-4'>  
               <img src=".$result['image']." alt=''>");
                echo $result['Название_книги']?>

            <form action="mh.php"    method="post">
                <button name="Action" type="submit" value="<?php echo $result['Название_книги']?>">Купить</button>
            </form>
            <?php

            }
            ?>

</div>


</div>

</body>
</html>
