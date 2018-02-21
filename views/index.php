<?php    
    use \MyProject\PdoDb;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
    <h1><?php echo $_GET['url']; ?> </h1>
    <?php
    //Example to test out classes
    $pdo = PdoDb::getInstance();
    $stmt = $pdo->query('SELECT * FROM r');
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
        <pre>
        <?php
            print_r($result);
            
        ?>
        </pre>
    <a href="sign_up.php">sign up</a>
    </body>
</html>