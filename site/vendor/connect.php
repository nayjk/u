<?php
session_start();

if ($_SESSION['user']) {
}
else{
	header('Location: ../autorize.php');
}

?>
<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'groub29');

    if (!$connect) {
        die('Error connect to DataBase');
    }