
<?php

	include_once 'header.php';
?>
		<center><a href="quiz1.php"><button class="resumeBtn"> 
		 <span class="title">QUIZ 1</span>
   		 <span style = "font-size: 25px" class="comment"> Calculus Review </span>
		</button></a></center>
		<center><a href="quiz2.php"><button class="resumeBtn">
		 <span class="title">QUIZ 2</span>
   		 <span style = "font-size: 25px" class="comment"> Coordinate Systems </span>
   		</button></a></center>
		<center><a href="quiz3.php"><button class="resumeBtn">
		 <span class="title">QUIZ 3</span>
   		 <span style = "font-size: 25px" class="comment"> Dot Product </span>
   		</button></a></center>
		<!-- <center><a href="quiz4.php"><button class="resumeBtn">QUIZ 4</button></a></center>
		<center><a href="quiz5.php"><button class="resumeBtn">QUIZ 5</button></a></center><br> -->
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "<p>You are logged in!</p>";
			}
		?>
		
		<br><br><br><br><br><br><br><br><br><br><!-- BS to make the footer stay at the bottom until a better solution is found -->
<?php
	include_once 'footer.php';
?>
