<?php
    include_once 'header.php';
?>

<div class="form">
    <h1> The World of Tech </h1>
    <form action="/includes/login.inc.php" method="post">

        <input type="text" id="name" name="name" placeholder="Name">
        <input type="text" id="email" name="email" placeholder="E mail">
        <input type="text" id="username" name="uid" placeholder="Username">
        <input type="password" id="password" name="pwd" placeholder="Password">
        <input type="password" id="password" name="pwd" placeholder="Repeat Password">
        <button name="submit" type="submit">Sign Up </button>
    </form>
    <p>Already have an account? <a href="login.php"> Log In </a></p>
</div>


<?php
    include_once 'footer.php';
?>
