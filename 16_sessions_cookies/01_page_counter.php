<?php

session_start();

$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0;
$_SESSION['page_counter']++;

echo '<pre>';
var_dump($_SESSION['page_counter']);
echo '</pre>';


if($_SESSION['page_counter'] ===10)
{
    echo 'Thanks for visting us 10 times'.'<br>';
    session_unset();
    session_destroy();
}

// echo session_id();

// // $_SESSION['name'] = 'Jian';

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

// unset($_SESSION['name']);

// session_unset();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>My Awesome page, Visited: <?php echo $_SESSION['page_counter'] ?? 10 ?> times</h1>
</body>
</html>
