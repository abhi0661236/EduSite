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
    <title>Update Student</title>
    <?php
        include 'headAdmin.html';
    ?>
</head>
<body>
    <?php
        include 'navAdmin.html';
    ?>

    <div class="admintitle bg-secondary container mt-4 p-2">
        <h1 class = "text-center">Update Student Details</h1>
    </div>
    <div class="container bg-success p-2 px-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post" enctype = "multipart/form-data">
            
            Student Name : <input class = "form-control" type="text" name = "studentName" placeholder = "Enter the student name here." required>
            
            Roll No. : <input class = "form-control" type="text" name = "rollno" placeholder = "Enter the roll number here." required>
    
            <input class = "form-control mt-4 bg-primary" type="submit" name = "submit" value = "Add Student">
        </form>
    </div>

</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include '../connection.php';
        
        $studentName = $_POST['studentName'];
        $rollNo = $_POST['rollno'];


        $qryCheck = "SELECT * FROM students WHERE name='$studentName' AND roll_no.='$rollNo'";
        $runCheck = mysqli_query($conn, $qryCheck);
        $number = mysqli_num_rows($runCheck);
        
        // checking if any student already registered

        if($number > 0)
        {
            echo "student found";
            
        }
        else
        {
            ?>
            <script>
                alert("No student found with given details !!");
                window.open('updateStudent.php', '_self');
            </script>
            <?php
        }
    }
?>