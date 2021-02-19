




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Education Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
            include 'head.html';
        ?>
    </head>
    <body>
        <?php
            include 'navigation.html';
        ?>

        <form action="" method ="POST" class="container p-5 bg-secondary my-2">
            Select Course : <select class ="my-2 form-control" name = "course" required>
                <option value = "1">Web Developement</option>
                <option value = "2">Front-end Libraries</option>
                <option value = "3">Backend with php</option>
                <option value = "4">Python</option>
                <option value = "5">Java</option>
                <option value = "6">Node.js Certification</option>
            </select>
            Enter Roll No. : <input class ="my-2 form-control" type = "text" name ="rollno" required>
            <input class ="form-control mt-4 bg-success" type="submit" value="Show Details">
        </form>
    </body>
</html>