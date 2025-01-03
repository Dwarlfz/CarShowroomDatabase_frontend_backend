<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $queryOption = $_POST['queryOption'];
    $result = null;

    switch ($queryOption) {
        case 'highest_price':
            $sql = "SELECT `car name`, MAX(`price`) AS max_price
                    FROM `instock`
                    GROUP BY `car name`";
            $result = $conn->query($sql);
            break;
        case 'select_employee':
            $sql = "SELECT `Empid`, `Fname`, `Lname`, `Position`, `Salary`, `City`, `State`, `Country`
                    FROM `employee`";
            $result = $conn->query($sql);
            break;
        case 'select_customer':
            $sql = "SELECT `CUSTOMERID`, `Fname`, `Lname`, `Email`, `PHnum`, `CITY`, `STATE`, `COUNTRY`, `POSTALCODE`
                    FROM `customer`";
            $result = $conn->query($sql);
            break;
        case 'select_orders':
            $sql = "SELECT `order id`, `CAR_NAME`, `CAR_MODEL`, `CAR_COLOR`, `CAR_ID`, `amount`, `TAX`, `delivery fee`, `ORDER_DATE`, `delivery date`, `total amount`
                    FROM `orders`";
            $result = $conn->query($sql);
            break;
        case 'select_instock':
            $sql = "SELECT `carid`, `car name`, `car model`, `car color`, `price`
                    FROM `instock`";
            $result = $conn->query($sql);
            break;
        case 'select_transactions':
            $sql = "SELECT `transid`, `customerid`, `orderid`, `TRANSACTION_DATE`
                    FROM `transactions`";
            $result = $conn->query($sql);
            break;
        case 'employee_above_avg_salary':
            $sql = "SELECT `Empid`, `Fname`, `Lname`, `Position`, `Salary`
                    FROM `employee`
                    WHERE `Salary` > (SELECT AVG(`Salary`) FROM `employee`)";
            $result = $conn->query($sql);
            break;
        case 'employee_max_salary':
            $sql = "SELECT `Empid`, `Fname`, `Lname`, `Position`, `Salary`
                    FROM `employee`
                    WHERE (`Position`, `Salary`) IN (SELECT `Position`, MAX(`Salary`) FROM `employee` GROUP BY `Position`)";
            $result = $conn->query($sql);
            break;
        case 'customer_amount_paid':
            $sql = "SELECT CONCAT(`customer`.`Fname`, ' ', `customer`.`Lname`) AS name, `transactions`.`orderid`, `orders`.`total amount`
                    FROM `customer`
                    INNER JOIN `transactions` ON `customer`.`CUSTOMERID` = `transactions`.`customerid`
                    INNER JOIN `orders` ON `transactions`.`orderid` = `orders`.`order id`";
            $result = $conn->query($sql);
            break;
        case 'cars_not_sold':
            $sql = "SELECT `carid`, `car name`, `car model`, `car color`, `price`
                    FROM `instock`
                    WHERE `car model` NOT IN (SELECT DISTINCT `CAR_MODEL` FROM `orders`)";
            $result = $conn->query($sql);
            break;
        case 'employee_remarks':
            $sql = "SELECT `Empid`, CONCAT(`Fname`, ' ', `Lname`) AS full_name, `Position`, `Salary`,
                    CASE 
                        WHEN `Salary` > (SELECT AVG(`Salary`) FROM `employee`) THEN 'HIGHER THAN AVERAGE'
                        ELSE 'LOWER THAN AVERAGE' 
                    END AS remarks 
                    FROM `employee`";
            $result = $conn->query($sql);
            break;
        case 'sales_above_avg':
            $sql = "SELECT `CAR_MODEL`, SUM(`amount`) AS total_sales
                    FROM `orders`
                    GROUP BY `CAR_MODEL`
                    HAVING total_sales > (SELECT AVG(`amount`) FROM `orders`)";
            $result = $conn->query($sql);
            break;
        case 'salary_increment_bangalore':
            $sql = "UPDATE `employee` E1 
                    SET `Salary` = (SELECT (MAX(`Salary`) * 1.1) 
                                    FROM `employee` E2 
                                    WHERE E1.`Position` = E2.`Position`)";
            if ($conn->query($sql) === TRUE) {
                echo "Salary updated successfully.";
            } else {
                echo "Error updating salary: " . $conn->error;
            }
            $result = false;
            break;
        case 'total_sales_per_car':
            $sql = "SELECT `CAR_ID`, SUM(`total amount`) AS total_sales_per_car 
                    FROM `orders`
                    GROUP BY `CAR_ID`";
            $result = $conn->query($sql);
            break;
        case 'avg_sales':
            $sql = "SELECT CAST(AVG(total_sales_per_car) AS SIGNED) AS avg_sales
                    FROM (SELECT `CAR_ID`, SUM(`amount`) AS total_sales_per_car 
                          FROM `orders` 
                          GROUP BY `CAR_ID`) AS subquery";
            $result = $conn->query($sql);
            break;
        case 'car_sales_above_avg':
            $sql = "WITH total_sales AS (
                        SELECT `CAR_ID`, SUM(`amount`) AS total_sales_per_car 
                        FROM `orders`
                        GROUP BY `CAR_ID`
                    ), 
                    avg_sales AS (
                        SELECT AVG(total_sales_per_car) AS avg_sales_for_all_cars 
                        FROM total_sales
                    ) 
                    SELECT `CAR_ID`, total_sales_per_car 
                    FROM total_sales ts 
                    JOIN avg_sales av ON ts.total_sales_per_car > av.avg_sales_for_all_cars";
            $result = $conn->query($sql);
            break;
        case 'most_expensive_car':
            $sql = "SELECT `car name`, `car model`, MAX(`price`) AS max_price 
                    FROM `instock`
                    GROUP BY `car name`, `car model`";
            $result = $conn->query($sql);
            break;
        case 'first_2_employees_per_position':
            $sql = "SELECT `Empid`, `Fname`, `Lname`, `Position`, `Salary`, RN 
                    FROM (
                        SELECT `Empid`, `Fname`, `Lname`, `Position`, `Salary`, 
                               ROW_NUMBER() OVER (PARTITION BY `Position` ORDER BY `Salary` DESC) AS RN 
                        FROM `employee`
                    ) AS subquery 
                    WHERE RN <= 2";
            $result = $conn->query($sql);
            break;
        case 'top_sales_employee':
            $sql = "SELECT `Empid`, `Fname`, `Lname`, `Position`, `Salary`, RNK 
                    FROM (
                        SELECT `Empid`, `Fname`, `Lname`, `Position`, `Salary`, 
                               ROW_NUMBER() OVER (PARTITION BY `Position` ORDER BY `Salary` DESC) AS RNK 
                        FROM `employee`
                        WHERE `Position` IN ('Sales Associate', 'Sales Manager')
                    ) AS subquery 
                    WHERE RNK = 1";
            $result = $conn->query($sql);
            break;
        case 'employee_salary_comparison':
            $sql = "SELECT E.*, 
                           LAG(`Salary`) OVER (PARTITION BY `Position` ORDER BY `Empid`) AS prev_salary, 
                           CASE 
                               WHEN E.`Salary` > LAG(`Salary`) OVER (PARTITION BY `Position` ORDER BY `Empid`) THEN 'HIGHER THAN PREVIOUS EMPLOYEE' 
                               WHEN E.`Salary` < LAG(`Salary`) OVER (PARTITION BY `Position` ORDER BY `Empid`) THEN 'LOWER THAN PREVIOUS EMPLOYEE' 
                               WHEN E.`Salary` = LAG(`Salary`) OVER (PARTITION BY `Position` ORDER BY `Empid`) THEN 'SAME AS PREVIOUS EMPLOYEE' 
                           END AS sal_range 
                    FROM `employee` E";
            $result = $conn->query($sql);
            break;
            

        case 'select_dealers':
            $sql = "SELECT * FROM dealers;";
            $result = $conn->query($sql);
            break;
        
        case 'select_deal_order':
            $sql = "SELECT * FROM deal_order;";
            $result = $conn->query($sql);
            break;
            
        default:
            $result = "Invalid query option selected.";

            
    }

        }
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="querystyles.css">
    <title>Query Page</title>
