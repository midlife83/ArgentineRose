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
    <div class="col-lg-2" >
      <div class="list-group student-list">
        <a href="#" class="list-group-item active">Cras justo odio</a>
        <a href="#" class="list-group-item">Dapibus ac facilis</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac cons</a>
        <a href="#" class="list-group-item">Vestibulum</a>
        <a href="#" class="list-group-item">Dapibus ac facilis</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac cons</a>
        <a href="#" class="list-group-item">Vestibulum</a>
                <a href="#" class="list-group-item">Dapibus ac facilis</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac cons</a>
                <a href="#" class="list-group-item">Dapibus ac facilis</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac cons</a>
        <a href="#" class="list-group-item">Vestibulum</a>
        <a href="#" class="list-group-item">Vestibulum</a>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Student Name</h3>
        </div>
        <div class="panel-body">
          Student Info Here
        </div>
      </div>
    </div>
    <div class="col-lg-2" style="border: 2px solid yellow">Sidebar</div>
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

    <div class="container" id="issuesTabContainer">
     <div class="row">
      <ul class="nav nav-pills col-md-8" style="margin-bottom:0px">
       <li class="active left">
        <a href="#unresolved_tab" data-toggle="tab" onClick="changeToMarkAsResolved()">Unresolved</a>
       </li>

       <li class="left">
        <a href="#resolved_tab" data-toggle="tab" onClick="changeToMarkAsUnresolved()">Resolved</a>
       </li>

       <li class="left">
        <a href="#all_tab" data-toggle="tab" onClick="changeToMarkAsBothResolvedAndUnresolved()">All</a>
       </li>
      </ul>
	  
      <button type="button" class="btn btn-default col-md-4" style="float:right;margin-bottom:0px; margin-top:5px; width:200px" id="markIssueButton" onclick="updateIssuesTable()">Mark As Resolved
	  </button>
     </div>


     <div class="tab-content" id="issuesTabContent">
      <div class="tab-pane active" id="unresolved_tab">
       <table class="table table-hover table-striped" id="unresolved_tab_table">
        <tr class="info">
         <td>
          <input type="checkbox" id="unresolved_table_checkbox" autocomplete="off" onclick="checkAllCheckboxes(this)">
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
        <?php include("populateUnresolvedIssues.php"); ?> 
       </table>
	   <p style="display: none">unresolved_tab</p>
      </div>

      <div class="tab-pane" id="resolved_tab">
       <table class="table table-hover table-striped" id="resolved_tab_table">
        <tr class="info">
         <td>
          <input type="checkbox" id="resolved_table_checkbox" autocomplete="off" onclick="checkAllCheckboxes(this)">
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
		<?php include("populateResolvedIssues.php"); ?> 
       </table>
	   <p style="display: none">resolved_tab</p>
      </div>

      <div class="tab-pane" id="all_tab">
       <table class="table table-hover table-striped"  id="all_tab_table">
        <tr class="info">
         <td>
          <input type="checkbox" id="all_table_checkbox" autocomplete="off" onclick="checkAllCheckboxes(this)">
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
        <?php include("populateAllIssues.php"); ?>
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
	<form class="form-horizontal" role="form" method="POST" action="single_issue.php"
      target='_blank'>
    <div class="panel panel-default">
     <div class="panel-body">
      
       <div class="form-group">
        <label for="studentName" class="col-sm-2 control-label">Student Name</label>
        <div class="col-sm-4">
         <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Student Name">
        </div>
       </div>

       <div class="form-group">
        <label for="studentNumber" class="col-sm-2 control-label">Student Number</label>
        <div class="col-sm-4">
         <input type="text" class="form-control" id="studentNumber" maxlength="8" name="studentNumber"
         placeholder="Student Number">
        </div>
       </div>

       <div class="form-group">
        <label for="section" class="col-sm-2 control-label">Section</label>
        <div class="col-sm-4">
         <select id="section" name="section" class="form-control">
		  <option>101</option>
          <option>102</option>
          <option>201</option>
		  <option>202</option>
		  <option>L1A</option>
          <option>L1B</option>
          <option>L1C</option>
		  <option>L2A</option>
          <option>L2B</option>
          <option>L3C</option>
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
     </div>	 
    </div>
	<div class="row" align="right">
        <button type="submit" class="btn btn-default">Submit</button>
		<button type="reset" class="btn btn-default">Reset</button>
   </div>
	</form>
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
