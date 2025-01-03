<?php
    include("data.php"); 
?>
<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Stocks</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>

        <div class="container">
        <?php
        if (isset($_POST["enter"])) {
           $carid = $_POST["carid"];
           $carname = $_POST["carname"];
           $carmodel = $_POST["carmodel"];
           $carcolor = $_POST["carcolor"];
           $price = $_POST["price"];
           $sql = 'INSERT INTO `instock` (`carid`, `car name`, `car model`, `car color`, `price`) 
                   VALUES ("'.$carid.'", "'.$carname.'", "'.$carmodel.'", "'.$carcolor.'", "'.$price.'")';
           mysqli_query($conn, $sql);
           echo"you have registered";
        }
        ?>
      <form action="instock.php" method="post">
        <div class="form-group">
            <input type="number" placeholder="Car ID:" name="carid" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Car Name:" name="carname" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Car Model:" name="carmodel" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Car Color:" name="carcolor" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" placeholder="Price:" name="price" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="enter" name="enter" class="btn btn-primary">
            <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
      </form>
    </div>
</body>
</html>

