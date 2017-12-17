<?php

//change cars for custom unlocking/hinting
$ANStoUnlock = 4; //number of correct answers until exam is unlocked
$ANStoHint = 2; //number of correct answers until a hint
			
if(!isset($_SESSION[$test])){
		$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
}
$numAns = substr_count($_SESSION[$test], 'Q');//counts num questions counted
if($numAns === $ANStoUnlock){
		exit();
}
if($numAns < $ANStoHint){
	echo "<br><br><p>Answers until next hint:</p><p>".($ANStoHint-$numAns)."</p>";
}else{
	echo '<br><form action="Checker/UseHint.php" method="POST">
			<button type="submit" name="submit" class="submitBtn">Use a hint!</button>
		</form>';
		$_SESSION['qnum']=$qnum;
		
}
echo '<br>';

//add in non hinted answers
$numAns += substr_count($_SESSION[$test], 'q');//counts num questions counted
if($numAns < $ANStoUnlock){
	echo "<p>Answers until exam solutions unlocked:</p><p>".($ANStoUnlock-$numAns)."</p>";
}else{
	echo '<br><form action="Checker/UnlockTest.php" method="POST">
			<button type="submit" name="submit" class="submitBtn">Reveal answers</button>
		</form>';
		$_SESSION['qnum']=$qnum;
		
}