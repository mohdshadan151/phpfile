<?php
	echo "<h1>Associative Array</h1>";
	
	$student = array("shadan"=>1000, "roro"=>1500, "manana"=>2000);
	
	echo "Pocket Money of shadan is: ". $student['shadan']. "<br>";
	echo "Pocket Money of roro is: ". $student['roro']. "<br>";
	echo "Pocket Money of manan is: ". $student['manan']. "<br><br>";

	$student['shadan'] = "High";
	$student['roro'] = "Medium";
	$student['manan'] = "Low";
	
	echo "Pocket Money of shadan is: ". $student['shadan']. "<br>";
	echo "Pocket Money of roro is: ". $student['roro']. "<br>";
	echo "Pocket Money of manan is: ". $student['manan']. "<br><br>";

	echo "made by Mohd shadan 151!";
?>