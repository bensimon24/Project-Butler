<?php

	include 'header.php';

	//change these variables for each page
	$qnum = 'Q3'; //current question
	$previous = 'Q2';//previous question (page)
	$previousLong = 'Question2'; //long name for previous question
	$next = 'Q4'; //link to next question
	$nextLong = 'Question 4';//long name for next question
	$test = 'demo'; //current test

	include 'QuestionPage.php';
	
	include_once 'footer.php';
?>