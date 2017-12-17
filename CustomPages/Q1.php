<?php

	include 'header.php';

	//change these variables for each page
	$qnum = 'Q1';
	$previous = '../custom';//link to prev page
	$previousLong = 'All Questions'; //long name to prev page
	$next = 'Q2'; //link to next page
	$nextLong = 'Question 2'; //long name to next page
	$test = 'custom'; //current test
			
	
	
	include 'QuestionPage.php';
	include_once 'footer.php';
?>