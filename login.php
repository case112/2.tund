<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST)
	
	$signupEmailError = "";
	$signupPasswordError = "";
	
	
	//kas epost oli olemas
	if (isset ($_POST["signupEmail"]) ) {
		
		if( empty ($_POST["signupEmail"]) ) {
			//oli email, kuid see oli tühi
			$signupEmailError = "See väli on kohustuslik!";
		}
		
	}
	//kas password oli olemas
	if (isset ($_POST["signupPassword"]) ) {
		
		if( empty ($_POST["signupPassword"]) ) {
			//oli password, kuid see oli tühi
			$signupPasswordError = "See väli on kohustuslik!";
		} else {
			//tean et parool ja see ei olnud tühi
			//vähemalt 8
			
			if ( strlen($_POST["signupPassword"]) < 8) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk!";
				
			}
			
		}
		
	}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Login site</title>
	
	
	
	</head>

	<body>
		<h2>Logi sisse</h2>
	
		<form method="POST">
			
			
			<input type="email" name="loginEmail" placeholder="Email">
			<br>
			<input type="password" name="loginPassword" placeholder="Parool">
			<br>
			<input type="submit" value="Logi sisse">
		
		</form>
		
		<h2>Loo kasutaja</h2>
	
		<form method="POST">
			
			<input type="email" name="signupEmail" placeholder="example@example.com"> <?php echo $signupEmailError;?>
			<br>
			<input type="password" name="signupPassword" placeholder="Parool"> <?php echo $signupPasswordError;?>
			<br>
			<input type="submit" value="Logi sisse">
		
		</form>
	
	
	
	
	 
	
	
	</body>
</html>