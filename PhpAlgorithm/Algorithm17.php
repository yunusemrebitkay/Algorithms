<?php

if(isset($_POST['submit'])){
    $regID = $_POST['regID'];
    $workHours = $_POST['workHours'];
    $hourlyWage = $_POST['hourlyWage'];

    $result = calculateSalary($regID,$workHours,$hourlyWage);
}

function calculateSalary($Id,$workHours,$hourlyWage){
    $salary = $workHours * $hourlyWage;
    return "The salary of the employee with registration number $Id is $$salary.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 17</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="regID">Registration ID</label>
      </div>
      <div class="col-25">
        <input type="text" name="regID" placeholder="Please enter the registration id...." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="workHours">Working Hours</label>
      </div>
      <div class="col-25">
        <input type="text" name="workHours" placeholder="Please enter the working time...." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="hourlyWage">Hourly Wage</label>
      </div>
      <div class="col-25">
        <input type="text" name="hourlyWage" placeholder="Please enter your hourly rate....." required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
    <div class="row">
        <div class="result">
            <p><?php echo $result; ?></p>
        </div>
    </div>
  </form>
</div>
</body>
</html>