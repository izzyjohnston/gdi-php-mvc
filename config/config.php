<?php
/**
 * define the global variables to be used throughout the application
 */
///whatever you named your database
define('DATABASE_NAME', 'gdi_php_mvc');
///the user with permissions to your database. By default this is 'root'
define('DATABASE_USER', 'root');
///the password of the user.
///For MAMP users, this is 'root' by default.
///For XAMPP and WAMP users, this is '' by default
define('DATABASE_PASSWORD', 'root');
///The host of your database.
///For all local database users, this is localhost.
///For many hosted users (those on bluehost, rackspace, etc.) it is also localhost. But some have a special host name like Dreamhost that they will give you when you sign up for a database on their server.
define('DATABASE_HOST', 'localhost');
session_start();
?>
<?php
/**
 * include all config files, and all files in the models and controllers directories
 */
    require_once ('db.php');
    require_once ('model.php');
    include_all_php($_SERVER['DOCUMENT_ROOT'].'/'.'application/models');
    include_all_php($_SERVER['DOCUMENT_ROOT'].'/'.'application/controllers');
?>
<?php
/**
 * @param $folder
 * function to recursively include all files in a folder
 */
function include_all_php($folder){
    foreach (glob("{$folder}/*.php") as $filename)
    {
        require_once $filename;
    }
}
?>