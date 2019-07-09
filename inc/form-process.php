<?php require_once('./dbconnect.php'); ?>
<?php
    if (isset($_POST['submit'])) {
        $user_firstname = mysqli_real_escape_string($conn, $_POST['user_firstname']);
        $user_lastname = mysqli_real_escape_string($conn, $_POST['user_lastname']);
        $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
        $user_alias = mysqli_real_escape_string($conn, $_POST['user_alias']);

            if(empty($user_firstname) || empty($user_lastname) || empty($user_email) || empty($user_pwd) || empty($user_alias)) {
                    header("Location: ../signup.php?signup=empty");
            }
            
    } else {
        header("Location: ../signup.php");
            exit();
    }