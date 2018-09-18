<?php
	//echo "See on minu esimene PHP!";
	$firstName = "Simone";
	$lastName = "Peterson";
	$dateToday = date("d.m.Y");
	$weekdayNow = date("N");
	$weekdayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
	//echo $weekdayNamesET[1];
	//var_dump ($weekdayNamesET);
	//echo $weekdayNow;  testida, kas mingi väärtus vastab tegelikkusele
	$hourNow = date("G");
	$partOfDay = "";
	if ($hourNow < 8){
		$partOfDay = "varane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}
	if ($hourNow >= 16){
		$partOfDay = "Ilmselt vaba aeg";
	}
	
	//loosime juhusliku pildi
	$picNum = mt_rand(2, 43);//random
	//echo $picNum;
	$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
	$picEXT = ".jpg";
	$picFile = $picURL .$picNum .$picEXT;
	//echo $picFile;
	
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>
	  <?php
		echo $firstName;
		echo " ";
		echo $lastName;
	  ?>
	, õppetöö</title>
</head>
<body>
	<h1>
	 <?php
		 echo $firstName ." " .$lastName;
	 ?>
	</h1>
	<p>See veebileht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<!--<p>Tundides tehtu: <a href="photo.php"></p>;-->
	
	<?php
	  //echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
	  //echo "<p>Täna on " .$weekdayNow .", " .$dateToday .".</p> \n";
	  echo "<p>Täna on " .$weekdayNamesET[$weekdayNow - 1] .", " .$dateToday .".</p> \n";
	  echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .". Käes oli " .$partOfDay .".</p> \n";
	?>
	<p>Lorem ipsum dolor sit amet, non felis luctus libero nascetur. Ligula non dui suspendisse. In lacinia at sem, nam condimentum consectetuer integer, eu malesuada eu neque ultrices, turpis nam taciti, non pellentesque. Leo sed pellentesque in aenean sed, etiam eu rutrum eget feugiat facilisis. Mauris wisi mattis, vivamus a faucibus eget praesent luctus maecenas, ac ipsum dis ullamcorper risus curabitur. Id odio purus porttitor in, nunc tellus sodales eget, eu mauris mi id suspendisse eleifend, tempus vestibulum felis sed in aliquam. Curabitur nunc suspendisse leo eget odio proin, sed cum ut arcu et donec, nibh arcu, leo amet, in amet curabitur lobortis lectus.</p>
	<!--<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">-->
	<!--<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3" alt="TLÜ Terra õppehoone">-->
	
	
	<img src="<?php echo $picFile; ?>" alt="TLÜ Terra õppehoone">;
	<p>Mul on ka sõber, kes teeb oma <a href="../../../~dajanat/Index.html" >veebi.</a></p>;
	
	
	
</body>
</html>

<!--
	lisa muudetud failid nimekirja
	git add . 
	Pane nimekirja lisatud failid üleslaadimise järjekorda ja lisa kommentaar
	git commit -m "Lisatud esimesed php jupid"
	lae järjekorras ootavad failid github'i
	git push
	giti password
	
--> 