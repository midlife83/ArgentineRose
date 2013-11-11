<?php

session_start(); 

$_SESSION['comment']=$_POST['comment']; 

header("Location: ".$_SERVER["HTTP_REFERER"]);

?>