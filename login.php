<?php
    include_once 'header.php';
?>

<div class="form">
    <h1> The World of Tech </h1>
    <form action="includes/login.inc.php" method="post">

        <input type="text" id="username" name="uid" placeholder="E mail / Username">
        <input type="password" id="password" name="pwd" placeholder="Password">
        <button name="submit" type="submit">Login</button>
    </form>
    <p>New here? <a href="Signup.php"> Sign Up </a></p>
</div>


<?php
    include_once 'footer.php';
?>
