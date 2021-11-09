<?php require('layout/header.php');?>

<?php  require('isInstalled.php'); if (!isset($isInstalled)){ //if app is not installed . . . ?>

<!-- require installation -->
<div class="wrapper">
        <p>Your Current PHP version is <span style="color:#188920">8.1</span></p>
        <p>Click <span style="color:#1C85CB">install</span> to start system installation . . .</p>
        <a href="two.html"> INSTALL</a>
</div>
<?php
}else{?>
<div class="wrapper">
        <p>App Is already installed !!</p>
        <a href="two.html"> OK</a>
</div>
<?php } ; require('layout/footer.php');?>
   