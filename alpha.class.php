<?php
//namespace Alpha; //<< comment and uncomment this line to check out put on eg.php

class Alpha
{
    // public static $baseDir_;
    public $dir = __DIR__;
    public static $baseDir_;
    public function __construct()
    {
        echo __FILE__."=>".__METHOD__;
        var_dump(self::$baseDir_, $this->dir);
        $firstDir = !empty(self::$baseDir_) ? self::$baseDir_ :  $this->dir;
    }
}

