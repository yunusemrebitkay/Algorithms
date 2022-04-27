<?php

if(isset($_POST['submit'])){
    $time = $_POST['time'];
    $result = calculateTime($time);
}

function calculateTime($second){
  $hours = 0;

  $minutes = intval($second / 60,0);
  $second = $second % 60;

  if($minutes >= 60){
      $hours = intval($minutes / 60);
      $minutes = $minutes % 60;
  }

  return "The hourly equivalent of the value $second you entered is <br> $hours:$minutes:$second";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="time">Time</label>
      </div>
      <div class="col-25">
        <input type="text" name="time" placeholder="Please write the time in seconds..." required>
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