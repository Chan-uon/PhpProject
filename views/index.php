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
        $user->id = 1;
        $user->name = "mrWorker";
        $user->password = "newpass";
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
            echo $result['id'] . ": this is the id ";
            echo "<br/>";
            echo $result['name'] . ": this is the name ";
            echo "<br/>";
            echo $result['password'] . ": this is the password";
        } else {
            echo "empty";
        }
        echo "<br/>";

        $user->update();
        echo "updated";
        //User::delete(1);
        //echo "deleting user id 1";
    ?>
    <a href="sign_up.php">sign up</a>
    </body>
</html>