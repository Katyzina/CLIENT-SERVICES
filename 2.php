<?php
session_start();

// создаем новую сессию или

// восстанавливаем текущую

echo session_id();

//выводим идентификатор сессии

?>
    <html>

    <head>

        <title>My home page</title>

    </head>
    <body>
    домашняя страничка
    </body>

    </html>

<?php
echo session_name();

// выводим имя текущей сессии.

// В данном случае это PHPSESSID
