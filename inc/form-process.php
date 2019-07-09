<?php require_once('./dbconnect.php'); ?>
<?php
    if (isset($_POST['submit'])) {
        $user_firstname = mysqli_real_escape_string($conn, $_POST['user_firstname']);
        $user_lastname = mysqli_real_escape_string($conn, $_POST['user_lastname']);
        $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
        $user_alias = mysqli_real_escape_string($conn, $_POST['user_alias']);

            if (empty($user_firstname) || empty($user_lastname) || empty($user_email) || empty($user_pwd) || empty($user_alias)) {
                    header("Location: ../signup.php?signup=empty_fields");
                        exit();
            } else if (!preg_match("/^[a-zA-Z]*$", $user_firstname) || !preg_match("/^[a-zA-Z]*$", $user_lastname) ) {
                    header("Location: ../signup.php?signup=invalid_entry");
                        exit();

            } else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                     header("Location: ../signup.php?signup=invalid_email");
                        exit();
            } else {
                    $check_user_existence = "SELECT * FROM users WHERE user_alias = '{$user_alias}' OR user_email = '{$user_email}'";
                    $check_user_result = mysqli_query($conn, $check_user_existence);
                        if (mysqli_num_rows($check_user_result) > 0) {
                              header("Location: ../signup.php?signup=user_taken");
                                exit();   
                        } else {
                            $hashed_pwd = password_hash($user_pwd, PASSWORD_DEFAULT);
                            
                        }
            }
            
    } else {
        header("Location: ../signup.php");
            exit();
    }