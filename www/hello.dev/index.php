




<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Документ без названия</title>
</head>
<body>
Контент


<?php
//include_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
/*$link = mysqli_connect('45.120.151.87', 'root', 'Dd7015015');
echo("link ");

echo($link);
echo(" 	link");
*/

$server = "veraexchange.com";//СЕРВЕР MYSQL
$user_db = "veraexch_midnight";//ЮЗЕР MYSQL
$pass_db = "2789206a";//ПАРОЛЬ MYSQL
$base_db = "veraexch_DB";//ИМЯ_БАЗЫ MYSQL


$mysqli = new mysqli($server, $user_db, $pass_db, $base_db);

$result_wal = $mysqli->query("SELECT * FROM `wallets` WHERE id=173");
        $Row_init_wal=$result_wal->fetch_assoc();

        $Old_init_balval=$Row_init_wal['balbtc'];

//if(!$Link) echo "Не удалось подключится к серверу";
//else{
echo("  !   ");  
echo($Old_init_balval);
echo("  !   ");


/*
{
    mysql_select_db('testbd');

    $sql = "CREATE TABLE 'Users'  ('UserID'  VARCHAR(5) CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci NOT NULL ". 
        " 'Name'  VARCHAR(25) CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci, ". 
        " 'E-mail'  VARCHAR(25) CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci)";
    if (mysql_query($sql))
        echo "Создание таблицы завершено";
    else
        echo "Таблицу создать не удалось";
}
*/




/*
// выполняем операции с базой данных
     
$query ="SELECT * FROM accounts";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Выполнение запроса прошло успешно";
}

*/
// закрываем подключение
mysqli_close($mysqli);
?>

</body>
</html>



<!--
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Документ без названия</title>
</head>
<body>
Контент


<?php
//include_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
/*$link = mysqli_connect('45.120.151.87', 'root', 'Dd7015015');
echo("link ");

echo($link);
echo(" 	link");
*/

$server = "veraexchange.com";//СЕРВЕР MYSQL
$user_db = "veraexch_kirlir";//ЮЗЕР MYSQL
$pass_db = "Dd7015015";//ПАРОЛЬ MYSQL
$base_db = "veraexch_cinemadb";//ИМЯ_БАЗЫ MYSQL


$mysqli = new mysqli($server, $user_db, $pass_db, $base_db);

$result_wal = $mysqli->query("SELECT * FROM `cinematable` WHERE id=4");
        $Row_init_wal=$result_wal->fetch_assoc();

        $Old_init_balval=$Row_init_wal['cname'];

//if(!$Link) echo "Не удалось подключится к серверу";
//else{
echo("  !   ");  
echo($Old_init_balval);
echo("  !   ");


/*
{
    mysql_select_db('testbd');

    $sql = "CREATE TABLE 'Users'  ('UserID'  VARCHAR(5) CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci NOT NULL ". 
        " 'Name'  VARCHAR(25) CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci, ". 
        " 'E-mail'  VARCHAR(25) CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci)";
    if (mysql_query($sql))
        echo "Создание таблицы завершено";
    else
        echo "Таблицу создать не удалось";
}
*/




/*
// выполняем операции с базой данных
     
$query ="SELECT * FROM accounts";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Выполнение запроса прошло успешно";
}

*/
// закрываем подключение
mysqli_close($link);
?>

</body>
</html> 
-->
