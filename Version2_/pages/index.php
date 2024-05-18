<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
//include('../includes/config.php');

include('../includes/header.php');
include_once('../items/index.itm.php');
//var_dump(include_once("../items/index.itm.php"));
?>
 <div class="screen mx-auto col-8 m-5">
<?php //include_once('../includes/header.php'); ?>
</div>


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

    

<?php include_once('../includes/footer.php'); ?>
</body>