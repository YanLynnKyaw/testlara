<?php 

    define('DB_SERVER','localhost');
    define('DB_USERNAME', 'gg');
    define('DB_PASSWORD', '2122');
    define('DB_NAME','user');

    $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
?>