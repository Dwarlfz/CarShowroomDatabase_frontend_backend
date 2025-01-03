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
        <h1>Orders</h1>
        <a href="index.php" class="btn btn-warning">Return to Dashboard</a>

        <div class="container">
        <?php
        if (isset($_POST["enter"])) {
           $orderid = $_POST["orderid"];
           $transid = $_POST["transid"];
           $carname = $_POST["carname"];
           $carmodel = $_POST["carmodel"];
           $carcolor = $_POST["carcolor"];
           $carid = $_POST["carid"];
           $amount = $_POST["amount"];
           $tax = $_POST["tax"];
           $deliveryfee = $_POST["deliveryfee"];
           $totalamount = $_POST["totalamount"];
           $orderdate = $_POST["orderdate"];
           $deliverydate = $_POST["deliverydate"];

           $sql = 'INSERT INTO `orders` (`transid`, `car name`, `car model`, `car color`, `car id`, `amount`, `tax`, `deliver fee`, `total amount`, `order date`, `delivery date`) 
                   VALUES ("'.$transid.'", "'.$carname.'", "'.$carmodel.'", "'.$carcolor.'", "'.$carid.'", "'.$amount.'", "'.$tax.'", "'.$deliveryfee.'", "'.$totalamount.'","'.$orderdate.'","'.$deliverydate.'")';
           mysqli_query($conn, $sql);
           echo"you have registered";
        }
        ?>
      <form action="orders.php" method="post">
        <div class="form-group">
            <input type="number" placeholder="Order ID:" name="orderid" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" placeholder="Transaction ID:" name="transid" class="form-control">
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
            <input type="number" placeholder="Car ID:" name="carid" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" placeholder="Amount:" name="amount" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" placeholder="Tax:" name="tax" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" placeholder="Delivery Fee:" name="deliveryfee" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" placeholder="Total Amount:" name="totalamount" class="form-control">
        </div>
        <div class="form-group">
            <input type="date" placeholder="Order date:" name="orderdate" class="form-control">
        </div>
        <div class="form-group">
            <input type="date" placeholder="Delivery Date:" name="deliverydate" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="enter" name="enter" class="btn btn-primary">
            <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
      </form>
    </div>
</body>
</html>

