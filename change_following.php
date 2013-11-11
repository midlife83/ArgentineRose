<?php

session_start(); 

$Isfollowed=$_SESSION['isFollowed'];
$_SESSION['isFollowed']=1-$Isfollowed;

header("Location: ".$_SERVER["HTTP_REFERER"]);

?>