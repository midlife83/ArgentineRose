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
     Resolve An Issue: Issue# 37 <?php echo $title; ?>
    </h2>
   </div>

   <div class="panel-body" id="opened_issue_tab">
    
    <form class="form-horizontal" role="form" method="POST" action="resolve_handler.php">

    

    <div class="row">
     <div class="col-md-8">	
	  <p>
		Reported by Alyssa Dunn on Oct 17th 2013 2:13pm
      </p>
	 
      <p>
       Assigned to
       <?php echo $assignment. "<br>"; ?>
      </p>

      <p>
       Labels: #
       <?php echo $label. "<br>"; ?>
      </p>

      <h3>
       Status:
       <font color="red">Unresolved</font>
      </h3>
      <br>
     </div>

     <div class="col-md-4">
      <p>
       Student Name:
       <?php echo $name. "<br>"; ?>
      </p>

      <p>
       Student Number:
       <?php echo $number. "<br>"; ?>
      </p>

      <p>
       Section:
       <?php echo $section. "<br>"; ?>
      </p>
     </div>
    </div>

	<h4 style="margin-top:0px">
      Description:
     </h4>

     <p>
      <?php echo $description. "<br>"; ?>
     </p>

    <hr>

    <div class="form-group">
     <label for="solution" class="col-sm-2 control-label">Solution<br>Description</label>
     <div class="col-sm-10">
      <textarea class="form-control" name="solution" rows="6"></textarea>
     </div>
    </div>
	
	<div class="row" align="right">	
		<button type="button" class="btn btn-default" style="float:right; margin-bottom:0px" onclick="window.close();"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
		<button type="submit" class="btn btn-default" style="float:right; margin-bottom:0px"><span class="glyphicon glyphicon-ok-sign"></span> Resolve</button>
		
	</div>
	
   </div>
  </div>
 </div>
</body>

</html>
