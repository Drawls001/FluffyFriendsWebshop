<?php
//Support system:

include_once('../pages/about.pgs.php');

if(isset($_POST['email']) &&
   isset($_POST['topic']) &&
   isset($_POST['message'])){
  

    if( $_SESSION['email'] ){
      $email = $_SESSION['email'];
    }else{
      $email = $_POST['email'];
    }
     
    
    $topic =$_POST['topic'];
    $message = $_POST['message'];
      
    
    if(empty($email) && empty($topic) && empty($message)){
      echo '<div style="display:none;" class="alert alert-danger col-6 mx-auto" role="alert" id="warning">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      No field shall remain empty!
    </div>';
    
    sleep(5);
    header("Location: ../pages/about.pgs.php");
    exit;
  } 

   


    
      $stmt = $conn->prepare("INSERT INTO support(Email,Topic,Message) VALUES(?,?,?)");
      $stmt->bind_param("sss",$email,$topic,$message);
     
    


    if($stmt->execute()){
      sleep(10);
      header("Location: ../pages/about.pgs.php");
      exit();
    }else{
        echo "Hiba az üzenet elküldésében!";
    }
    $stmt->close();

}




?>