<?php
require_once 'include.php';

//@link http://php.net/manual/en/language.namespaces.php
/** below code works by commenting 1st line where we defining namespace  on alpha.class.php */
// if we define name space then below code gives Fatal error: Class 'Alpha' not found
Alpha::$baseDir_ = '/opt/lampp/archive/';
$obj_ = new Alpha();
var_dump(get_included_files());
var_dump($obj_);

/** now we define namespace Alpha on alpha.class.php */
// $ns_ = new Alpha\Alpha(); // Fatal error: Class 'Alpha\Alpha' not found
// var_dump($ns_);

/** not working even with use statement */
// use Alpha;
// use Alpha;
// $fn = new Alpha\Alpha();
// var_dump($fn);