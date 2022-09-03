<html>
    <head>
        <title>Creating Database Tutorial</title>
    </head>
<?php
$dbhost='localhost:3306';
$dbuser='root';
$dbrootpassword='engineerbarungi@1';
$conn=mysql_connect($dbhost,$dbuser,$dbrootpassword);
if(!$conn){
    die('Couldnot connect:'.mysql_error());
}
echo'Connected sucessfully<br />';
$sql='CREATE DATABASE TUTORIALS';
$retval=mysql_query($sql,$conn);
if(!retval){
    die('Couldnt create database:'.mysql_error());
}
echo'Database Tutorial created sucessfully\n';
mysql_close($conn);
?>
</body>
</html>