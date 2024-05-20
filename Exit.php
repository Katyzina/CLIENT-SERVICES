<?php
session_start();

unset($_SESSION['passmd5']); //удаляет переменную сессии
header("Location: index.php"); //переход на страницу авторизации