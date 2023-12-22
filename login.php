<?php
require_once('bd.php');
require_once('index.php');
$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
echo "Заполните все поля";
} else {
$sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
$result = $conn -> query($sql);

if ($result -> num_rows > 0)
{
if ($row = $result -> fetch_assoc()) {
echo "Добро пожаловать " . $row['login'];
file_get_contents('index.php');
}
} else {
echo "Нет такого пользователя";
}
}
?>