<?php
$one = '';
$two = '';
$three = '';
$four = '';
$five = '';
$to_value = '';

if($_POST['submit']) {
  $one = $_POST['one'];
  $two = $_POST['two'];
  $three = $_POST['three'];
  $four = $_POST['four'];
  $five = $_POST['five'];
  exec("g++ main.cpp -O3 -o main.exe 2>&1");
  exec("./main.exe $one $two $three $four $five 2>&1", $output);
  $to_value = $output[0];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Average of Five</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="main-content">
      <div class="title">Average of Five</div>
      <form action="" method="post">
          <input type="text" placeholder = "Type number" name="one" value="<?php echo $one; ?>" />&nbsp;
          <input type="text" placeholder = "Type number" name="two" value="<?php echo $two; ?>" />&nbsp;
          <input type="text" placeholder = "Type number" name="three" value="<?php echo $three; ?>" />&nbsp;
          <input type="text" placeholder = "Type number" name="four" value="<?php echo $four; ?>" />&nbsp;
          <input type="text" placeholder = "Type number" name="five" value="<?php echo $five; ?>" />&nbsp;
          <input type="submit" class="myButton" name="submit" value="Submit" />
          <input type="text" placeholder = "Result" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
      </form>
      <div class="bottom">
        Created by Gabor Csapo
        <br>
        <a href = "https://github.com/gaborcsapo/GlossyBox-Websites">Source</a>
      </div>
    </div>
  </body>
</html>
