<?php 
        require_once("./dbconnect.php");
        
    if(isset($_POS['submit'])) {
        $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
        $user_alias = mysqli_real_escape_string($conn, $_POST['user_alias']);
        
    }