<?php

if(isset($_POST['submit'])){
    $value = $_POST['value'];
    $result = calculateAllOp($value);
}

function calculateAllOp($num){
  $totalOdd = 0;
  $multOdd = 1;
  $squareEven = 0;

  for($i=1; $i<=$num; $i++){
      if($i % 2 == 0){
          $squareEven = $i ** 2;
      }else{
          $totalOdd += $i;
          $multOdd *= $i;
      }
  }

  return "Between 1 and 15 values you enter
  <br> - Sum of squares of all even numbers: $squareEven
  <br> - Sum of odd numbers $totalOdd:
  <br> - And product: $multOdd"; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="value">Value</label>
      </div>
      <div class="col-25">
        <input type="text" name="value" placeholder="Please enter the value of n..." required>
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