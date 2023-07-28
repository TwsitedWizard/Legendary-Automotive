<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection using PHP</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "need4speed";
        $dbname = "javasem4";

        $con = new mysqli($servername, $username, $password, $dbname);

        if ($con -> connect_error) {
            die("Connection Failed: " .$con->connect_error);
        }
        else {
            echo ".";
            /*$sql = "select * from employee;";
            if ($result = $con -> query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    echo "".$row["name"]."<br>";
                    echo "".$row["age"]."<br>";
                    echo "".$row["salary"]."<br>";
                }
            }*/
        }
        
    ?>    

</body>
</html>