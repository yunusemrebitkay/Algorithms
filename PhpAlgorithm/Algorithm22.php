<?php

if(isset($_POST['submit'])){
    $month = $_POST['month'];
    $year = $_POST['year'];
    $result = calculateDate($month,$year);  
}

function calculateDate($month,$year){
    $days = 0;
    $arrayDays = array(
        1 => 31,
        2 => 28,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    );

    if($month == 2){
        if(calculateLeapYear($year)){
            $days = 29;
        }else{
            $days = 28;
        }
    }else{
        $days = $arrayDays[$month];
    }

    return "Year you entered: $year,
    <br> The month you entered: $month,
    <br> Number of days based on the data you entered: $days";


}

function calculateLeapYear($year){
    if($year % 4 == 0){
        if($year % 100 == 0){
            if($year % 400 == 0){
                return True;
            }else{
                return False;
            }
        }else{
            return True;
        }
    }else{
        return False;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 22</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
  <div class="row">
      <div class="col-25">
        <label for="month">Value of Month</label>
      </div>
      <div class="col-25">
        <input type="text" name="month" placeholder="Please enter the value of month..." required>
      </div>
    </div>
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