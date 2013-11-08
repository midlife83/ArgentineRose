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
	?>
    <h2 style="margin:0px">
     Resolve An Issue
    </h2>
   </div>

   <div class="panel-body" id="opened_issue_tab">
    
    <form class="form-horizontal" role="form" method="POST" action="resolved_issue.php">

    <div class="form-group">
     <label for="title" class="col-sm-2 control-label">Issue Title</label>
     <div class="col-sm-3" style="margin-top:7px">
      <?php echo $title; ?>
     </div>
    </div>

    <div class="form-group">
     <label for="studentName" class="col-sm-2 control-label">Student Name</label>
     <div class="col-sm-3" style="margin-top:7px">
      <?php echo $name; ?>
     </div>
    </div>

    <div class="form-group">
     <label for="studentNumber" class="col-sm-2 control-label">Student Number</label>
     <div class="col-sm-3" style="margin-top:7px">
      <?php echo $number; ?>
     </div>
    </div>

    <div class="form-group">
     <label for="section" class="col-sm-2 control-label">Section</label>
     <div class="col-sm-3" style="margin-top:7px">
      <?php echo $section; ?>
     </div>
    </div>

    <hr>

    <div class="form-group">
     <label for="solution" class="col-sm-2 control-label">Solution<br>Description</label>
     <div class="col-sm-10">
      <textarea class="form-control" name="solution" rows="6"></textarea>
     </div>
    </div>
	
	<div class="row" align="right">	
		<button type="button" class="btn btn-default" style="float:right; margin-bottom:0px"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
		<button type="submit" class="btn btn-default" style="float:right; margin-bottom:0px"><span class="glyphicon glyphicon-ok-sign"></span> Resolve</button>
		
	</div>
	
   </div>
  </div>
 </div>
</body>

</html>
