<?php
include('../includes/header.php');
require_once('../includes/config.php');
require_once('../system/log.sys.php');
//session_start();

?>

<title>
    <?= $title['acc'] ?>
</title>

<div class="log col-4 mx-auto mt-5">
    <div class="loginCard">
        <form action="../system/logout.sys.php">
            <button type="submit" class="btn btn-primary">LOGOUT</button>
        </form>


        <label>Email:</label>
        <form action="../system/setEmailOrPassword.php" method="post">
            <div class="form-floating mb-3">


                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['email']; ?>" aria-label="Recipient's username" aria-describedby="button-addon2" disabled>

                </div>

            </div>
        </form>
        <label>Password:</label>
        <div class="form-floating mb-3">
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="****************" aria-label="Recipient's username" aria-describedby="button-addon2" disabled>

            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Delete account:" aria-label="Example text with button addon" aria-describedby="button-addon1" disabled>
            <button class="btn btn btn-danger" type="button" id="button-addon1" onclick="DeleteAcc()">Delete</button>
        </div>

        <form action="../system/delacc.sys.php" method="post">
            <div class="warn" style="display: none;" id="warn">
                <div class="alert alert-warning mx-auto" role="alert">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>&nbsp&nbspBiztos szeretnéd törölni a profilodat?&nbsp&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg><br><br><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp<button class="btn btn btn-danger col-5" type="submit" id="button-addon1" onclick="Del()">Delete</button>
                    <button class="btn btn btn-success col-5" type="button" id="button-addon1" onclick="Back()">Cancle</button>
                </div>
            </div>


        </form>




    </div>
</div>

<script src="../JavaScript/DestroyAcc.js"></script>