<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistration</title>
    <?php 
            include 'head.html';
    ?>
</head>
<body>
    <?php
        include 'navigation.html';
    ?>
    <h2 class="text-center">Registration Form</h2>
    <form method="post" class="container bg-secondary p-4" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Institute Name : <input class="form-control" type="text" name="institute" placeholder="Enter your institute name" required>
        Full Name : <input class="form-control" type="text" name="name" placeholder="Enter your name" required>
        E-mail : <input class="form-control" type="email" name="email" placeholder="Enter your email address" required>
        Mobile No. : <input class="form-control" type="text" name="mobile" placeholder="Enter your mobile number" required>
        Address : <input class="form-control" type="text" name="address" placeholder="Enter your address">
        <hr>
        Create Password : <input class = "form-control" type="password" placeholder = "Create a password." name = 'password' required>
        Confirm Password : <input class = "form-control" type="password" placeholder = "Enter password again" name = 'AgainPassword' required>
        <input class="form-control bg-primary my-4 " type="submit" value="Submit">
    </form>
</body>
</html>

<?php
   include 'connection.php';

   if($_SERVER["REQUEST_METHOD"] == "POST"){
        $instName = $_POST['institute'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $mobile_no = $_POST['mobile'];
        $password = $_POST['password'];
        $confirmed_password = $_POST['AgainPassword'];


        $sql = "SELECT * FROM students";
        $query = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($query);
        echo $num_rows;

        
        if($password === $confirmed_password){

        }
        else
        {
            print '<script>alert("Password Not matched");</script>';
        }
        if($password === $confirmed_password){
            $sql = "INSERT INTO students (inst_name,name,email,mobile,address,password) VALUES ('$instName','$name','$email','$mobile_no','$address','$confirmed_password')";
            mysqli_query($conn, $sql);
            print '<script>alert("Registered successfully !!");</script>';

        }
   }
   






?>