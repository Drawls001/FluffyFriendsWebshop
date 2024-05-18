<?php
include_once('../includes/header.php');
include('../includes/config.php');
require_once('../system/log.sys.php');

//session_start();
if (isset($_SESSION['email'])) {
    include('../pages/logged.pgs.php');
    exit();
}

?>
<header>
    <link rel="styleSheet" href="../css/reg-log.css">
    <title><?= $title['log']; ?></title>
</header>


<div class="log col-4 mx-auto mt-5">
    <div class="loginCard">
        <form action="../system/log.sys.php" method="POST">
            <h1 class="title">SIGN IN</h1>
            <!-- email: -->
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">email:</span>
                <input type="email" class="form-control" placeholder="johndoe@example.com" 
                aria-label="Username" aria-describedby="basic-addon1" name="email"><br>
            </div>
            <br>
            <!-- password:-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password:</span>
                <input type="password" class="form-control" placeholder="rQyar615?_s@azra=?!" 
                aria-label="Username" aria-describedby="basic-addon1" id="password" name="password"><br>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2" 
                onclick="SetLogSeePassword()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                    </svg></button>
            </div>
            
            <button type="submit" class="btn btn-primary mx-auto col-12" id="Succes" onclick="submit()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                SIGN IN
            </button>
            <br><br>
            <h7 class="c7" >If you don't have an account, please create one. <a class="link-offset-2 link-underline link-underline-opacity-0" href="accreg.pgs.php">SIGN UP</a></h7>
            
        </form>
    </div>
</div>

<footer class="footer fixed-bottom"><?php include_once('../includes/footer.php'); ?></footer>

<script src="../JavaScript/reg-log.js"></script>


