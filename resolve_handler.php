<?php

session_start(); 

$_SESSION['solution']=$_POST['solution']; 

header("Location: resolved_issue.php");

?>