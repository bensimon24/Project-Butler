<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'custom';
	$qnum = 'Q3';
	$correctAns = 'at=e^t-2e^-t an=2';
	
	include 'AnsChecker.php';	
	

}
else{
	header("Location: ../$qnum.php?submission=error");
	exit();
}