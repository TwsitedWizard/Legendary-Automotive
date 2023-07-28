<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
</head>
<body>
    <?php
        include('connect.php');

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $user = stripcslashes($user);  
        $pass = stripcslashes($pass);  
        $user = mysqli_real_escape_string($con, $user);  
        $pass = mysqli_real_escape_string($con, $pass);  

     /*   if (isset($_POST['submit'])!='') {
            $sql = "select * from roadtrip where email = '".$user ."' and pass = '".$pass."';";
            if ($con -> query($sql)) {
                header("Location: HomeOG.html");
                echo "Login Successfull.";
            }
            else {
                echo "Invalid Login Credentials.";
            }
        } */

        $sql = "select *from roadtrip where email = '$user' and password = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
            header("Location: HomeOG.html");
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

    ?>
</body>
</html>