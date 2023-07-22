<?php
    include_once 'header.php';
?>

<h1> Hello, 
    <?php
    if(isset($_SESSION["username"])){
        echo $_SESSION["username"].'!'; 
    } else {
        echo "User !";
    }
    ?>
    </h2>
<p>Welcome to the World of PHP </p>

<?php
    include_once 'footer.php';
?>
