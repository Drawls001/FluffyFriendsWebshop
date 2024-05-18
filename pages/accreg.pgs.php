<?php
include('../includes/header.php');
include('../includes/config.php');
require_once('../system/reg.sys.php');
?>
<header>
    <link rel="styleSheet" href="../css/reg-log.css">
    <title><?= $title['reg']; ?></title>
</header>
<div class="log col-4 mx-auto m-5">
        
</div>
<div class="log col-4 mx-auto m-5">
    <div class="loginCard">
        <form action="" method="post">
            <h1 class="title">SIGN UP</h1>
            <!-- Name:-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">First name:</span>
                <input type="text" class="form-control" placeholder="John" aria-label="Username" aria-describedby="basic-addon1" name="FirstName"><br>
                <span class="input-group-text" id="basic-addon1">Last name:</span>
                <input type="text" class="form-control" placeholder="Doe" aria-label="Username" aria-describedby="basic-addon1" name="LastName">
            </div>
            <!-- email: -->
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email:</span>
                <input type="email" class="form-control" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1" name="Email"><br>
            </div>
            <!-- Phone number-->
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Phone number:</span>

                <input type="text" class="form-control" placeholder="+36 1 234 5678" aria-label="Username" aria-describedby="basic-addon1" name="PhoneNumber"><br>
            </div>
            <br>
            <!-- password:-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password:</span>
                <input type="password" class="form-control" placeholder="rQyar615?_s@arzra=?!" aria-label="Username" aria-describedby="basic-addon1" id="password" name="Password"><br>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="SetSeePassword()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                    </svg></button>
            </div>
            <!-- password-again:-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password again:</span>
                <input type="password" class="form-control" placeholder="rQyar615?_s@arzra=?!" aria-label="Username" aria-describedby="basic-addon1" id="password2" name="Password2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon3" onclick="SetSeePassword()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                    </svg></button>
            </div>
            <br>
            <!-- -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">City:</span>
                <input type="text" class="form-control" placeholder="Budapest" aria-label="Username" aria-describedby="basic-addon1" name="City"><br>
                <span class="input-group-text" id="basic-addon1">Postal code:</span>
                <input type="text" class="form-control" placeholder="1007" aria-label="Username" aria-describedby="basic-addon1" name="PostalCode"><br>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Street:</span>
                <input type="text" class="form-control" placeholder="Kassai utca" aria-label="Username" aria-describedby="basic-addon1" name="Street"><br>
                <span class="input-group-text" id="basic-addon1">House number/floor:</span>
                <input type="text" class="form-control" placeholder="4/11" aria-label="Username" aria-describedby="basic-addon1" name="HouseNumber"><br>
            </div>

            <div class="form-check mx-auto col-4">
            <input class="form-check-input" type="checkbox" value="" name="chk" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Elfogadom az <a class="link-offset-2 link-underline link-underline-opacity-0" target="_blank" href="../pages/ASZF.php">ÁSZF</a>-t.
            </label>
            </div>
            <br>
            <button type="button" class="btn btn-primary mx-auto col-12" id="Succes" onclick="submit()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                SIGN UP
            </button>
            <br><br>
            <h7 class="c7 ">If you have an account, please <a class="link-offset-2 link-underline link-underline-opacity-0" href="acclog.pgs.php">SIGN IN</a>.</h7>

        </form>
    </div>
</div>
<script src="../JavaScript/reg-log.js"></script>