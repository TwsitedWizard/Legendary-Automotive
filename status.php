<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 4.3.1 CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- FontAwesome 4.7.0 CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./styleStatus.css" />
    <title>Your Order Status</title>
  </head>
<body>
    <img src="./img3/lgm-depositphotos-bgremover.png" style="position:relative; left:20%; top:5%">
    <?php
        include('connect.php');

        $id = $_POST['id'];
        $car = $_POST['car'];

        $id = stripcslashes($id);  
        $car = stripcslashes($car);  
        $id = mysqli_real_escape_string($con, $id);  
        $car = mysqli_real_escape_string($con, $car);  

        $sql = "select *from payment2 where orderid = '$id'";  
        $result = mysqli_query($con, $sql);
        $res = mysqli_query($con,"select name from payment2 where orderid = '$id'");
        $name = mysqli_fetch_row($res);
        $update = "update payment2 set carmodel='$car' where orderid='$id'";
        $con->query($update);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

        if($count == 1){  
            //header("Location: dels.php");
            //echo "<h1><center> Login successful </center></h1>";  
         echo   "<div class=".'"container px-1 px-md-4 py-5 mx-auto"'.">";
         echo       "<div class=".'"card"'.">";
         echo           "<div class=".'"row d-flex justify-content-between px-3 top"'.">";
         echo               "<div class=".'"d-flex"'.">";
         echo                   "<h5>";
         echo                       "ORDER";
         echo                       "<span style=".'"color: red;"'.">'$id'</span>";
                          echo  "</h5>";
                       echo "</div>";
                   echo "<div class=".'"d-flex flex-column text-sm-right"'.">";
                   echo     "<p class=".'"mb-0"'.">";
                   echo         "Buyer: <span style=".'"color: red;"'.">'$name[0]'</span>";
                   echo     "</p>";
                        echo"<p>";
                            echo"Your Car: <span style=".'"color: red;"'.">'$car'</span>";
                        echo"</p>";
                    echo"</div>";
                echo"</div>";
                echo "<div class=".'"row d-flex justify-content-center"'.">";
                echo    "<div class=".'"col-12"'.">";
                        echo"<ul id=".'"progressbar"'." class=".'"text-center"'.">";
                           echo "<li class=".'"active step0"'."></li>";
                           echo "<li class=".'"active step0"'."></li>";
                           echo "<li class=".'"active step0"'."></li>";
                           echo "<li class=".'"step0"'."></li>";
                        echo "</ul>";
                    echo "</div>";
                echo "</div>";
                echo "<div class=".'"row justify-content-between top"'.">";
                   echo "<div class=".'"row d-flex icon-content"'.">";
                    echo    "<img src=".'"./logoIMG/CheckList.png"'."class=".'"icon"'." />";
                    echo    "<div class=".'"d-flex flex-column"'.">";
                    echo        "<p class=".'"font-weight-bold"'.">Order <br />Processed</p>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=".'"row d-flex icon-content"'.">";
                    echo "<img src=".'"./logoIMG/Delivery.png"'."class=".'"icon"'." />";
                    echo    "<div class=".'"d-flex flex-column"'.">";
                        echo    "<p class=".'"font-weight-bold"'.">Order <br />Shipped</p>";
                        echo "</div>";
                    echo "</div>";
                echo "<div class=".'"row d-flex icon-content"'.">";
                echo    "<img src=".'"./logoIMG/Shipping.png"'."class=".'"icon"'." />";
                 echo   "<div class=".'"d-flex flex-column"'.">";
                      echo  "<p class=".'"font-weight-bold"'.">Order <br />En Route</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div class=".'"row d-flex icon-content"'.">";
                echo    "<img src=".'"./logoIMG/Home.png"'." class=".'"icon"'." />";
                   echo "<div class=".'"d-flex flex-column"'.">";
                    echo    "<p class=".'"font-weight-bold"'.">Order <br />Arrival</p>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        echo "</div>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
        
    ?>
</body>
</html>