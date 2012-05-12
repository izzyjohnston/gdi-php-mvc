<?php
/**
 * define the global variables to be used throughout the application
 */
///whatever you named your database
define('DATABASE_NAME', 'myblog');
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

?>