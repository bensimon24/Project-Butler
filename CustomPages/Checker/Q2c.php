<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'custom';
	$qnum = 'Q2';
	$correctAns = '(32,4,12*3^.5)';
	
	include 'AnsChecker.php';	

}
else{
	header("Location: ../$qnum.php?submission=error");
	exit();
}