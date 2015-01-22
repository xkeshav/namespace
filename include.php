<?php //namespace Alpha\config;
spl_autoload_extensions(".php");
spl_autoload_register('loadclass');

function loadclass($class)
{
    try {
        if (is_readable(strtolower($class).".class.php")) {
            include_once strtolower($class).".class.php";
        }
    } catch (Exception $e) {
        print "Exception:". $e;
        // trigger_error("Unable to load class: $class", E_USER_WARNING);
    }
}
//attempt to register namespace but faiils from http://php.net/manual/en/function.spl-autoload-register.php
// spl_autoload_register(__NAMESPACE__.'Alpha\Alpha()' );
//
//
/** added this function but this is never called
@link http://stackoverflow.com/questions/1830917/how-do-i-use-php-namespaces-with-autoload
*/
// function __autoload($class)
// {
//         echo "called:";
//         echo __LINE__;
//         $parts = explode('\\', $class);
//         var_dump($parts);
//         require end($parts) . '.class.php';
// }
