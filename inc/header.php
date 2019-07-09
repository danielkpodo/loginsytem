 <?php session_start(); ?>
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
                     <li><a>
                             <?php
                                if(isset($_SESSION['user_alias'])) {
                                    echo " &nbsp; &nbsp; <span style='color: red;'>You are logged in</span>";
                                } else {
                                    echo "You are not loged in";
                                }
                         ?>
                         </a></li>
                 </ul>
                 <div class="nav-login">
                     <?php
                            if(isset($_SESSION['user_alias'])) {
                                echo '
                                    <form action="./inc/logout.php" method="post">
                                        <button type="submit" name="submit">Logout</button>
                                    </form>
                                ';
                            } else {
                                echo '
                                    <form action="inc/login-process.php" method="post">
                                        <input type="text" name="user_alias" placeholder="username/email">
                                        <input type="password" name="user_pwd" placeholder="password">
                                        <button type="submit" name="submit">Login</button>
                                    </form>
                                     <a href="signup.php">Sign up</a>
                                
                                ';
                            }


                        ?>

                 </div>

             </div>
         </nav>
     </header>