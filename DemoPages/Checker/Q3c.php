<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'demo';
	$qnum = 'Q3';
	$correctAns = '180';
	
	include 'AnsChecker.php';	
	

}
else{
	header("Location: ../$qnum.php?submission=error");
	exit();
}