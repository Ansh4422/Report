<?php

require_once "config.php";


$id = $_GET['id'];

$sql="SELECT * FROM record WHERE id='$id'";
$query=mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Report</title>
</head>
<body>
<h1 class="container center_text padding bg">REPORT</h1>

    <div class="report container padding">
      
        <div class="upper">
            <div class="right border">
                <?php
                while($result = mysqli_fetch_array($query)){
                ?>
                    <h4>Name : <?php echo $result['Name'] ?></h4>
                    <h4>Father Name : <?php echo $result['FatherName'] ?></h4>
                    <h4>Gender/ Age : <?php echo $result['Gender']." /".$result['Age'] ?></h4>
                
            </div>

            <div class="left border">
               
                    <h4>Disease : <?php echo $result['Disease'] ?></h4>
                    <h4>Address : <?php echo $result['Address'] ?></h4>
                    <h4>Date : <?php echo $result['Time']?></h4>
                
            </div>

        </div>

        <div class="lower padding">
                <h3>Disease Description: </h3>
                <br>
                <p><?php echo $result['Description'] ?></p>
        </div>
        <?php
            }
        ?>

        <footer class="container padding center_text">
            Designed by: Ansh Mourya
        </footer>
    </div>
</body>
</html>