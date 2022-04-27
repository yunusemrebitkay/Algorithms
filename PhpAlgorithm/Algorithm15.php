<?php

if(isset($_POST['submit'])){
    $conductive = $_POST['conductive'];
    $resistance = $_POST['resistance'];
    $result = calculateVoltage($conductive,$resistance);
}

function calculateVoltage($conductive,$resistance){
    $voltage = $conductive * $resistance;
    return "Voltage according to the values you entered: $voltage";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="conductive">Conductive</label>
      </div>
      <div class="col-25">
        <input type="text" name="conductive" placeholder="Please enter the Conductive..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="resistance">Resistance</label>
      </div>
      <div class="col-25">
        <input type="text" name="resistance" placeholder="Please enter the Resistance..." required>
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