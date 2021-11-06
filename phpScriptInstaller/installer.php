<?php 
// echo 'This is installation page ';

// $php__conf__code = '
// <php $isInstalled = true ;

// ';
// $create_file = fopen('isInstalled.php', 'w');
// fwrite($create_file, $php__conf__code);
// fclose($create_file);
if(isset($_POST['submit'])){

    $servername = $_POST['localhost'];
    $username = $_POST['userName'];
    $password = $_POST['password'];
    $dbName= $_POST['dbName'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $config ='<?php
        define("HOSTNAME", "'.$_POST['localhost'].'");
        define("DBNAME", "'.$_POST['dbName'].'");
        define("USERNAME", "'.$_POST['userName'].'");
        define("HOSTPASSWORD", "'.$_POST['password'].'");
        ';
        $create_file = fopen('config.php', 'w');
        fwrite($create_file, $config);
        fclose($create_file);

        echo "Connected successfully";
        echo '<a href="tables.php">create tables </a>';
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

<span>1 create a databse in php my admin  </span><br>
<span>2 fill this form  </span>

    <form action="" method="POST">
    <div>
    server
    <input type="text" name="localhost">
    </div>
       <div>
       user
         <input type="text" name="userName">
       </div>
        <div>
        pasword
            <input type="text" name="password">
        </div>
        <div>
        dbname
            <input type="text" name="dbName">
        </div>
        <div>
            <button  type="submit" name="submit" value="subit">Submit</button>
        </div>
    </form>
</body>
</html>