<?php

if(isset($_POST['submit'])){
    $number = $_POST['num'];
    $result = armstrong($number);  
}

function armstrong($num){
    $temp = $num;
    $sum = 0;

    // If we don't round down with floor, the while loop won't break.
    while(floor($num)){
        $r = $num % 10;
        $sum = $sum + ($r**3);
        $num /= 10;
    }

    if($sum == $temp){
        return "$temp is a armstrong number.";
    }else{
        return "$temp isn't a armstrong number.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 30</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="num">Number</label>
      </div>
      <div class="col-25">
        <input type="text" name="num" placeholder="Please enter the number..." required>
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