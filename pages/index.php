<?php //session_start(); ?>
<?php //include('includes/config.php');
//include('../includes/header.php');
//navBar
include('includes/header.php');
if(file_exists('./system/'.$search['file'].'.sys.php')){
    include("./system/{$search['file']}.sys.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>
        
        <?=
            $title['home'];
        ?>
    </title>
</head>
<body>
    <div class="screen mx-auto col-8 m-5">
    <?php include('./items/index.itm.php');
    //include("./pages/{$search['file']}.pgs.php");
    ?>
    </div>
    <footer ><ul class="list-group list-group-flush col-6 mx-auto">
  <li class="list-group-item">Email:    |   fluffyfriends@fluffy.com</li>
  <li class="list-group-item">Help:    |   fluffyhelp@support.com</li>
  <li class="list-group-item">Phone:    |   +36 20 123 4567</li>
  <li class="list-group-item">Phone:    |   +36 30 123 4567</li>
  <li class="list-group-item">Phone:    |   +36 70 123 4567</li>
  <li class="list-group-item">Copyright: &copy; 2023-2024 </li>
</ul></footer>
</body>