<?php
/**
 * Created by PhpStorm.
 * User: Bryce Meyer
 * Date: 8/12/15
 * Time: 1:56 PM
 */

$parentDirectory = dirname(__DIR__);


$wordPressLoad = findWordPressLoad($parentDirectory);

exit($wordPressLoad . "\n");


function findWordPressLoad($directory) {
    $dir = new DirectoryIterator($directory);

    $wordPressRoot = false;

    foreach ($dir as $file) {
        if($file->isDir() && !$file->isDot()) {
            $wordPressRoot = findWordPressLoad($directory . "/" . $file);

            if($wordPressRoot)
                break;
        }
        elseif($file->getFilename() == "wp-load.php") {
            $wordPressRoot = $directory . "/wp-load.php";
            break;
        }
    }

    return $wordPressRoot;
}