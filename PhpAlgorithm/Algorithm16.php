<?php

if(isset($_POST['submit'])){
    $salary = $_POST['salary'];
    $children = $_POST['children'];
    $result = calculateSalary($salary,$children);
}

function calculateSalary($salary,$children){

    if($children == 1){
        $salaryReq = $salary + ($salary * 0.05);
    }else if($children == 2){
        $salaryReq = $salary + ($salary * 0.10);
    }else if($children > 2){
        $salaryReq = $salary + ($salary * 0.15);
    }
    return "Salary you should receive: $salaryReq";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 16</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="salary">Salary</label>
      </div>
      <div class="col-25">
        <input type="text" name="salary" placeholder="Please enter your salary..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="children">Number of Children</label>
      </div>
      <div class="col-25">
        <input type="text" name="children" placeholder="Please enter the number of your children..." required>
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