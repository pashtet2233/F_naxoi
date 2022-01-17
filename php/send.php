<?php



$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);

$login = urldecode($login);
$pass = urldecode($pass);
$email = urldecode($email);
$tel = urldecode($tel);

$login = trim($login);
$pass = trim($pass);
$email = trim($email);
$tel = trim($tel);


if (mail("nikitapashkivski@gmail.com",
	     "Новое письмо с сайта",
         "Логин: ".$login."\n".
         "Пароль: ".$pass."\n".
         "Email: ".$email."\n"
         "телефон: ".$tel,
         "From: no-reply@mydomain.ru \r\n")
) 
else {
echo ('Есть ошибки');
}



?>
