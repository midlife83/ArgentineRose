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
 <div class="container" style="margin-top:10px; width:70%">
  <div class="panel panel-primary">
   <div class="panel-heading">
    <?php
		 session_start(); 
		 $name=$_SESSION['name']; 
		 $number=$_SESSION['number'];
		 $section=$_SESSION['section']; 
		 $title=$_SESSION['title']; 
		 $description=$_SESSION['description']; 
		 $assignment=$_SESSION['assignment']; 
		 $label=$_SESSION['label']; 
	?>
    <h2 style="margin:0px">
     Edit An Issue: Issue# 1037>
    </h2>
   </div>

   <div class="panel-body" id="opened_issue_tab">
    
	<form class="form-horizontal" role="form" method="POST" action="report_handler.php">
    <div class="panel panel-default">
     <div class="panel-body">
      
       <div class="form-group">
        <label for="studentName" class="col-sm-2 control-label">Student Name</label>
        <div class="col-sm-4">
         <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Student Name"value= <?php echo $name ?>>
        </div>
       </div>

       <div class="form-group">
        <label for="studentNumber" class="col-sm-2 control-label">Student Number</label>
        <div class="col-sm-4">
         <input type="text" class="form-control" id="studentNumber" maxlength="8" name="studentNumber"
         placeholder="Student Number" value= <?php echo $number ?>>
        </div>
       </div>

       <div class="form-group">
        <label for="section" class="col-sm-2 control-label">Section</label>
        <div class="col-sm-4">
         <select id="section" name="section" class="form-control">
		  <option <?php if ($section=="101") echo "selected='selected'";?> >101</option>
          <option <?php if ($section=="102") echo "selected='selected'";?> >102</option>
          <option <?php if ($section=="201") echo "selected='selected'";?> >201</option>
		  <option> <?php if ($section=="202") echo "selected='selected'";?> 202</option>
		  <option <?php if ($section=="L1A") echo "selected='selected'";?> >L1A</option>
          <option <?php if ($section=="L1B") echo "selected='selected'";?> >L1B</option>
          <option <?php if ($section=="L1C") echo "selected='selected'";?> >L1C</option>
		  <option <?php if ($section=="L2A") echo "selected='selected'";?> >L2A</option>
          <option <?php if ($section=="L2B") echo "selected='selected'";?> >L2B</option>
          <option <?php if ($section=="L3C") echo "selected='selected'";?> >L3C</option>
          <option <?php if ($section=="T1A") echo "selected='selected'";?> >T1A</option>
          <option <?php if ($section=="T1B") echo "selected='selected'";?> >T1B</option>
          <option <?php if ($section=="T1C") echo "selected='selected'";?> >T1C</option>
          <option <?php if ($section=="T2A") echo "selected='selected'";?> >T2A</option>
          <option <?php if ($section=="T2B") echo "selected='selected'";?> >T2B</option>
          <option <?php if ($section=="T3C") echo "selected='selected'";?> >T3C</option>
         </select>
        </div>
       </div>

       <hr>

       <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="title" name="title" placeholder="Title of the issue" value= <?php echo $title ?>>
        </div>
       </div>

       <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
         <textarea class="form-control" name="description" rows="6" placeholder="Detail of the issue"><?php echo $description ?></textarea>
        </div>
       </div>

       <div class="form-group">
        <label for="assignedTo" class="col-sm-2 control-label">Assigned To</label>
        <div class="col-sm-4">
         <select id="assignedTo" name="assignedTo" class="form-control">
          <option <?php if ($assignment=="[Prof] Joan McGray (me)") echo "selected='selected'";?> >[Prof] Joan McGray (me)</option>
          <option <?php if ($assignment=="[Prof] Karrot McLean") echo "selected='selected'";?> >[Prof] Karrot McLean</option>
          <option <?php if ($assignment=="[Prof] Greger Wales") echo "selected='selected'";?> >[Prof] Greger Wales</option>
          <option <?php if ($assignment=="[Prof] Meg Kallen") echo "selected='selected'";?> >[Prof] Meg Kallen</option>
          <option <?php if ($assignment=="[TA] Bonny Salvo") echo "selected='selected'";?> >[TA] Bonny Salvo</option>
          <option <?php if ($assignment=="[TA] Erica Wilbur") echo "selected='selected'";?> >[TA] Erica Wilbur</option>
          <option <?php if ($assignment=="[TA] Jazmine Hermes") echo "selected='selected'";?> >[TA] Jazmine Hermes</option>
          <option <?php if ($assignment=="[TA] Shasta Francois") echo "selected='selected'";?> >[TA] Shasta Francois</option>
         </select>
        </div>
       </div>

       <div class="form-group">
        <label for="label" class="col-sm-2 control-label">Label</label>
        <div class="col-sm-4">
         <select id="label" name="label" class="form-control">
          <option <?php if ($label=="General") echo "selected='selected'";?> >General</option>
          <option <?php if ($label=="Q1") echo "selected='selected'";?> >Q1</option>
          <option <?php if ($label=="Q2") echo "selected='selected'";?> >Q2</option>
          <option <?php if ($label=="Q3") echo "selected='selected'";?> >Q3</option>
          <option <?php if ($label=="Q4") echo "selected='selected'";?> >Q4</option>
          <option <?php if ($label=="Midterm1") echo "selected='selected'";?> >Midterm1</option>
          <option <?php if ($label=="Midterm2") echo "selected='selected'";?> >Midterm2</option>
          <option <?php if ($label=="Final") echo "selected='selected'";?> >Final</option>
          <option <?php if ($label=="Lab1") echo "selected='selected'";?> >Lab1</option>
          <option <?php if ($label=="Lab2") echo "selected='selected'";?> >Lab2</option>
          <option <?php if ($label=="Lab3") echo "selected='selected'";?> >Lab3</option>
         </select>
        </div>
       </div>       
     </div>	 
    </div>
	
	<div class="row" align="right">	
		<button type="button" class="btn btn-default" style="float:right; margin-bottom:0px" onclick=window.location.href='unresolved_issue.php'><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
		<button type="submit" class="btn btn-default" style="float:right; margin-bottom:0px"><span class="glyphicon glyphicon-ok-sign"></span> Sumbit</button>
		
	</div>
	
</body>

</html>
