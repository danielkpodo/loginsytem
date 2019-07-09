<?php include_once('./inc/header.php'); ?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign up</h2>
        <form action="./inc/form-process.php" class="signup-form" method="post">
            <input type="text" name="user_firstname" placeholder="firstname">
            <input type="text" name="user_lastname" placeholder="lastname">
            <input type="text" name="user_alias" placeholder="username">
            <input type="text" name="user_email" placeholder="E-mail address">
            <input type="password" name="user_pwd" placeholder="password">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>
<?php include_once('./footer.php'); ?>