<?php
//filter_var отфильтровывает опр. значения
//trim удаляет лишние пробелы из какой-либо записи
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$lastName = filter_var(trim($_POST['lastName']), FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
{
  echo "Длина логина должна быть не меньше 5 символов и не больше 90 символов";
  exit();
}
else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 90)
{
  echo "Неправильный пароль (от 6 до 90 символов)";
  exit();
}
else if (mb_strlen($phone) < 11 || mb_strlen($phone) > 90)
{
  echo "Неправильно введен номер";
  exit();
}
//ХЭШирование пароля
$pass = md5($pass."Moller412");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$mysql->query("INSERT INTO `users` (`login`, `name`, `lastName`, `phone`,`pass`)
VALUES('$login', '$name', '$lastName', '$phone', '$pass')");

$mysql->close();

header('Location: /');

 ?>
