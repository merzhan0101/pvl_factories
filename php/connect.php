<?php
	$mysqli=true;
	// function connectDB(){
	// 	global $mysqli;
	// 	$mysqli=new mysqli("localhost","f0656996","wamiinacus","f0656996_merzhan");
	// 	$mysqli->query("SET NAMES 'utf8'");
	// 	$mysqli->query("SET CHARACTER SET 'utf8'");
	// }
	function connectDB(){
		global $mysqli;
		$mysqli=new mysqli("localhost","root","","bd_merzhan");
		$mysqli->query("SET NAMES 'utf8'");
		$mysqli->query("SET CHARACTER SET 'utf8'");
	}
	function closeDB(){
		global $mysqli;
		$mysqli->close();

	}

?>