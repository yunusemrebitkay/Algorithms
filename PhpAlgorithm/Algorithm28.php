<?php

if(isset($_POST['submit'])){
    $n = $_POST['n'];
    $arrayFibonnaci = fibonnaci($n);
}

function fibonnaci($n){
    $fib = 1;
    $prevFib = 1;
    $array = array($fib,$prevFib);

    for($i = 2; $i <= $n; $i++){
        $temp = $fib;
        $fib = $fib + $prevFib;
        $prevFib = $temp;
        array_push($array,$fib);
    }
    return $array;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 28</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="n">Value of N</label>
      </div>
      <div class="col-25">
        <input type="text" name="n" placeholder="Please enter the n value..." required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
    <div class="row">
        <div class="result">
            <p>
                <?php foreach($arrayFibonnaci as $fib){
                    echo $fib." \t ";
                } ?>
            </p>
        </div>
    </div>
  </form>
</div>
</body>
</html>