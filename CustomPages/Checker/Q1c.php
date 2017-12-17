<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'custom';
	$qnum = 'Q1';
	$correctAns = '14x-5y-6z=25';
	
	
	include 'AnsChecker.php';
	

}
else{
	header("Location: ../$qnum.php?submission=error");
	exit();
}