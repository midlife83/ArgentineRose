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
							$danger = 0;
							echo '<tr class="success"><td><input type="checkbox" autocomplete="off"></td>'; 
						} 
						else 
						{ 	
							$danger = 1;
							echo '<tr class="danger"><td><input type="checkbox" autocomplete="off"></td>';
						} 
						foreach($split as $line) 
						{ 
							if ($danger==0)
							{
								echo '<td><a href="resolved_issue.php">'.$line. '</a></td>'; 
							}
							else
							{
								echo '<td><a href="unresolved_issue.php">'.$line. '</a></td>'; 
							}
						} 
						echo '</tr>';
					} 
				} 
				fclose($file); 
			} 
		?>
