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
        //$user->test;
        echo "<br/>";
        echo "this should cause an error";
        //$user->b = "error";
        echo "<br/>";
        $result = User::read(1);
        if ($result) {
            echo $result['id'] . "this is the id";
            echo $result['name'] . "this is the name";
            echo $result['password'] . "this is the passwors";
        } else {
            echo "empty";
        }
        echo "<br/>";
    ?>
    <a href="sign_up.php">sign up</a>
    </body>
</html>