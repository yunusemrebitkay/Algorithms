<?php

if(isset($_POST['submit'])){
    $midterm = $_POST['midterm'];
    $final = $_POST['final'];
    $result = calculateAverage($midterm,$final);
}

function calculateAverage($midterm,$final){
  $average = ($midterm * 0.3) + ($final * 0.7);

  if($average > 60){
    return "Congratulations, you have successfully passed $average.";
  }else{
    return "Sorry, your semester average of $average is below 60.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="midterm">Midterm</label>
      </div>
      <div class="col-25">
        <input type="text" name="midterm" placeholder="Please enter your midterm exam grade..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="final">Final</label>
      </div>
      <div class="col-25">
        <input type="text" name="final" placeholder="Please enter your final exam grade..." required>
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