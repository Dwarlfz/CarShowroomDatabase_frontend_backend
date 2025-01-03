<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: home.php");
   exit();
}
?>
<?php
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
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>

        <h2>Car Company</h2>
        <pre><a href="employee.php" class="btn btn-warning">Enter new employee</a></pre>
        <pre><a href="customer.php" class="btn btn-warning">Retrieve customer details</a></pre>
        <pre><a href="insert_customer.php" class="btn btn-warning">Enter new customer and order</a><br></pre>
        <pre><a href="instock.php" class="btn btn-warning">Add Car to Stock</a><br></pre>

        <a href="query.php" class="btn btn-warning">Ask your query</a>
    </div>
</body>
</html>
