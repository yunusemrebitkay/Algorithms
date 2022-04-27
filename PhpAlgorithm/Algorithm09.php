<?php

if(isset($_POST['submit'])){
    $initial = $_POST['initialValue'];
    $end = $_POST['endValue'];
    $arrayPrimes = calculatePrime($initial,$end);
}

function calculatePrime($start,$end){
  $primes = array();

  while($start < $end){
    $blFlag = 0;
    if($start<=1){
        ++$start;
        continue;
    }

    for($i = 2; $i<= $start/2; ++$i){
        if($start % 2 == 0){
            $blFlag = 1;
            break;
        }
    }

    if($blFlag == 0 ){
        array_push($primes,$start);
    }
    ++$start;  
  }
  return $primes;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="initialValue">Initial Value</label>
      </div>
      <div class="col-25">
        <input type="text" name="initialValue" placeholder="Please enter the initial value..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="endValue">Ending value</label>
      </div>
      <div class="col-25">
        <input type="text" name="endValue" placeholder="Please enter the ending value...." required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
    <div class="row">
        <div class="result">
            <p>
                <?php foreach($arrayPrimes as $prime){
                    echo $prime." - ";
                } ?>
            </p>
        </div>
    </div>
  </form>
</div>
</body>
</html>