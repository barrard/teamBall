<?php 
session_start();
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

	 $_SESSION['gameId'] = '';
	 $_SESSION['opponentName'] = '';
	 $_SESSION['opponentId'] = '';
 	// session_destroy();
	//  header("Location: {$actual_link}");

	//$startGame = false;
	// echo $startGame;
	 //}
	 ?>

