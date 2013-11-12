<?php $filepath="files/unresolved_issues.txt" ; 
			if (file_exists($filepath)) 
			{ 
				$file=fopen($filepath, 'r'); 
				while (!feof($file)) 
				{ 
					$lines=fgets($file); $first_char=$lines[0]; 
					if ($first_char !='*' && $first_char !='^' && trim($lines) !='') 
					{ 
						$split=explode( '|', $lines); 
						echo '<tr class="danger" onClick="window.open(\'view_unresolved_handler.php\');" ><td><input type="checkbox"  autocomplete="off"></td>'; 
						foreach($split as $line) 
						{ 
							echo '<td>'.$line. '</td>'; 
						} 
						echo '</tr>'; 
					} 
				} fclose($file); 
			} 
			
?>
