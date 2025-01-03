<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

include("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Customer Details</title>
</head>
<body>
    <div class="container">
        <h1>Customer Details</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
        
        <form action="customer.php" method="post">
            <div class="form-group">
                <input type="number" placeholder="Customer ID" name="customerid" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Search" name="search" class="btn btn-primary">
            </div>
        </form>

        <div class="container mt-4">
        <?php
        if (isset($_POST["search"])) {
            $customerid = $_POST["customerid"];
            $sql = "SELECT * FROM customer WHERE CUSTOMERID = '$customerid'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<h2>Customer Information</h2>";
                echo "Customer ID: " . $row["CUSTOMERID"] . "<br>";
                echo "First Name: " . $row["Fname"] . "<br>";
                echo "Last Name: " . $row["Lname"] . "<br>";
                echo "Email: " . $row["Email"] . "<br>";
                echo "Phone Number: " . $row["PHnum"] . "<br>";
                echo "City: " . $row["CITY"] . "<br>";
                echo "State: " . $row["STATE"] . "<br>";
                echo "Country: " . $row["COUNTRY"] . "<br>";
                echo "Postal Code: " . $row["POSTALCODE"] . "<br>";
                echo "Order ID: " . $row["Order_id"] . "<br>";
                echo "Employee ID: " . $row["EMPID"] . "<br>";
            } else {
                echo "No customer found with ID " . $customerid;
            }
        }
        ?>
        </div>
    </div>
</body>
</html>
