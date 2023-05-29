<?php

require_once "config.php";

$sql="SELECT * from record";
$query=mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Medical Report System</title>
</head>
<body>
    <div class="container center_text">
        <header class="bg padding">
            <h1>MEDICAL REPORT SYSTEM</h1>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo excepturi voluptas, hic, blanditiis quos minus nobis similique accusantium est, odit fugit. Laborum officiis deleniti modi atque accusantium aliquam maiores.</p>
        </header>

        <div class="nav padding red_text">
            <h4>Select the Entry for bill printing</h4>
        </div>

        <div class="Entries">
            
            
            <table>
  <tr>
    <th>ID</th>
    <th>Name / Age</th>
    <th>Disease</th>
    <th>Report</th>
  </tr>
  <?php
                while($result= mysqli_fetch_array($query)){
            ?>
  <a href="Bill.php/id=<?php echo $result['id'] ?>">
  <tr>
        <td><?php echo $result['id'] ?></td>
        <td><?php echo $result['Name']." / ".$result['Age'] ?></td>
        <td><?php echo $result['Disease'] ?></td>
        <td><a href="Report.php?id=<?php echo $result['id'] ?>">View Report</a></td>
  </tr>
  </a>
  <?php
            }
            ?>
</table>

            
        </div>
    </div>
</body>
</html>