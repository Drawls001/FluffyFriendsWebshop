<?php
session_start();

require_once('config.php');
include('bst.php');

//require_once('../system/log.sys.php');
require_once 'CheckLogin.php';
//session_start();

function is_logged_in() {
  return isset($_SESSION['email']);
}
//echo $search;
//var_dump($navBar);
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Fluffy Friends</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">

      
      <?php foreach ( $navBar as $url => $key ) {?>
          <?php if(isset($_SESSION['email']) && ($_SESSION['email']) && $navBar['menun'][0] || (isset($_SESSION['email'])&&$navBar['menun'][1])) {?>
           <li class="nav-item <?= (($navBar == $search) ? 'active':'') ?>">
           <a class="nav-link active " aria-current="page" href="<?= ($url =='/') ? '.':('?oldal='.$url) ?> ">
              <?php $navBar['szoveg']; ?>
          </li>
          <?php } ?>
          <?php } ?>


    
      </ul>
      <?php 
      //session_start();
      if (is_logged_in()) { ?>
        <a class="nav-link active" href="./pages/logged.pgs.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg> <?php echo $_SESSION['email']; ?> </a>
      <?php } else { ?>
        <a class="nav-link active" href="./pages/acclog.pgs.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg> ACCOUNT </a>
      <?php } ?>
    </div>
  </div>
</nav>