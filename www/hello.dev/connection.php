<?php
/* Подключение к серверу MySQL */ 
$server = "www.veraexchange.com";//СЕРВЕР MYSQL
$user_db = "veraexch_midnight";//ЮЗЕР MYSQL
$pass_db = "2789206a";//ПАРОЛЬ MYSQL
$base_db = "veraexch_DB";//ИМЯ_БАЗЫ MYSQL
$mysqli = new mysqli($server, $user_db, $pass_db, $base_db);
if(mysqli_connect_errno()){
	printf("Сервер базы данных не доступен. Код ошибки: %s\n", mysqli_connect_error());
	exit;
}
?>


<?php
/*$host = 'localhost'; // адрес сервера 
$database = 'testdb'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'Dd7015015'; // пароль
*/?>
