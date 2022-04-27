<?php

if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $arrayMultipliers = arrayMult($number);
}

function arrayMult($num){
  $multipliers = array();
  
  for($i=1; $i<=$num; ++$i){
    if($num % $i == 0){
        array_push($multipliers,$i);
    }
  }
  return $multipliers;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="number">Number</label>
      </div>
      <div class="col-25">
        <input type="text" name="number" placeholder="Please enter a number..." required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
    <div class="row">
        <div class="result">
            <p><?php foreach($arrayMultipliers as $mult){
                echo $mult." - ";
            } ?></p>
        </div>
    </div>
  </form>
</div>
</body>
</html>