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

    <div class="admintitle bg-secondary container mt-4 p-2">
        <h1 class = "text-center">Add Student Details</h1>
    </div>
    <div class="container bg-success p-2 px-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post" enctype = "multipart/form-data">
            Institute Name : <input class = "form-control" type="text" name = "instName" placeholder = "Enter the institute name here." >
            Student Name : <input class = "form-control" type="text" name = "studentName" placeholder = "Enter the student name here." required>
            Course Name : <input class = "form-control" type="text" name = "courseName" placeholder = "Enter the course name here." required>
            Roll No. : <input class = "form-control" type="text" name = "rollno" placeholder = "Enter the roll number here." required>
            E-mail Address : <input class = "form-control" type="email" name = "email" placeholder = "Enter the email here." required>
            Mobile No. : <input class = "form-control" type="text" name = "mobile" placeholder = "Enter the contact number here." required>
            City Name : <input class = "form-control" type="text" name = "city" placeholder = "Enter the city name here.">
            Photo : <input class = "form-control" type="file" name = "image">
            <input class = "form-control mt-4 bg-primary" type="submit" name = "submit" value = "Add Student">
        </form>
    </div>

</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include '../connection.php';
        $instName = $_POST['instName'];
        $studentName = $_POST['studentName'];
        $rollNo = $_POST['rollno'];
        $courseName = $_POST['courseName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $cityName = $_POST['city'];
        $imagename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];

        move_uploaded_file($tempname,"../dataimg/$imagename");

        $qryCheck = "SELECT * FROM students WHERE email='$email'";
        $runCheck = mysqli_query($conn, $qryCheck);
        $number = mysqli_num_rows($runCheck);

        // checking if any student already registered

        if($number == 1)
        {
            ?>
            <script>
                alert("A student with this email already registered !!");
                window.open('addStudent.php', '_self');
            </script>
            <?php
        }
        else
        {
        $qry = "INSERT INTO `students`(`inst_name`, `name`, `course`, `roll_no.`, `email`, `mobile`, `city`, `password`,`image`) VALUES ('$instName','$studentName','$courseName','$rollNo','$email','$mobile','$cityName','123123123','$imagename')";
        $run = mysqli_query($conn, $qry);
        }


        if($run == true)
        {
            ?>
            <script>
                alert("Data inserted successfully !!");
            </script>
            <?php
        }
    }
?>