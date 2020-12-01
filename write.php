<?php
	
	$text1 = $_POST["name"];
	$text2 = $_POST["age"];

	if($text1 != "")
	{
		echo("Message sent successfully!");
		echo("Field 1: Martin");
		echo("Field 2:". $text2);
		$file = fopen("dataCSV.csv", "a");
		fwrite($file, "Martin,");
		fwrite($file, $text2);
		fclose($file);
	}else
	{
		echo("Message failed");
	}

?>