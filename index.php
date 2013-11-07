<!DOCTYPE html>
<html lang="en">

<head>
 <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org">
 <meta charset="utf-8">
 <title>
  ArgentineRose Student Issue Tracking System
 </title>
 <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" type="text/css">
 <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-theme.css" type="text/css">
 <link rel="stylesheet" href="css/app.css" type="text/css">
 <script src="vendor/modernizr.js" type="text/javascript"></script>
</head>

<body>
 <div class="container">

  <!-- NAVIGATION -->
  <div class="row" id="navigation-bar">
   <ul class="nav nav-tabs" style="margin-top:5px">
    <li class="left">
     <a href="#students_tab" data-toggle="tab">View Students</a>
    </li>

    <li class="active left">
     <a href="#issues_tab" data-toggle="tab">View Issues</a>
    </li>

    <li class="left">
     <a href="#report_issues_tab" data-toggle="tab">Report An Issue</a>
    </li>

    <!--
          <li class="right">
            <a href="#opened_issue_tab" data-toggle="tab">Issue# 34</a>
          </li>
		  -->
   </ul>
  </div>

  <!-- STUDENTS PAGE-->
  <div class="tab-content">
   <div class="tab-pane" id="students_tab">
    <div class="panel-heading" align="center">
     <h2 style="margin-top:5px; margin-bottom:0px; float:center">Students</h2>
    </div>
    <form class="form-horizontal" role="search" style="margin-top: 10px">
     <div class="form-group" align="center">
      <label for="studentSearch" class="col-sm-2 control-label">Search Students:</label>
      <div class="col-sm-8">
       <input type="text" class="form-control" id="studentSearch" placeholder="Student Name/ Student Number/ Professor Name/ TA Name/ Key Word">
      </div>
     </div>
    </form>
   </div>
   <!--Issues Page-->
   <div class="tab-pane active" id="issues_tab">
    <div class="panel-heading" align="center">
     <h2 style="margin-top:5px; margin-bottom:0px; float:center">List of Issues</h2>
    </div>
    <form class="form-horizontal" role="search" style="margin-top: 10px">
     <div class="form-group" align="center">
      <label class="col-sm-2 control-label" for="searchIssues">Search Issues:</label>
      <div class="col-sm-8">
       <input type="text" class="form-control" id="searchIssues" placeholder="Enter Student Name/ Student Number/ Professor Name/ TA Name/ Key Word">
      </div>
     </div>
    </form>

    <div class="container">
     <div class="row" id="sort-issues">
      <ul class="nav nav-pills col-md-10">
       <li class="active left">
        <a href="#unresolved_tab" data-toggle="tab">Unresolved</a>
       </li>

       <li class="left">
        <a href="#resolved_tab" data-toggle="tab">Resolved</a>
       </li>

       <li class="left">
        <a href="#all_tab" data-toggle="tab">All</a>
       </li>
      </ul>
      <button type="button" class="right col-md-2">Mark As Resolved</button>
     </div>


     <div class="tab-content">
      <div class="tab-pane active" id="unresolved_tab">
       <table class="table table-hover">
        <tr class="info">
         <td>
          <input type="checkbox">
         </td>
         <td>Ref#</td>
         <td>Submitted by</td>
         <td>Issue Title</td>
         <td>Date Submitted</td>
         <td>Student #</td>
         <td>Student Name</td>
         <td>Last Activity</td>
         <td>Label</td>
        </tr>
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
						echo '<tr class="danger"><td><input type="checkbox"></td>'; 
						foreach($split as $line) 
						{ 
							echo '<td>'.$line. '</td>'; 
						} 
						echo '</tr>'; 
					} 
				} fclose($file); 
			} 
		?>
       </table>
      </div>

      <div class="tab-pane" id="resolved_tab">
       <table class="table table-hover">
        <tr class="info">
         <td>
          <input type="checkbox">
         </td>
         <td>Ref#</td>
         <td>Submitted by</td>
         <td>Issue Title</td>
         <td>Date Submitted</td>
         <td>Student #</td>
         <td>Student Name</td>
         <td>Last Activity</td>
         <td>Label</td>
        </tr>
		<?php $filepath="files/resolved_issues.txt" ; 
			if (file_exists($filepath)) 
			{ 
				$file=fopen($filepath, 'r'); 
				while (!feof($file)) 
				{ 
					$lines=fgets($file); $first_char=$lines[0]; 
					if ($first_char !='*' && $first_char !='^' && trim($lines) !='') 
					{ 
						$split=explode( '|', $lines); 
						echo '<tr class="success"><td><input type="checkbox"></td>'; 
						foreach($split as $line) 
						{ 
							echo '<td>'.$line. '</td>'; 
						} 
						echo '</tr>'; 
					} 
				} fclose($file); 
			} 
		?>
       </table>
      </div>

      <div class="tab-pane" id="all_tab">
       <table class="table table-hover">
        <tr class="info">
         <td>
          <input type="checkbox">
         </td>
         <td>Ref#</td>
         <td>Submitted by</td>
         <td>Issue Title</td>
         <td>Date Submitted</td>
         <td>Student #</td>
         <td>Student Name</td>
         <td>Last Activity</td>
         <td>Label</td>
        </tr>
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
				while (!feof($file)) 
				{ 
					$lines=fgets($file); 
					$first_char=$lines[0];
					if ($first_char !='*' && $first_char !='^' && trim($lines) !='' ) 
					{ 
						$split=explode( '|', $lines); 
						if (in_array($lines, $resolved_data)) 
						{ 
							echo '<tr class="success"><td><input type="checkbox"></td>'; 
						} 
						else 
						{ 
							echo '<tr class="danger"><td><input type="checkbox"></td>';
						} 
						foreach($split as $line) 
						{ 
							echo '<td>'.$line. '</td>'; 
						} 
						echo '</tr>';
					} 
				} 
				fclose($file); 
			} 
		?>
       </table>
      </div>
     </div>
    </div>
   </div>

   <!-- Report An Issue Page -->

   <div class="tab-pane" id="report_issues_tab">
    <div class="panel-heading" align="center">
     <h2 style="margin-top:5px; float:center">Report An Issue</h2>
    </div>

    <div class="panel panel-default">
     <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="single_issue.php"
      target='_blank'>
       <div class="form-group">
        <label for="studentName" class="col-sm-2 control-label">Student Name</label>
        <div class="col-sm-4">
         <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Student Name">
        </div>
       </div>

       <div class="form-group">
        <label for="studentNumber" class="col-sm-2 control-label">Student Number</label>
        <div class="col-sm-4">
         <input type="number" class="form-control" id="studentNumber" maxlength="8" name="studentNumber"
         placeholder="Student Number">
        </div>
       </div>

       <div class="form-group">
        <label for="section" class="col-sm-2 control-label">Section</label>
        <div class="col-sm-4">
         <select id="section" name="section" class="form-control">
          <option>T1A</option>
          <option>T1B</option>
          <option>T1C</option>
          <option>T2A</option>
          <option>T2B</option>
          <option>T3C</option>
         </select>
        </div>
       </div>

       <hr>

       <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="title" name="title" placeholder="Title of the issue">
        </div>
       </div>

       <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
         <textarea class="form-control" name="description" rows="6" placeholder="Detail of the issue"></textarea>
        </div>
       </div>

       <div class="form-group">
        <label for="assignedTo" class="col-sm-2 control-label">Assigned To</label>
        <div class="col-sm-4">
         <select id="assignedTo" name="assignedTo" class="form-control">
          <option>[Prof] Joan McGray (me)</option>
          <option>[Prof] Karrot McLean</option>
          <option>[Prof] Greger Wales</option>
          <option>[Prof] Meg Kallen</option>
          <option>[TA] Bonny Salvo</option>
          <option>[TA] Erica Wilbur</option>
          <option>[TA] Jazmine Hermes</option>
          <option>[TA] Shasta Francois</option>
         </select>
        </div>
       </div>

       <div class="form-group">
        <label for="label" class="col-sm-2 control-label">Label</label>
        <div class="col-sm-4">
         <select id="label" name="label" class="form-control">
          <option>General</option>
          <option>Q1</option>
          <option>Q2</option>
          <option>Q3</option>
          <option>Q4</option>
          <option>Midterm1</option>
          <option>Midterm2</option>
          <option>Final</option>
          <option>Lab1</option>
          <option>Lab2</option>
          <option>Lab3</option>
         </select>
        </div>
       </div>
       <div class="row" align="right">
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="reset" class="btn btn-default">Reset</button>
       </div>
      </form>
     </div>
    </div>



   </div>

   <div class="tab-pane" id="opened_issue_tab">
    <h1>
     Issue #37: 0/10 on quiz, 2/10 on lab 3
    </h1>

    <p>
     Reported by Alyssa Dunn on Oct 17th 2013 2:13pm
    </p>

    <div class="row">
     <div class="col-md-8">
      <p>
       This project uses
      </p>

      <p>
       Assigned to Alyssa Dunn
      </p>

      <p>
       Labels: #Quiz
      </p>

      <h3>
       Status: Unresolved
      </h3>
     </div>

     <div class="col-md-4">
      <p>
       Student Name: Jeff Jung
      </p>

      <p>
       Student Number: 12345678
      </p>

      <p>
       Section: CSPC 110 - 101
      </p>
     </div>
    </div>

    <br>
    <div class="btn-group">
     <button type="button" class="btn btn-default">Edit</button>
     <button type="button" class="btn btn-default">Follow</button>
     <button type="button" class="btn btn-default">Delete</button>
     <button type="button" class="btn btn-default">Resolve</button>
    </div>

    <hr>

    <div class="container">
     <h3>
      Description:
     </h3>

     <p>
      Lots of text can go here to describe the student issues.Lots of text can go here
      to describe the student issues.Lots of text can go here to describe the student
      issues.Lots of text can go here to describe the student issues.Lots of text
      can go here to describe the student issues. Lots of text can go here to describe
      the student issues.Lots of text can go here to describe the student issues.
     </p>
     <br>

     <h3>
      Comments:
     </h3>

     <img src="assets/person.png" alt="Meghan Allen">
     <table>
      <tr>
       <td>
        <font size="1">
         <strong>Meghan Allen</strong>
        </font>
        <font color="gray">2 days ago</font>
       </td>
      </tr>
      <tr>
       <td>Can someone email the student and get them to come to my office next Tuesday?</td>
      </tr>
     </table>

     <hr size="0" width="50%" align="left">

     <img src="assets/person.png" alt="James Bond">
     <table>
      <tr>
       <td>
        <font size="1">
         <strong>James Bond</strong>
        </font>
        <font color="gray">2 hours 12 minutes ago</font>
       </td>
      </tr>
      <tr>
       <td>Sure. I just emailed. Will inform you once she reponds.</td>
      </tr>
     </table>

     <div class="row" align="right">
      <button type="button" class="btn btn-default">&#43; Comment</button>
     </div>

    </div>
   </div>
  </div>
  <!-- Put your js down here -->
  <script src="vendor/jquery.js" type="text/javascript">
  </script>
  <script src="vendor/bootstrap/js/bootstrap.js" type="text/javascript">
  </script>
  <script src="js/app.js" type="text/javascript">
  </script>
 </div>
</body>

</html>