</head>
<body>
    <div class="container">
        <h1>Query Page</h1>
        <form method="post" action="">
            <select name="queryOption" class="form-select" aria-label="Default select example">
                <option value="highest_price">Find Highest Selling Price for Each Car Brand</option>
                <option value="select_employee">Select All Employees</option>
                <option value="select_customer">Select All Customers</option>
                <option value="select_orders">Select All Orders</option>
                <option value="select_instock">Select All Instock</option>
                <option value="select_transactions">Select All Transactions</option>
                <option value="employee_above_avg_salary">Employees with Salary Above Average</option>
                <option value="employee_max_salary">Employees with Max Salary by Position</option>
                <option value="customer_amount_paid">Customer Full Name and Amount Paid</option>
                <option value="cars_not_sold">Cars Not Yet Sold</option>
                <option value="employee_remarks">Employees with Salary Remarks</option>
                <option value="sales_above_avg">Sales of Car Models Above Average</option>
                <option value="salary_increment_bangalore">Increment Salary for Bangalore Employees</option>
                <option value="total_sales_per_car">Total Sales Per Car</option>
                <option value="avg_sales">Average Sales Per Car</option>
                <option value="car_sales_above_avg">Car Sales Above Average</option>
                <option value="most_expensive_car">Most Expensive Car by Model</option>
                <option value="first_2_employees_per_position">First 2 Employees Per Position</option>
                <option value="top_sales_employee">Top Sales Employee</option>
                <option value="employee_salary_comparison">Employee Salary Comparison</option>
                <option value="select_dealers">Select All dealers</option>
                <option value="select_deal_order">Select All deal order</option>


                <!-- <option value="customer_with_multiple_orders">Customers with Multiple Orders</option>
                <option value="employee_cars_sold">Number of Cars Sold by Employees</option>
                <option value="employee_salary_increment">Increment Salary for Employees with Above Average Sales</option> -->
            </select>
            <button type="submit" class="btn btn-primary mt-3">Submit Query</button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $result): ?>
            <h2>Query Results</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <?php 
                        // Display table headers based on the first row of the result set
                        if ($result->num_rows > 0) {
                            $fields = $result->fetch_fields();
                            foreach ($fields as $field) {
                                echo "<th>" . htmlspecialchars($field->name) . "</th>";
                            }
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <?php foreach ($row as $cell): ?>
                                    <td><?php echo htmlspecialchars($cell); ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="<?php echo count($fields); ?>">No results found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && !$result): ?>
            <h2>No results found or query executed successfully.</h2>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
