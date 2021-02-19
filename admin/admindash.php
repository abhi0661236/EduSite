<?php
    session_start();
    if($_SESSION['user']){
        
    }
    else
    {
        header('Location:../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include 'headAdmin.html';
    ?>
</head>
<body>
    <?php
        include 'navAdmin.html';
    ?>

    <div class="admintitle bg-secondary container my-4 p-2">
        <h1 class = "text-center">Welcome to Admin Dashboard</h1>
    </div>

</body>
</html>