<?php

if(isset($_POST['submit'])){
    $height = $_POST['height'];
    $baseLength = $_POST['baseLen'];
    $result = calculateArea($height,$baseLength);
}

function calculateArea($height,$baseLen){
  $area =  ($height * $baseLen) / 2;
  return "The area of the triangle based on the values you entered: $area";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="height">Height</label>
      </div>
      <div class="col-25">
        <input type="text" name="height" placeholder="Please enter the height..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="baseLen">Base Length</label>
      </div>
      <div class="col-25">
        <input type="text" name="baseLen" placeholder="Please enter the base length..." required>
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