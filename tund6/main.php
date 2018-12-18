<?php
  require("functions.php");
  
  
  //kui pole sisselogitud
  if(!isset($_SESSION["userId"])){
	header("Location: index_1.php");
    exit();	
  }
  
  //väljalogimine
  if(isset($_GET["logout"])){
	session_destroy();
	header("Location: index_1.php");
	exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Pealeht</title>
  </head>
  <body>
    <h1>Pealeht</h1>
	<p>See leht on valminud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames ja ei oma mingisugust, mõtestatud või muul moel väärtuslikku sisu.</p>
	<hr>
	<p>Olete sisse loginud nimega: <?php echo $_SESSION["firstName"] ." " .$_SESSION["lastName"]; ?></p>
	<ul>
	  <li><a href="?logout=1">Logi välja!</a></li>
	  <li><a href="validatemsg.php">Valideeri anonüümseid sõnumeid!</a></li>
	</ul>
	
  </body>
</html>