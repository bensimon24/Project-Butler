<?php

	include 'header.php';
	
	//change these variables for each page
	$qnum = 'Q5';
	$previous = 'Q4';//previous question (page)
	$previousLong = 'Question 4';
	$next = '../custom';
	$nextLong = 'All Questions';
	$test = 'custom';

	include 'QuestionPage.php';
	
	include_once 'footer.php';
?>