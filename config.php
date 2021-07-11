<?php
// Hostname for your URL shortener
$hostname = 'https://pcor.me';
// PDO connection to the database
// e.g - $connection = new PDO('mysql:dbname=Your Database name here;host=For synology - localhost:3007/ Others - localhost', 'User Name', 'Password');
$connection = new PDO('mysql:dbname=;host=', '', '');
// Choose your character set (default)
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$salt = '';
$padding = 3;
?>
