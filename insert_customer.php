<?php
include("data.php");
?>
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>
<?php
$transid = "";
$orderid = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerid = $_POST['customerid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phnum = $_POST['phnum'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postalcode = $_POST['postalcode'];
    $empid = $_POST['empid'];
    $car_name = $_POST['car_name'];
    $car_model = $_POST['car_model'];
    $car_color = $_POST['car_color'];
    $amount = $_POST['amount'];
    $tax = $_POST['tax'];
    $deliver_fee = $_POST['deliver_fee'];
    $total_amount = $_POST['total_amount'];
    $order_date = $_POST['order_date'];
    $delivery_date = $_POST['delivery_date'];

    // Insert customer data
    $sql = "INSERT INTO customer (CUSTOMERID, Fname, Lname, Email, PHnum, CITY, STATE, COUNTRY, POSTALCODE, EMPID)
            VALUES ('$customerid', '$fname', '$lname', '$email', '$phnum', '$city', '$state', '$country', '$postalcode', '$empid')";

    if ($conn->query($sql) === TRUE) {
        // Insert order data
        $order_sql = "INSERT INTO orders (`car name`, `car model`, `car color`, amount, tax, `deliver fee`, `total amount`, `order date`, `delivery date`)
                      VALUES ('$car_name', '$car_model', '$car_color', '$amount', '$tax', '$deliver_fee', '$total_amount', '$order_date', '$delivery_date')";
        
        if ($conn->query($order_sql) === TRUE) {
            $orderid = $conn->insert_id; // Get the last inserted order ID

            // Insert transaction data
            $trans_sql = "INSERT INTO transactions (customerid, orderid)
                          VALUES ('$customerid', '$orderid')";
            
            if ($conn->query($trans_sql) === TRUE) {
                $transid = $conn->insert_id; // Get the last inserted transaction ID
            } else {
                echo "Error: " . $trans_sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $order_sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Customer</title>
    <link rel="stylesheet" href="cust.css">
</head>
<body>
    <div class="container">
        <h1>Insert Customer</h1>
        <form method="post" action="">

            <label for="customerid">CustomerID:</label>
            <input type="text" id="customerid" name="customerid">

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname">

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <label for="phnum">Phone Number:</label>
            <input type="text" id="phnum" name="phnum">

            <label for="city">City:</label>
            <input type="text" id="city" name="city">

            <label for="state">State:</label>
            <input type="text" id="state" name="state">

            <label for="country">Country:</label>
            <input type="text" id="country" name="country">

            <label for="postalcode">Postal Code:</label>
            <input type="text" id="postalcode" name="postalcode">

            <label for="empid">Employee ID:</label>
            <input type="text" id="empid" name="empid">

            <label for="car_name">Car Name:</label>
            <input type="text" id="car_name" name="car_name">

            <label for="car_model">Car Model:</label>
            <input type="text" id="car_model" name="car_model">

            <label for="car_color">Car Color:</label>
            <input type="text" id="car_color" name="car_color">

            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount">

            <label for="tax">Tax:</label>
            <input type="text" id="tax" name="tax">

            <label for="deliver_fee">Delivery Fee:</label>
            <input type="text" id="deliver_fee" name="deliver_fee">

            <label for="total_amount">Total Amount:</label>
            <input type="text" id="total_amount" name="total_amount">

            <label for="order_date">Order Date:</label>
            <input type="date" id="order_date" name="order_date">

            <label for="delivery_date">Delivery Date:</label>
            <input type="date" id="delivery_date" name="delivery_date">

            <input type="submit" value="Submit">
        </form>

        <?php if ($transid && $orderid): ?>
        <div class="success-box">
            <p>Transaction ID: <?php echo $transid; ?></p>
            <p>Order ID: <?php echo $orderid; ?></p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
