<?php
	$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "id7170406_sql_vitaliy", "pititrue250398", "id7170406_parrots");
		$mysqli->query("SET NAMES 'utf-8'");
	}
	
	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}
	
	function getParrots(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `kinds` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function getLifeexpectancy(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `lifeexpectancy` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function getTeaching(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `perm_restaurant` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function getGallery(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `gallery` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function resultToArray($result){
		$array = array();
		while($row = $result->fetch_assoc()){
			$array[] = $row;
		}
		return $array;
	}
?>