<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location:admin/admindash.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        include 'head.html';
    ?>
</head>
<body>
    <?php
        include 'navigation.html';
    ?>

    <form action="" method = "post" class="container bg-secondary p-5 my-2">
        <h2 class="text-center">Login</h2>
        Username : <input name = "username" class = "form-control" type="text" placeholder = "Enter your username" required>
        Password : <input name = "password" class = "form-control" type="password" placeholder = "Enter your password" required>
        <input class = "form-control bg-success mt-4" type="submit" value="Login" name = "submit">
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connection.php';
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);

            if ($num_rows == 1){
                $data = mysqli_fetch_assoc($result);
                $data['username'];
                $data['password'];
                $_SESSION['user'] = $username;
                header('Location:admin/admindash.php');
            }
            else
            {  ?>
                <script>
                    alert("Incorrect username or password !!");
                    window.open('login.php', '_self');
                </script>
                
            <?php
            }
        }

            
            
            
    }
?>