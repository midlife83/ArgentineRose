<?php

session_start(); 
	
		$_SESSION['name']=$_POST['studentName']; 
		$_SESSION['number']=$_POST['studentNumber']; 
		$_SESSION['section']=$_POST['section']; 
		$_SESSION['title']=$_POST['title']; 
		$_SESSION['description']=$_POST['description']; 
		$_SESSION['assignment']=$_POST['assignedTo']; 
		$_SESSION['label']=$_POST['label'];
		$_SESSION['comment']=NULL; 
		$_SESSION['ref']=NULL;
		$_SESSION['isFollowed']=0; 
			
		 header("location: unresolved_issue.php");
?>