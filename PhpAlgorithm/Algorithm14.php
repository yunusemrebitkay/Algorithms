<?php

if(isset($_POST['submit'])){
    $temperature = $_POST['temp'];
    $result = calculateState($temperature);  
}

function calculateState($temp){
    if($temp > 0 && $temp < 100){
        return "The Water is liquid.";
    }else if ($temp <= 0){
        return "The water is solid.";
    }else if ($temp >= 100){
        return "The water is gaseous.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="temp">Temperature</label>
      </div>
      <div class="col-25">
        <input type="text" name="temp" placeholder="Please enter the temperature value of the water..." required>
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