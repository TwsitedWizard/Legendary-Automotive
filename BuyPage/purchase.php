<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<style>
    body {
        background-image: url('./buyIMG/vagner.png');
        background-size: auto;
    }
    h1 {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        color: azure;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

</style>
<body>
    <img src="./buyIMG/lgm-depositphotos-bgremover.png"></img>
    <?php
        include('connectC.php');
        $id = uniqid();

        if (isset($_REQUEST['submit'])!='') {
            $sql = "insert into payment2 values('".$_REQUEST['name']."', '".$_REQUEST['chooseDEALER']."', '".$_REQUEST['card_number']."', '".$_REQUEST['card_type']."', '".$_REQUEST['exp_date']."', '".$_REQUEST['cvv']."', '".$id."','null');";
            $con -> query($sql);
            echo "<h1>Dear ".$_REQUEST['name'].",<br> your oder is on the way.<br> You can track your order on the homepage.<br>Your order id is ".$id."</h1>";
        }
    ?>


</body>
</html>