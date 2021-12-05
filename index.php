<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Dice rolling!</title>
  </head>
  <body>
<h1>Dice roller!</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="dice_number"><h2>How many dice are you rolling?</h2></label>
    <input method="get" type="number" min="1" max="20" value="<?php echo isset($_POST['myField1']) ? $_POST['myField1'] : '' ?>" id="dice_number" name="dice_number"></input>
  <br>
  <label for="dice_type"><h2>What type of dice do you want?</h2></label>
    <select method="get" type="number" name="dice_type">
    <option id="6d" value="6">6</option>
    <option id="8d" value="8">8</option>
    <option id="10d" value="10">10</option>
    <option id="16d" value="16">16</option>
    <option id="20d" value="20">20</option>
  </select>
  <br>
    <button id="roll" method="get" type="submit" class="btn justify-content-center" name="submit">Roll!</button>
</form>
<br>
</body>

<div>
<?php
if(isset($_GET["submit"])) {
  $dice_num = $_GET["dice_number"];
  $dice_type = $_GET["dice_type"];
if ($dice_num <= 0) {
  echo "You cannot roll no dice and expect random numbers! Duh!";
} else {
  for($i = 0; $i < $dice_num; $i++){?>
    <?php echo rand(1, $dice_type); ?>
  <?php
    }
  }
}
?>
</div>
</html>
