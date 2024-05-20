<?php

session_start();

$_SESSION['myVar'] = 'It works! This is value of session variable';
?>

<html>
<body>
<a href="page2.php">click here</a>
</body>
</html>


