<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Gateway</title>
</head>
<body>
    <?php
        include('connect.php');

        if (isset($_REQUEST['submit'])!='') {
            $sql = "insert into roadtrip values('".$_REQUEST['fname']."', '".$_REQUEST['lname']."', '".$_REQUEST['age']."', '".$_REQUEST['email']."', '".$_REQUEST['pass']."');";
            if ($con -> query($sql)) {
                header("Location: LoginForm.html");
                echo "Row Inserted";
            } else {
                echo "Not able to insert";
            }
        }



    ?>
</body>
</html>