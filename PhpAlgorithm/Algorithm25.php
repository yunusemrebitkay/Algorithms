<?php

if(isset($_POST['submit'])){
    $arrayNumbers = array(23,53,56,54,32,543,321);
    $result = calculateMult($arrayNumbers);

}

function calculateMult($array){
    $total = 0;

    for($i=0; $i < count($array); $i++){
      $total += $array[$i] * $i;
    }

    return "The sum of each element of the array multiplied by its index: $total";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 25</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
    <div class="row">
        <div class="row">
        <div class="result">
            <p><?php echo $result; ?></p>
        </div>
    </div>
    </div>
  </form>
</div>
</body>
</html>