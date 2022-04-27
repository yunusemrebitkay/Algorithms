<?php

if(isset($_POST['submit'])){
    $year = $_POST['year'];
    $result = calculateLeapYear($year);  
}

function calculateLeapYear($year){
    if($year % 4 == 0){
        if($year % 100 == 0){
            if($year % 400 == 0){
                return "The year $year you entered is a leap year.";
            }else{
                return "The year $year you entered isn't a leap year.";
            }
        }else{
            return "The year $year you entered is a leap year.";
        }
    }else{
        return "The year $year you entered isn't a leap year.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 21</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="year">Value of Year</label>
      </div>
      <div class="col-25">
        <input type="text" name="year" placeholder="Please enter the value of year..." required>
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