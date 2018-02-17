<?php
/**
* Function lazyAutoloader($class_name).
* Autoload classes using spl_autoload_register.
*
* @var string $class_name The name of the class.
*/
function lazyAutoloader($class_name) {
    lazyAutoloaderHelper($class_name, '/', 'MyProject');
    lazyAutoloaderHelper($class_name, '/controllers/', 'MyProject');
}

/**
* Function lazyAutoloaderHelper($class_name, $class_path).
* Used to support autoloading of classes from different directories
*
* @var string $class_name The name of the class.
* @var string $class_path The path to append to base directory.
* @var string $prefix The namespace prefix.
*/
function lazyAutoloaderHelper($class_name, $class_path, $prefix){
    // base directory, ex /usr/project/
    $base_dir = __DIR__ . $class_path;

    // check if the class uses the namespace prefix
    $len = strlen($prefix);
    if (strncmp($prefix, $class_name, $len) !== 0) {
        // move to next autoloader
        return;
    }

    $relative_class = substr($class_name, $len);

    // use base directory instead of namespace prefix
    // replace namespace separators with directory separators and append with .class.php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.class.php';

    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('lazyAutoloader');
?>
