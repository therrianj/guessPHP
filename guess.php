<html>
<head>
<title>Guessing Game for Jonathan Therrian</title>
</head>
<h1>Welcome to my guessing game</h1>
<p>
<?php 
	$answer = 32;
	$noParams = "Missing guess parameter";
	$paramsNoValue = "Your guess is too short";
	$nonNumber = "Your guess is not a number";
	$tooLow = "Your guess is too low";
	$tooHigh = "Your guess is too high";
	$correct = "Congratulations - You are right";
	// $x = "";
	// $noParamsMarker = "";

	// ($_GET['guess'] < $answer) ? $x = $tooLow : null;
	// ($_GET['guess'] > $answer) ? $x = $tooHigh : null;
	// ($_GET['guess'] == $answer) ? $x = $correct : null;
	// is_numeric($_GET['guess']) ? null : $x = $nonNumber;
	// ($_GET['guess'] === "" ) ? $x = $paramsNoValue : null;
	// isset($_GET['guess']) ? null : $x = $noParams;
	

	// echo $x;

	if ( ! isset($_GET['guess']) ) { 
    echo($noParams);
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo($paramsNoValue);
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo($nonNumber);
  } else if ( $_GET['guess'] < $answer ) {
    echo($tooLow);
  } else if ( $_GET['guess'] > $answer ) {
    echo($tooHigh);
  } else {
    echo($correct);
  }
	
?>
</p>
</html>


<!-- ($_GET['guess'] < $answer) ? $x = $tooLow : null;
	($_GET['guess'] > $answer) ? $x = $tooHigh : null;
	($_GET['guess'] == $answer) ? $x = $correct : null;
	is_numeric($_GET['guess']) ? null : $x = $nonNumber;
	($_GET['guess'] === "" ) ? $x = $paramsNoValue : null;
	isset($_GET['guess']) ? null : $x = $noParams; -->