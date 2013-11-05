<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org">
    <meta charset="utf-8">
    <title>
      ArgentineRose Student Issue Tracking System
    </title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <script src="vendor/modernizr.js" type="text/javascript">
</script>
  </head>

<body>

<html> 
 
<?php

session_start();


$solution=$_POST['solution'];

$name = $_SESSION['name']; 
$number = $_SESSION['number']; 
$section = $_SESSION['section'];
$title = $_SESSION['title'];
$description = $_SESSION['description'];
//$assignment = $_SESSION['assignment'];
//$label = $_SESSION['label'];

?>

        <div class="tab-pane" id="opened_issue_tab">
          <h1>
            Issue #37: 
 <?php           
            echo $title."<br />";
 ?>           
          </h1>

          <p>
            Reported by Alyssa Dunn on Oct 17th 2013 2:13pm
          </p>

          <div class="row">
            <div class="col-md-8">

              <p>
                Resolved by Alyssa Dunn on Oct 19th 2013 7:13am
              </p>

              <p>
                Labels: #Quiz
              </p>

              <h3>
                Status: <font color="green">Resolved</font>
              </h3>
            </div>

            <div class="col-md-4">
              <p>
                Student Name: 
 <?php           
            echo $name."<br />";
 ?>
              </p>

              <p>
                Student Number:
 <?php           
            echo $number."<br />";
 ?>               
              </p>

              <p>
                Section:
 <?php           
            echo $section."<br />";
 ?>                
              </p>
            </div>
          </div>
          
          <br>

          <div class="btn-group">
            <button type="button" class="btn btn-default">Follow</button> 
          </div>

          <hr>
          
         <div class="container">
          <div class="col-sm-6">
            <h3>
              Description:
            </h3>

            <p>
 <?php           
            echo $description."<br />";
 ?>
            </p>
          </div>
          <div class="col-lg-1">
            <h3>
              Solution:
            </h3>

            <p>
 <?php           
            echo $solution."<br />";
 ?>
            </p>
           </div>
</div>
            
            
			<br>
            
			<div class="container">
			<h3>
			   Comments:
			</h3>
			
			<img src="assets/person.png" alt="Meghan Allen">
			<table>
				<tr>
				<td> <font size="1px"><strong>Meghan Allen<strong> </font> &nbsp &nbsp <font color="grey">2 days ago</font></td>
				</tr>
				<tr>
				<td> Can someone email the student and get them to come to my office next Tuesday?</td>
				</tr>
			</table>
			
			<hr size="0" width="50%" align="left">
			
			<img src="assets/person.png" alt="James Bond">
			<table>
				<tr>
				<td> <font size="1px"><strong>James Bond<strong> </font> &nbsp &nbsp <font color="grey">2 hours 12 minutes ago</font></td>
				</tr>
				<tr>
				<td> Sure. I just emailed. Will inform you once she reponds.</td>
				</tr>
			</table>
			
			<div class="row" align="right">
				<button type="button" class="btn btn-default"> &#43; Comment</button> 
			</div>
</div>

</body>
</html>