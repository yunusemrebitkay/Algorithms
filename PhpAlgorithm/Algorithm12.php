<?php

if(isset($_POST['submit'])){
    $radius = $_POST['radius'];
    $result = calculateSphere($radius);  
}

function calculateSphere($radius){
  $pi = 3.14;

  $area = 4 * $pi * ($radius ** 2);
  $volume = $pi * ($radius **3) * (4/3);

  $area = round($area,2);
  $volume = round($volume,2);

  return "Area based on the radius value you entered: $area
  <br> Volume based on the radius you entered: $volume";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="radius">Radius</label>
      </div>
      <div class="col-25">
        <input type="text" name="radius" placeholder="Please enter the radius..." required>
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