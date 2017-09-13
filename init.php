<?php
error_reporting(1);

$conectError = 'Sorry there\'s a conection error. Plaese check your database name';
mysql_connect('127.0.0.1','root','') or die($conectError);
mysql_select_db('gnlaser') or die($conectError);
//echo "connected";


require 'functions.php';

$errors = array();



?>



