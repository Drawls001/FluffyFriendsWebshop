<?php



$dbserverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "ffwebshop";

$title = array(

    'home' => 'Fluffy Friends | HOME',
    'news' => 'Fluffy Friends | NEWS',
    'abo'  => 'Fluffy Friends | ABOUT',
    'log'  => 'Fluffy Friends | SIGN IN',
    'acc'  => 'Fluffy Friends | ACCOUNT ',
    'reg'  => 'Fluffy Friends | SIGN UP',
    'inv'  => 'Fluffy Friends | INVENTORY',
    'qna'  => 'Fluffy Friends | Q&A',
);

$navBar = array(

   // 'Fluffy Friends' => 'index.php',
   // '/' => array('pages'=>'index.pgs.php'),
    'HOME' => 'index.php',
    'NEWS' => 'news.pgs.php',
    'ABOUT' => 'about.pgs.php',
    
);
/*'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
     <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
     <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
     ACCOUNT' => 'acclog.pgs.php', */

$acc = array(    
     'HOME' => 'index.php',
     'NEWS' => 'news.pgs.php',
     'ABOUT' => 'about.pgs.php',
     '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
     <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
     <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
     ACCOUNT' => 'logged.pgs.php',
);



$conn = new mysqli($dbserverName,$dbUserName,$dbPassword,$dbName);
if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}



