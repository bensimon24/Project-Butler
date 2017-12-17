<?php

	include 'header.php';

	//change these variables for each page
	$qnum = 'Q2';
	$previous = 'Q1';//previous question (page)
	$previousLong = 'Question 1';
	$next = 'Q3';
	$nextLong = 'Question 3';
	$test = 'custom';

	include 'QuestionPage.php';
	
	include_once 'footer.php';
?>