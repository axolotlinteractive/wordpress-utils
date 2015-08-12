<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 8/12/15
 * Time: 2:43 PM
 */

require('init.php');

//Ensure the $wp_rewrite global is loaded
global $wp_rewrite;
//Call flush_rules() as a method of the $wp_rewrite object
$wp_rewrite->flush_rules( false );


exit("Success!\n");