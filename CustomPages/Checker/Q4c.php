<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'custom';
	$qnum = 'Q4';
	$correctAns = '<(cost-tsint)/(t+1),(-sint-tcost)/(t+1),(2^.5*t^.5)/(t+1)>';
		
	include 'AnsChecker.php';	
}
else{
	header("Location: ../$qnum.php?submission=error");
	exit();
}