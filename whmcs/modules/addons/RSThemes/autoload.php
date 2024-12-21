<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.4
 * @ Decoder version: 1.0.2
 * @ Release: 10/08/2022
 */

// Decoded file for php version 74.
if(defined("RSTHEMES_DIR")) {
} else {
    define("RSTHEMES_DIR", __DIR__);
    if(!defined("DS")) {
        define("DS", DIRECTORY_SEPARATOR);
    }

    spl_autoload_register("RSThemesAutoLoad");
    spl_autoload_register("RSThemesResourcesAutoLoad");
}
function RSThemesAutoLoad($className)
{
    $class = preg_replace("/RSThemes/", "", $className, 1);
    $filename = __DIR__ . DS . "src" . DS . ltrim(str_replace("\\", "/", $class), "/") . ".php";
    error_log('LOADING FILE: ' . $filename);
    if(file_exists($filename)) {
        include_once $filename;
        if(class_exists($className)) {
            return true;
        }
    }
    return false;
}
function RSThemesResourcesAutoLoad($className)
{
    $class = preg_replace("/RSThemesResources/", "", $className, 1);
    $filename = __DIR__ . DS . "resources" . DS . ltrim(str_replace("\\", "/", $class), "/") . ".php";
    error_log('LOADING FILE: ' . $filename);
    if(file_exists($filename)) {
        include_once $filename;
        if(class_exists($className)) {
            return true;
        }
    }
    return false;
}
function recursiveArraySort(&$array)
{
    foreach ($array as &$value) {
        if(is_array($value)) {
            recursiveArraySort($value);
        }
    }
    return ksort($array);
}
function rsdirtree($dir, $regex = "", $ignoreEmpty = false)
{
    $if = sprintf("%s%s%s", $dir, DS, "index.php");
    if(!file_exists($if)) {
        file_put_contents($if, "<?php");
    }
    if(!$dir instanceof DirectoryIterator) {
        $dir = new DirectoryIterator((string) $dir);
    }
    $dirs = [];
    foreach ($dir as $node) {
        if($node->isDir() && !$node->isDot()) {
            $tree = rsdirtree($node->getPathname(), $regex, $ignoreEmpty);
            $if = sprintf("%s%s%s", $node->getPathname(), DS, "index.php");
            if(!file_exists($if)) {
                file_put_contents($if, "<?php");
            }
            if(!$ignoreEmpty || count($tree)) {
                $dirs[$node->getFilename()] = $tree;
            }
        }
    }
    asort($dirs);
    return $dirs;
}

?>