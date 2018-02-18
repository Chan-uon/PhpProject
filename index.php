<?php
    require_once('lazy_autoloader.php');
    require_once('routes.php');
    use \MyProject\PdoDb;
    use \MyProject\Route;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
    <?php
    //Example to test out classes
    $pdo = PdoDb::getInstance();
    $stmt = $pdo->query('SELECT * FROM r');
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
        <pre>
        <?php
            print_r($result);
            echo $_GET['url'];
        ?>
        </pre>
    </body>
</html>