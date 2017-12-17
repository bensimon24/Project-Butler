<?php

	include 'header.php';
	
	//change these variables for each page
	$qnum = 'Q5';
	$previous = 'Q4';//previous question (page)
	$previousLong = 'Question 4';
	$next = '../demo';
	$nextLong = 'All Questions';
	$test = 'demo';

	include 'QuestionPage.php';
	
	include_once 'footer.php';
?>