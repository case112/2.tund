<?php

	

	$firstName = "Oskar";
	$lastName = "Nikopensius";
	echo $firstName." ".$lastName; 
	
	//echo $firstName;
	//echo $lastName;

	//$number1 = 5;
	//$number2 = 6;

	//echo $number2 * $number1;

?>

<br>

<?php

	$age = 18;
	
	if ($age < 18) {
		
		//kui vastus on tõene (true)
		echo "alaealine";
		
	} else {
		
		//kui vastus on väär (false)
		echo "täisealine";
		
	}


?>

<br>

<?php
	
	for ($i = 1; $i < $age; $i = $i + 1) {
		
		echo $i. "palju";
		// for(1,2,3)
			// sisu*n
			//1. enne 1. korda $i = 0;
			//2. enne igat korda $i < $age
			//3. pärast igat korda $i = $i +1
		
		
	}

	echo "õnne";

?>

<br>

<?php

	echo date("G:i:s D d.m.Y");



?>