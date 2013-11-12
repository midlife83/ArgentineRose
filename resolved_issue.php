<?php error_reporting(0); ?>

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
    <span class="btn-danger">
    <?php session_start(); 
	

		$name=$_SESSION['name']; 
		$number=$_SESSION['number']; 
		$section=$_SESSION['section'];
		$title=$_SESSION['title']; 
		$description=$_SESSION['description'];
		$solution=$_SESSION['solution'];  
		$assignment=$_SESSION['assignment']; 
		$label=$_SESSION['label'];
		$comment=$_SESSION['comment'];
		$ref=$_SESSION['ref'];
		$isFollowed=$_SESSION['isFollowed'];
	
	?>
    </span>
    <h2 style="margin:0px">
     Issue #1037:
     <?php echo $title. "<br>"; ?>
    </h2>
</div>

   <div class="panel-body" id="opened_issue_tab">
    
    <div class="row">
     <div class="col-md-8">
	  <p>
		Reported by Alyssa Dunn on Oct 17th 2013 2:13pm
      </p>
	  <p>
        Resolved by 
        <?php echo $assignment; ?>
         on Oct 19th 2013 7:13am
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
       Status: <font color="green">Resolved</font>
      </h3>
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
    <br>

    <div class="btn-group">
     <button type="button" class="btn btn-default" onclick="window.location.href='change_following.php'">
<?php
     if($isFollowed==0){echo "Follow";}else{echo "Unfollow";}
?>     
</button>
    </div>

    <hr>

    <div class="container">     

	<div class="row" style="margin-left:0px">
	 <div class="col-sm-4" style="padding:0px">
		 <h3 style="margin-top:0px; margin-left:0px">
		  Description:
		 </h3>
		 <p>
		  <?php echo $description. "<br>"; ?>
		 </p>
	 </div>
	 <div class="col-sm-6" style="padding:0px">
		 <h3 style="margin-top:0px; margin-left:0px">
		  Solution:
		 </h3>
		 <p>
		  <?php echo $solution. "<br>"; ?>
		 </p>
	 </div>
	</div>
	<br>

     <h3>
      Comments:
     </h3>
<?php if($comment){ ?>

     <img src="assets/person.png" alt="Meghan Allen">
     <table>
      <tr>
       <td>
        <font size="1">
         <strong>Alyssa Dunn</strong>
        </font>
        <font color="gray">1 second ago</font>
       </td>
      </tr>

      <tr>
       <td>
       <?php echo $comment. "<br>"; ?>
       </td>
      </tr>
     </table>

<?php }else if(!$ref){ ?>	

	 <img src="assets/person.png" alt="James Bond">
     <table>
     <tr>
     <td width="730">
     <strong><font size="1">  </font></strong><font size="1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Me</strong></font><font color="gray"></font>
       </td>
      </tr>   
      
	<form class="form-horizontal" role="form" method="POST" action="comment_handler.php">
            
      <tr>
       <td>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="comment" name="comment" placeholder="Write a comment">
        </div>
</td>
      </tr>

<tr>   
<td align="right">          
	<button type="submit" class="btn btn-default">Comment</button>
    </form>
    <td>
    </tr>
     </table>
	 
<?php }else {?>	 

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
       <td>
        Can someone email the student and get them to come to my office next Tuesday?
       </td>
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
        <font color="gray">2 hours 12 minutes ago
        </font>
       </td>
      </tr>

      <tr>
       <td>
        Sure. I just emailed. Will inform you once she reponds.
       </td>
      </tr>
     </table>
     
<?php }?>

  </div>
 </div>
</body>

</html>
