<?php 
        session_start();
        require_once("./dbconnect.php");
       
    if (isset($_POST['submit'])) {
        $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
        $user_alias = mysqli_real_escape_string($conn, $_POST['user_alias']);
            if (empty($user_alias) || empty(($user_pwd))) {
                    header("Location: ../index.php?login=empty");
                        exit();
            } else {
                    $login_query = "SELECT * FROM users WHERE user_alias = '$user_alias' OR user_email = '$user_alias' ";
                    $login_success = mysqli_query($conn, $login_query); 
                        if(mysqli_num_rows($login_success) < 1) {
                             header("Location: ../index.php?login=wrong_user");
                                exit();
                        } else {
                             $row = mysqli_fetch_assoc($login_success);
                             $hashed_pwd_check = password_verify($user_pwd, $row['user_pwd']);
                             if ($hashed_pwd_check === false) {
                                header("Location: ../index.php?login=wrong_pwd");
                                    exit();
                             } else if ($hashed_pwd_check === true) {  //log in the user
                                 $_SESSION['user_id'] = $row['user_id'];
                                 $_SESSION['user_firstname'] = $row['user_firstname'];
                                 $_SESSION['user_lastname'] = $row['user_lastname'];
                                 $_SESSION['user_email'] = $row['user_email'];
                                 $_SESSION['user_alias'] = $row['user_alias'];
                                    header("Location: ../index.php?login=login_successful");
                                    exit();
                             }
                        }
            }
    } else {
        header("Location: ../index.php?login=error");
            exit();
    }