<?php 

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pwd'] = "";
$db['db_name'] = "loginsystem";
        foreach($db as $key=>$value) {
            define(strtoupper($key), $value);
        }
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
            if (!$conn) {
                die("Database connection failed faile: ".mysqli_connect_error($conn));
            }