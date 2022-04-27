<?php

if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $result = calculateRoots($a,$b,$c);  
}

function calculateRoots($a,$b,$c){
    $delta = ($b**2) - (4*$a*$c);

    if($delta > 0){
        $root1 = ((-$b + sqrt($delta)) / (2*$a));
        $root2 = ((-$b - sqrt($delta)) / (2*$a));

        return "The equation has two roots. First root: $root1 second root: $root2";
    }else if($delta == 0){
        $root = -$b / (2*$a);
        return "The equation has a root. Single root: $root";
    }else{
        return "This equation has no real roots!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 20</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="a">Value of A</label>
      </div>
      <div class="col-25">
        <input type="text" name="a" placeholder="Please enter the value of a..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="b">Value of B</label>
      </div>
      <div class="col-25">
        <input type="text" name="b" placeholder="Please enter the value of b..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="c">Value of C</label>
      </div>
      <div class="col-25">
        <input type="text" name="c" placeholder="Please enter the value of c..." required>
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