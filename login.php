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
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo '<div class="error">Fill in the all fields.</div>';
        }elseif($_GET["error"]=="wronglogin"){
            echo '<div class="error">Invalid details.</div>';
        }elseif($_GET["error"]=="stmtfailed"){
            echo '<div class="error">Something went wrong.</div>';
        }elseif($_GET["error"]=="none"){
            echo '<div class="error">Account created.</div>';
        }
    }
    ?>
    <p>New here? <a href="signup.php"> Sign Up </a></p>
</div>


<?php
    include_once 'footer.php';
?>
