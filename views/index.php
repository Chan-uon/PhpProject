<?php    
    use \MyProject\PdoDb;
    use \MyProject\User;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
    <h1><?php echo $_GET['url']; ?> </h1>

    <?php
        $user = new User();
        print_r($user);
        echo "<br/>";
        $user->name = "mrWorker";
        echo 'user name is ' . $user->name;
        echo "<br/>";
        echo "this should cause an error";
        $user->test;
        echo "this should cause an error";
        $user->b = "error";
    ?>
    <a href="sign_up.php">sign up</a>
    </body>
</html>