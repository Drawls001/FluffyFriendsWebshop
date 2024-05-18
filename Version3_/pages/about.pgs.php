<?php

include_once('../includes/header.php');
include('../includes/config.php');
//session_start();
?>

<title><?=$title['abo'];?></title>

<div class="about">
    <div class="aboutCard col-6 mx-auto">
    <h1>ABOUT</h1>
    <p>
        <?php include('../includes/about.welc.php'); ?>
    </p>
    </div>
</div>

<?php
include_once('../includes/helps.php');?>
<br><br><br><br><br>
<footer class="footer "><?php include_once('../includes/footer.php'); ?></footer>


