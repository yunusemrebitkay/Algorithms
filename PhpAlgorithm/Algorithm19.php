<?php

if(isset($_POST['submit'])){
    $firstGrade = $_POST['fGrade'];
    $secondGrade = $_POST['sGrade'];
    $thirdGrade = $_POST['tGrade'];
    $result = calculateGrade($firstGrade,$secondGrade,$thirdGrade);  
}

function calculateGrade($fGrade,$sGrade,$tgrade){
    $average = ($fGrade+$sGrade+$tgrade)/3;
    $letterEq = "";
    $fivePointEq = 0;

    switch(True){
        case $average > 84:
            $letterEq = "A";
            $fivePointEq = 5;
            break;
        case $average > 69:
            $letterEq = "B";
            $fivePointEq = 4;
            break;
        case $average > 54:
            $letterEq = "C";
            $fivePointEq = 3;
            break;
        case $average > 44;
            $letterEq = "D";
            $fivePointEq = 2;
            break;
        case $average > 24;
            $letterEq = "E";
            $fivePointEq = 1;
            break;
        default:
            $letterEq = "F";
            $fivePointEq = 0;
            break;
    }

    return "Average of your courses: $average 
    <br> The five-point equivalent of your grade: $fivePointEq
    <br> The letter equivalent of the grade in the system: $letterEq";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 19</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fGrade">First Grade</label>
      </div>
      <div class="col-25">
        <input type="text" name="fGrade" placeholder="Please enter your first grade..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sGrade">Second Grade</label>
      </div>
      <div class="col-25">
        <input type="text" name="sGrade" placeholder="Please enter your second grade..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="tGrade">Third Grade</label>
      </div>
      <div class="col-25">
        <input type="text" name="tGrade" placeholder="Please enter your third grade..." required>
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