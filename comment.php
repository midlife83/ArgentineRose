<?php 	
		
	$db = new SQLite3('ar.db');
			
	
	$ret = $db->query('SELECT * FROM comment');
				
	// //echo $ret=>fetchArray(SQLITE3_ASSOC); 
	// //echo "<table border='1'>";
	$comment=$_POST['comment'];
	echo $comment;
	
   // //echo "Operation done successfully\n";
   $db->close();
?>
