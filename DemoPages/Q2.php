<?php

	include 'header.php';

	//change these variables for each page
	$qnum = 'Q2';	//current question
	$previous = 'Q1';//link to previous question (page)
	$previousLong = 'Question 1'; //previous question long name
	$next = 'Q3'; //link to next question
	$nextLong = 'Question 3'; //long name for next question
	$test = 'demo'; //current test

	include 'QuestionPage.php';
	
	include_once 'footer.php';
?>