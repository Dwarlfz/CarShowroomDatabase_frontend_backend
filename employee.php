<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
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
    <h1>New Employee</h1>
    <a href="logout.php" class="btn btn-warning">Logout</a>
    <div class="container">
        <?php
        if (isset($_POST["enter"])) {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $empid = $_POST["empid"];
            $position = $_POST["position"];
            $salary = $_POST["salary"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $phno = $_POST["phno"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $country = $_POST["country"];
            $poscode = $_POST["poscode"];
            $sql = 'INSERT INTO employee (Fname, Lname, Empid, Position, Salary, DOB, Gender, PHnum, City, State, Country, `Postal code`) VALUES ("'.$fname.'", "'.$lname.'", "'.$empid.'", "'.$position.'", "'.$salary.'", "'.$dob.'", "'.$gender.'", "'.$phno.'", "'.$city.'", "'.$state.'", "'.$country.'", "'.$poscode.'")';
            mysqli_query($conn, $sql);
            echo("Sucesfully entered");
        }
        ?>
        <form action="employee.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="First Name:" name="fname" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Last Name:" name="lname" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" placeholder="Employee ID:" name="empid" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Position:" name="position" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" placeholder="Salary:" name="salary" class="form-control">
            </div>
            <div class="form-group">
                <input type="date" placeholder="DOB:" name="dob" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Gender:" name="gender" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" placeholder="Phone number:" name="phno" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="City:" name="city" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="State:" name="state" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Country:" name="country" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" placeholder="Postal code:" name="poscode" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="enter" name="enter" class="btn btn-primary">
                <a href="logout.php" class="btn btn-warning">Logout</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
