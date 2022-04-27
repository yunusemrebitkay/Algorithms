<?php

if(isset($_POST['submit'])){
    $avgSpeed = $_POST['avgSpeed'];
    $distance = $_POST['distance'];
    $result = calculateTime($avgSpeed,$distance);
}

function calculateTime($avgSpeed,$distance){
    $hours = round($distance / $avgSpeed);
    $minutes = $distance % $avgSpeed;

    return "According to the values you entered, the vehicle will arrive at the destination after $hours hours and $minutes minutes.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 18</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="avgSpeed">Average Speed</label>
      </div>
      <div class="col-25">
        <input type="text" name="avgSpeed" placeholder="Please enter the average speed..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="distance">Distance</label>
      </div>
      <div class="col-25">
        <input type="text" name="distance" placeholder="Please enter the distance..." required>
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