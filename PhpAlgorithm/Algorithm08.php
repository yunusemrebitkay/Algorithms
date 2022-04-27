<?php

if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $result = controlPrime($number);
}

function controlPrime($num){
  $blFlag = 0;

  if($num == 0 || $num == 1){
      $blFlag = 1;
  }

  for($i=2; $i<=$num/2; $i++){
      if($num % $i == 0){
          $blFlag = 1;
          break;
      }
  }

  if($blFlag == 0){
      return "The value $num you entered is prime.";
  }else{
      return "The value $num you entered is not prime.";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 8</title>
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
            <p><?php echo $result; ?></p>
        </div>
    </div>
  </form>
</div>

</body>
</html>