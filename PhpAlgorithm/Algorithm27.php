<?php

if(isset($_POST['submit'])){
    $firstInput = $_POST['fInput'];
    $secondInput = $_POST['sInput'];

    $result = calculate($firstInput,$secondInput);
}

function calculate($first,$second){
    $gcd = 0;
    for($i=1; $i <= $first && $i <= $second; $i++){
        if($first % $i == 0 && $second % $i == 0){
            $gcd = $i;
        }
    }

    $lcm = ($first*$second)/$gcd;

    return "According to the values you entered
    <br> GCD value: $gcd
    <br> LCM value: $lcm";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 27</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fInput">First Input</label>
      </div>
      <div class="col-25">
        <input type="text" name="fInput" placeholder="Please enter the first value..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sInput">Second Input</label>
      </div>
      <div class="col-25">
        <input type="text" name="sInput" placeholder="Please enter the second value..." required>
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