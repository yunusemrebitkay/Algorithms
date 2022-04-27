<?php

if(isset($_POST['submit'])){
    $string = $_POST['string'];
    $result = calculateAllOp($string);
}

function calculateAllOp($str){
  $totalLetter = 0;
  $totalDigit = 0;

  for($i=0; $i<strlen($str); $i++){
      if(is_numeric($str[$i])){
          $totalDigit++;
      }else{
          $totalLetter++;
      }
  }

  return "The string value you entered contains a total of $totalLetter letters, a total of $totalDigit numbers.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="string">String</label>
      </div>
      <div class="col-25">
        <input type="text" name="string" placeholder="Please enter the string..." required>
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