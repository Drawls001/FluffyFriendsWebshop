<?php

require_once '../includes/config.php';

 

if( isset($_POST['FirstName']) && 
    isset($_POST['LastName']) &&
    isset($_POST['Email']) &&
    isset($_POST['PhoneNumber']) &&
    isset($_POST['Password']) &&
    isset($_POST['Password2']) &&
    isset($_POST['City']) &&
    isset($_POST['PostalCode']) &&
    isset($_POST['Street']) &&
    isset($_POST['HouseNumber']) &&
    isset($_POST['chk'])
    ){
        $fName = $_POST['FirstName'];
        $lName = $_POST['LastName'];
        $email=$_POST['Email'];
        $phoneNumber =$_POST['PhoneNumber'];
        $password = $_POST['Password'];
        $password2 = $_POST['Password2'];
        $city=$_POST['City'];
        $postalCode=$_POST['PostalCode'];
        $street = $_POST['Street'];
        $houseNumber=$_POST['HouseNumber'];
        $chk_box = $_POST['chk'];

    // Ellenőrizzük, hogy a felhasználónév és az e-mail egyediek legyenek
    $stmt = $conn->prepare("SELECT ID FROM users WHERE Email = ? OR PhoneNumber = ?");
    $stmt->bind_param("ss", $email,$phoneNumber);
    $stmt->execute();
    $result= $stmt->get_result();
    $stmt->close();

    if($result->num_rows>0){
        echo "A felhasználónév vagy az e-mail már foglalt.";
        exit();
    }

    if(!$chk_box){
        $stmt = $conn->prepare("INSERT INTO users(FirstName,LastName,Email,password,PhoneNumber,City,Postal_code,Street,House_Number) 
        VALUES (?,?,?,SHA1(?),?,?,?,?,?)");
        $stmt->bind_param("ssssssiss",$fName,$lName,$email,$password,$phoneNumber,$city,$postalCode,$street,$houseNumber);
    }else{

        header("Location: ../pages/accreg.pgs.php");
        exit();
    }

    if($stmt->execute()){
        header("Location: ../pages/acclog.pgs.php");
        exit();
    }else{
        echo "Hiba a regisztrációban!";
    }
    $stmt->close();





}   
