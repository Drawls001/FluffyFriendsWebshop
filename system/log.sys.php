<?php
//session_start();
//require_once('../includes/config.php');
//session_start();
include('../includes/config.php');
//session_start();

$username;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $n1 = 'FirstName';
    $n2 = 'LastName';
    $p1='PhoneNumber';
    $c1='City';
    $pc1='Postal_code';
    $s1='Street';
    $hn1='House_Number';

    $sql ="SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result = $stmt->get_result();
    


    $sql1 ="SELECT * FROM users WHERE FirstName = ? 
    AND LastName = ? AND PhoneNumber  = ? 
    AND City     = ? AND Postal_code  = ?
    AND Street   = ? AND House_Number = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("ssssisi",$n1,$n2,$p1,$c1,$pc1,$s1,$hn1);
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    //SHA1-es ellenőrzés
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(sha1($password) == $row['password']){
            
           

            $_SESSION['email'] = $row['Email'];
           
            header("Location: ../pages/logged.pgs.php");
            
            exit();
        }else{
            header("Location: ../pages/acclog.pgs.php");
            echo '<div class="alert alert-danger col-3 mx-auto m-5" role="alert">
                Rossz jelszó!
            </div>';

        }
    }else{
        header("Location: ../pages/acclog.pgs.php");
        echo '<div class="alert alert-danger col-3 mx-auto m-5" role="alert">
                Rossz emailcím!
            </div>';
    }
    $stmt->close();
    $stmt1->close();
    $conn=null;
}
?>