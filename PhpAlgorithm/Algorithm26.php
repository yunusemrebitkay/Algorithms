<?php

if(isset($_POST['submit'])){
    $firstInput = $_POST['fInput'];
    $secondInput = $_POST['sInput'];
    $operator = $_POST['op'];

    $result = calculate($firstInput,$secondInput,$operator);
}

function calculate($first,$second,$operator){
    switch($operator){
        case "+":
            return "The selected operation is the addition operation and the result is ". addition($first,$second); 
            break;
        case "-":
            return "The selected operation is the subtraction operation and the result is ". subtraction($first,$second); 
            break;
        case "*":
            return "The selected operation is the multiplication operation and the result is ". multiplication($first,$second); 
            break;
        case "/":
            return "The selected operation is the division operation and the result is ". division($first,$second); 

            break;
    }
}

function addition($x,$y){
    return $x+$y;
}

function subtraction($x,$y){
    return $x-$y;
}

function multiplication($x,$y){
    return $x*$y;
}

function division($x,$y){
    return $x/$y;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 26</title>
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
      <div class="col-25">
        <label for="op">Operator</label>
      </div>
      <div class="col-25">
        <input type="text" name="op" placeholder="Please enter the operator. Your options are +,-,*,/,%..." required>
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