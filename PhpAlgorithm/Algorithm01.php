<?php

if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $result = oddOrEven($number);
}

function oddOrEven($num){
  if($num % 2 == 0){
    return "The number $num you entered is even.";
  }else{
    return "The number $num you entered is odd.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 1</title>
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