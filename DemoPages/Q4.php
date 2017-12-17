<?php

	include 'header.php';

	//change these variables for each page
	$qnum = 'Q4'; //current question
	$previous = 'Q3';//previous question (page)
	$previousLong = 'Question 3'; //long name for previous question
	$next = 'Q5';//link to next question
	$nextLong = 'Question 5';//long name for next question
	$test = 'demo';//current test

	include 'QuestionPage.php';
	
	include_once 'footer.php';
?>