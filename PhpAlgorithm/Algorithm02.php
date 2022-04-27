<?php

if(isset($_POST['submit'])){
    $character = $_POST['char'];
    $result = controlVowels($character);
}

function controlVowels($str){
  $vowelsArray = array('a','e','i','o','u');

  if(in_array($str,$vowelsArray)){
    return "The '$str' character you enter is a vowel.";
  }else{
    return "The '$str' character you enter is a consonant.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Algorithm 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="char">Character</label>
      </div>
      <div class="col-25">
        <input type="text" name="char" placeholder="Please enter a character..." required>
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