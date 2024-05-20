<?php
session_start();?>

<form action="Login.php" method="POST">
    Логин
    <input name="login" type="text" />
    <br />
    Пароль
    <input name="password" type="password" />
    <br />
    Ключевое слово
<input name="key" type="text" />
    <br />
    <input name="submit" type="submit" value="Войти" />
</form>



