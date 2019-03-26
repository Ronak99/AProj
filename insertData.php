<?php

	include "connection.php";

	$loc = $_POST["loc"];
	$imei = $_POST["imei"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$gpsfix = $_POST["gpsfix"];
	$lattitude = $_POST["lattitude"];
	$latDir = $_POST["latDir"];
	$longitude = $_POST["longitude"];
	$longDir = $_POST["longDir"];
	$speed = $_POST["speed"];
	$heading = $_POST["heading"];
	$cellId = $_POST["cellId"];
	$signalStrength = $_POST["signalStrength"];
	$noOfSat = $_POST["noOfSat"];
	$batteryLevel = $_POST["batteryLevel"];
	$ignStatus = $_POST["ignStatus"];
	$digitalInputStatus = $_POST["digitalInputStatus"];
	$tamperingStatus = $_POST["tamperingStatus"];
	$outportStatus = $_POST["outportStatus"];
	$analogInputOne = $_POST["analogInputOne"];
	$analogInputTwo = $_POST["analogInputTwo"];
	$deviceId = $_POST["deviceId"];


	$insertQuery = "INSERT INTO `navigator` (`$loc`, `IMEI`, `DATE`, `TIME`, `GPSFix`, `LATITUDE`, `LAT DIR`, `LONGITUDE`, `LONG DIR`, `SPEED`, `HEADING`, `CELL ID`, `SIGNAL STRENGTH`, `NO OF SATELLITE USED`, `BATT LEVEL`, `IGN STATUS`, `4 DIGITAL INPUT STATUS`, `4 TAMPERING STATUS`, `2 OUTPORT STATUS`, `ANALOG INPUT1`, `ANALOG INPUT2`, `DEVICE ID`) VALUES ('$loc', '$imei', '$date', '$time', '$gpsfix', '2', '$latDir', '2', '$longDir', '2', '2', '2', '2', '2', '2', '2', 'x', 'x', 'x', '2', '2', 'x');";



	if($conn->query($insertQuery)){
		echo "data was inserted";
	}else{
		echo "query was not executed successfully";
	}


?>
