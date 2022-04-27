<?php

if(isset($_POST['submit'])){
    $arrayNumbers = array(23,53,56,54,32,543,321);
    $result = findMaxValue($arrayNumbers);
}

function findMaxValue($array){
    $max = max($array);
    return "The largest value in the array: $max";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 24</title>
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