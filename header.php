<?php require_once('./inc/dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>A complete Login system</title>
</head>

<body>
    <header>
        <nav>
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <form action="">
                        <input type="text" name="user_alias" placeholder="username/email">
                        <input type="password" name="user_pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>
                </div>

            </div>
        </nav>
    </header>