<?php
require_once('bd.php');
require_once('index.php');
$login = $_POST['login'];
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($password) || empty($repeatpass)){
echo "Заполните все поля";
} else
{
if ($password != $repeatpass) {
echo "Пароли не совпадают";
} else
{
$sql = "INSERT INTO `users` (login, password) VALUES ('$login', '$password')";
if ($conn -> query($sql) === TRUE) {
echo "Успешная регистрация";
file_get_contents('index.php');
} else
{
echo "Ошибка: ". $conn -> error;
}

}
}
?>