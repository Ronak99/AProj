<html>

	<head>

		<title>UI</title>

		<style>

			form{
				display:block;
				margin: auto;
				width:300px;
			}

			form input{
				padding:8px;
				display:block;
				margin-bottom:8px;
				width:100%;
			}

		</style>

	</head>

	<body>

		<center>

			<h2>Enter Details</h2>

		</center>

		<form action="insertData.php" method="POST">

			<input type="text" name="loc" placeholder="Enter Loc">

			<input type="text" name="imei" placeholder="Enter IMEI">

			<input type="text" name="date" placeholder="Enter Date">

			<input type="text" name="time" placeholder="Enter Time">

			<input type="text" name="gpsfix" placeholder="Enter GPSFix">

			<input type="text" name="lattitude" placeholder="Enter Lattitude">

			<input type="text" name="latDir" placeholder="Enter Lat Direction">

			<input type="text" name="longitude" placeholder="Enter Longitude">

			<input type="text" name="longDir" placeholder="Enter Long Direction">

			<input type="text" name="speed" placeholder="Enter Speed">

			<input type="text" name="heading" placeholder="Enter Heading">

			<input type="text" name="cellId" placeholder="Enter Cell Id">

			<input type="text" name="signalStrength" placeholder="Enter Signal Strength">

			<input type="text" name="noOfSat" placeholder="Enter Number Of Satellite Used">

			<input type="text" name="batteryLevel" placeholder="Enter Battery Level">

			<input type="text" name="ignStatus" placeholder="Enter IGN Status">

			<input type="text" name="digitalInputStatus" placeholder="Enter 4 digital input status">

			<input type="text" name="tamperingStatus" placeholder="Enter 4 tampering status">

			<input type="text" name="outportStatus" placeholder="Enter 2 Outport Status">

			<input type="text" name="analogInputOne" placeholder="Enter Analog Input 1">

			<input type="text" name="analogInputTwo" placeholder="Enter Analog Input 2">

			<input type="text" name="deviceId" placeholder="Enter Device Id">

			<input type="submit" value="SUBMIT">

		</form>


	</body> 

</html>