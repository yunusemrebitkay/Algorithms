<?php

if(isset($_POST['submit'])){
    $arrayNumbers = array(23,53,56,54,32,543,321);
    $result = calculateAverage($arrayNumbers);
}

function calculateAverage($array){
    $average = array_sum($array) / count($array);
    $average = round($average,2);
    return "Average of the array: $average";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 23</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
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