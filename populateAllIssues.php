<?php 	
		
	$db = new SQLite3('ar.db');
			
	
	$ret = $db->query('SELECT * FROM issue');
				
	// //echo $ret=>fetchArray(SQLITE3_ASSOC); 
	// //echo "<table border='1'>";
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
	
		$q = $row['issueResolved'];
		// //echo 'lol';
		if ($row['issueResolved']==0) 	{	
			echo '<tr class="danger">';
			}
		else {
			echo '<tr class="success">';
			}
		//echo "<td>".$row['issueResolved']."</td>";
		echo '<td><input type="checkbox" autocomplete="off"></td>';
		echo "<td>".$row['issueID']."</td>";
		echo "<td>".$row['issueInstructorName']."</td>";
		echo "<td>".$row['issueTitle']."</td>";
		echo "<td>".$row['issueDate']."</td>";
		echo "<td>".$row['issueStdNumber']."</td>";
		echo "<td>".$row['issueStdName']."</td>";
		echo "<td>".$row['issueLast']."</td>";
		echo "<td>".$row['issueLabel']."</td>";
		echo "</tr>";  
		}
	
   // //echo "Operation done successfully\n";
   $db->close();
?>
