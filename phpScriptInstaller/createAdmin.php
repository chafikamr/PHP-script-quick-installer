<?php 
require('connect.php');
$sql='
   INSERT INTO USERS
   VALUES(
    12 ,
   "chafik" ,
    "0000"
);
';
 $conn->exec($sql);
 $conn = null;
header('location: index.php');

