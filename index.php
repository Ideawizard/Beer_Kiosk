<!DOCTYPE html>
<html lang="en">

<link href="style.css" rel="stylesheet">
<script type="text/javascript" src="AccordionJS.js"></script>

<head>
    <title>Beer Kiosk</title>
    <h1> Beer Kiosk </h1>
</head>
<body>
<?php
if(isset($_REQUEST["name"])){



}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>

<div class="accoridon">

  <button class="accordion">Special 1</button>
 <div class="panel">
   <p>Our special for today</p>
 </div>

 <button class="accordion">Special 2</button>
 <div class="panel">
   <p>Our special from yesterday.</p>
 </div>

 <button class="accordion">Special 3</button>
 <div class="panel">
   <p>Our special the day before</p>
 </div>

</div>
</body>

<footer>

  <a href="adminpage.php">admin page</a>

</footer>
</html>
