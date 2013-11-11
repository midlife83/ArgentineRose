<?php 
			$unresolved_filepath="files/unresolved_issues.txt"; 
			$resolved_filepath="files/resolved_issues.txt"; 
			$new_filepath="files/all_issues.txt"; 
			$unresolved_data=file($unresolved_filepath);
			$resolved_data=file($resolved_filepath); 
			$data=array_merge($unresolved_data,$resolved_data); 
			arsort($data); 
			file_put_contents($new_filepath, implode("\n", $data)); 
			if (file_exists($new_filepath)) 
			{ 
				$file=fopen($new_filepath,'r'); 
				$ref = 0;
				while (!feof($file)) 
				{ 
					$lines=fgets($file); 
					$first_char=$lines[0];
					if ($first_char !='*' && $first_char !='^' && trim($lines) !='' ) 
					{ 
						$split=explode( '|', $lines); 
						if (in_array($lines, $resolved_data)) 
						{ 
							echo '<tr class="success"><td><input type="checkbox" autocomplete="off"></td><a href="resolved_issue.php">'; 
						} 
						else 
						{ 
							echo '<tr class="danger"><a href="unresolved_issue.php"><td><input type="checkbox" autocomplete="off"></td>';
						} 
						foreach($split as $line) 
						{ 
							echo '<td>'.$line. '</td>'; 
						} 
						echo '</a></tr>';
					} 
				} 
				fclose($file); 
			} 
		?>
