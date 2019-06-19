<?php 
session_start();
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
// $db = new mysqli("localhost", "rot", "portland", "TeamBall");
// if ($db->connect_errno) {
//     echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
// }


// if ((!empty($_GET['homeTeamId']))&&(!empty($_GET['visitorTeamName']))){

	// $homeTeamId = mysqli_real_escape_string($db, $_GET['homeTeamId']);
	// $visitorTeamId = mysqli_real_escape_string($db,$_GET['visitorTeamId']);
	// $homeTeamName = mysqli_real_escape_string($db,$_GET['homeTeamName']);
	// $visitorTeamName = mysqli_real_escape_string($db,$_GET['visitorTeamName']);
	// $dateString = mysqli_real_escape_string($db,$_GET['dateString']);



	//$query = "INSERT INTO game (homeTeamId, visitorTeamId, homeTeamName, visitorTeamName, dateString) VALUES ('$homeTeamId', '$visitorTeamId', '$homeTeamName','$visitorTeamName', '$dateString')";
	//mysqli_query($db, $query) or trigger_error(mysqli_error($db)." in ".$query);

	 $_SESSION['gameId'] = '';
	 $_SESSION['opponentName'] = '';
	 $_SESSION['opponentId'] = '';
 	// session_destroy();
	//  header("Location: {$actual_link}");

	//$startGame = false;
	// echo $startGame;
	 //}
	 ?>

