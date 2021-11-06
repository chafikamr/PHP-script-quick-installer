<?php 
require('connect.php');
$sql='
    CREATE TABLE USERS(
    user_id int ,
    user_userName varchar(30),
    user_password varchar(30)
);
';
 $conn->exec($sql);


$php__conf__code = '
<?php $isInstalled = true ;

';
$create_file = fopen('isInstalled.php', 'w');
fwrite($create_file, $php__conf__code);
fclose($create_file); 

$conn = null;
header('location: createAdmin.php');