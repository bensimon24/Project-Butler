<?php
	if (!isset($_SESSION['u_id'])) {
		echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
	}

	/*
	Answer (in)valid prompt
	*/
	if(isset($_GET['submission'])){
		if($_GET['submission'] === 'incorrect'){
			echo '<br><br><h4>That is incorrect!</h4>';
			
		}
		if($_GET['submission'] === 'correct'){
			echo '<br><br><h4>That is correct!</h4>';
		}
	}
	/*
	Question prompt
	*/
	echo '<br><br><br>';
	echo '<center><img src="../'.$test.'/'.$qnum.'.png" alt="'.$qnum.'" class="img"><br><br><br><br><br>';
	echo '<p>Input your answer here:</p>
			<form action="Checker/'.$qnum.'c.php" method="POST">
				<input type="text" name="answer" placeholder="Your Answer" class="textBox"><br><br>
				<button type="submit" name="submit" class="submitBtn">Submit</button>		<br><br><br><br>
			</form>';
			
	/*
	prev nav button
	*/		
	echo '<a href="'.$previous.'.php"><button class="submitBtn"><- '.$previousLong.'</button></a>';


	//search to see if question number is answered
	if(!isset($_SESSION[$test])){
		$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
	}
	$answerholder = $_SESSION[$test]; //get current answerholder variable
	//checkboth for answer independent of the case of q
	$pos =strpos(strtolower($answerholder), (strtolower($qnum) . ','));

	//display solution if question is answered
	if($pos !== false ){
		echo '<a href="../'.$test.'/Solutions/'.$qnum.'s.PNG"><button class="submitBtn">Solution</button></a>';
	}

	/*
	next nav button
	*/	
	echo '<a href="'.$next.'.php"><button class="submitBtn">'.$nextLong.' -></button></a><br><br>';


	/*
	hint and soltion unlocker
	*/
	include 'hint-solution-buttons.php';

	//bs to keep footer at bottom of the page
	echo '</center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

		