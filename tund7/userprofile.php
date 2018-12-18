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
  
  $messages = readallvalidatedmessagesbyuser();
  
?>