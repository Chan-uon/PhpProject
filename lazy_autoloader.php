<?php
/**
* Function lazyAutoloader($class_name).
* Autoload classes using spl_autoload_register.
*
* @var string $class_name The name of the class.
*/
function lazyAutoloader($class_name) {
    // namespace prefix, ex Project\Class
    $prefix ='MyProject';

    // base directory, ex /usr/project/
    $base_dir = __DIR__ . '/';

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
