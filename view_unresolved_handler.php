<?php

session_start(); 
	
		$_SESSION['name']='Greger Wales'; 
		$_SESSION['number']='53212178'; 
		$_SESSION['section']='L1B'; 
		$_SESSION['title']='Jane keeps falling asleep'; 
		$_SESSION['description']='THIS PAGE IS JUST A SAMPLE PAGE TO SHOW HOW IT WOULD LOOK LIKE.<br>THE INFORMATION SHOWN HERE MAY BE DIFFERENT FROM THE ISSUE YOU JUST CLICKED.'; 
		$_SESSION['assignment']='[TA] Erica Wilbur'; 
		$_SESSION['label']='Lab2';
		$_SESSION['comment']=NULL; 
		$_SESSION['ref']='1097';
		$_SESSION['isFollowed']=0; 
			
		 header("location: unresolved_issue.php");
?>