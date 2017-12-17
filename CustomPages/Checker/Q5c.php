<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'custom';
	$qnum = 'Q5';
	$correctAns = '(x-3)^2+(y-1)^2+(z+2)^2=1';
	
	include 'AnsChecker.php';		

}
else{
	header("Location: ../$qnum.php?submission=error");
	exit();
}