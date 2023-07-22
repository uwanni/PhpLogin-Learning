<?php
    include_once 'header.php';
?>
<div class="form">
    <h1> The World of Tech </h1>
    <form action="includes/signup.inc.php" method="post">

        <input type="text" id="name" name="name" placeholder="Name">
        <input type="text" id="email" name="email" placeholder="E mail">
        <input type="text" id="username" name="uid" placeholder="Username">
        <input type="password" id="password" name="pwd" placeholder="Password">
        <input type="password" id="password" name="pwdrepeat" placeholder="Repeat Password">
        <button name="submit" type="submit">Sign Up </button>
    </form>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo '<div class="error">Fill in the all fields.</div>';
        }elseif($_GET["error"]=="invaliduid"){
            echo '<div class="error">Invalid user name.</div>';
        }elseif($_GET["error"]=="invalidemail"){
            echo '<div class="error">Invalid email.</div>';
        }elseif($_GET["error"]=="passwordsdontmatch"){
            echo '<div class="error">Passwords not matching.</div>';
        }elseif($_GET["error"]=="stmtfailed"){
            echo '<div class="error">Something went wrong.</div>';
        }elseif($_GET["error"]=="none"){
            echo '<div class="error">Account created.</div>';
        }elseif($_GET["error"]=="usernametaken"){
            echo '<div class="error">Username / Email already in use.</div>';
        }

    }
    ?>
    <p>Already have an account? <a href="login.php"> Log In </a></p>
</div>


<?php
    include_once 'footer.php';
?>
