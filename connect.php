<?php

//db credentials
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','angular7phpcrud');

// Create connection
function connect()
{
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno($connect)){
        die("Filed to connect:". mysqli_connect_error());
    }

    mysqli_set_charset($connect, "utf8");

    return $connect;
}
$con = connect();

?>