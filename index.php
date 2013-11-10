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
        
        <li class="right" style="width:300px; text-align:center">
        <a href="#" id="recentActivityPopOver" rel="popover" data-original-title="Recent Activities">Recent Activities</a>
        </li>

   </ul>
  </div>
  
  <div id="recentActivity_popover_content_wrapper" style="display: none">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                                        <span class="badge pull-right"><font size="1">just now</font></span>
                                        <font size="1">Mike updated Issue #3252</font>
                  </a>
                  <a href="#" class="list-group-item">
                                        <span class="badge pull-right"><font size="1">23 mins ago</font></span>
                                        <font size="1">Julie commneted on Issue #2212</font>
                  </a>
                                  <a href="#" class="list-group-item">
                                        <span class="badge pull-right"><font size="1">48 mins ago</font></span>
                                        <font size="1">Ashley resolved Issue #1789</font>
                  </a>
                                  <a href="#" class="list-group-item">
                                        <span class="badge pull-right"><font size="1">1 hour ago</font></span>
                                        <font size="1">Tom created Issue #4912</font>
                  </a>
                                  <a href="#" class="list-group-item">
                                        <span class="badge pull-right"><font size="1">just now</font></span>
                                        <font size="1">Joseph edited Issue #2732</font>
                  </a>
                                  <a href="#" class="list-group-item">
                                        <span class="badge pull-right"><font size="1">just now</font></span>
                                        <font size="1">Michael resolved Issue #1821</font>
                  </a>
                </div>
                <div class="text-right">
                  <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                </div>
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
    <div class="col-sm-2" >
      <div class="list-group student-list">
        <a id="alyssa-anchor" class="list-group-item active" onclick="displayAlyssa()">Dunn, Alyssa</a>
        <a id="jeff-anchor" class="list-group-item" onclick="displayJeff()">Jung, Jeff</a>
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
    <div class="alyssa col-sm-10" id="alyssa">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Alyssa Dunn</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-2">
                <img src="assets/person.png">
            </div>
            <div class="col-sm-6">
              <h4>Name: Alyssa Dunn</h4>
              <h5>Student No: 12345678</h5>
            </div>
          </div>
          <div class="row">
            <table class="grades table table-bordered col-sm-4">
              <tr class="info">
               <td>Lab 1</td>
               <td>Quiz 1</td>
               <td>Lab 2</td>
               <td>Lab 3</td>
               <td>MT 1</td>
               <td>Lab 4</td>
               <td>Quiz 2</td>
               <td>MT 2</td>
              </tr>
              <tr>
              <td>70%</td>
              <td>66%</td>
              <td>50%</td>
              <td>60%</td>
              <td class="danger">33%</td>
              <td class="danger">30%</td>
              <td>60%</td>
              <td>60%</td>
            </table>
          </div>
          <h4>Issue History</h4>
          <div class="row student-issue-sort">
           <ul class="nav nav-pills col-md-8" style="margin-bottom:0px">
            <li class="active left">
             <a href="#unresolved_tab_student" data-toggle="tab">Unresolved</a>
            </li>

            <li class="left">
             <a href="#resolved_tab_student" data-toggle="tab">Resolved</a>
            </li>
           </ul>
          </div>
          <div class="tab-content" id="studentTabContent">
            <div class="tab-pane active" id="unresolved_tab_student">
             <table class="table table-hover table-striped" id="unresolved_tab_table_student">
              <tr class="info">
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
                        $lines=fgets($file); 
                        $first_char=$lines[0];
                        if ($first_char !='*' && $first_char !='^' && trim($lines) !='') 
                        { 
                          $split=explode( '|', $lines);
                          $name = str_replace(' ', '', $split[5]);
                            if ($name=='AlyssaDunn') { 
                            echo '<tr class="danger">'; 
                            foreach($split as $line) 
                            { 
                              echo '<td>'.$line. '</td>';
                            } 
                            echo '</tr>'; 
                          }
                        } 
                      } fclose($file); 
                    } 
              ?>
             </table>
          </div>
          <div class="tab-pane" id="resolved_tab_student">
           <table class="table table-hover table-striped" id="resolved_tab_table_student">
            <tr class="info">
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
                      $lines=fgets($file); 
                      $first_char=$lines[0];
                      if ($first_char !='*' && $first_char !='^' && trim($lines) !='') 
                      { 
                        $split=explode( '|', $lines);
                        $name = str_replace(' ', '', $split[5]);
                          if ($name=='AlyssaDunn') { 
                          echo '<tr class="success">'; 
                          foreach($split as $line) 
                          { 
                            echo '<td>'.$line. '</td>';
                          } 
                          echo '</tr>'; 
                        }
                      } 
                    } fclose($file); 
                  } 
            ?>
            
          </table>
          </div>
         </div>
        </div>
      </div>
    </div> 
    <div class="alyssa col-sm-10" id="jeff">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Jeff Jung</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-2">
                <img src="assets/person.png">
            </div>
            <div class="col-sm-6">
              <h4>Name: Jeff Jung</h4>
              <h5>Student No: 2342342</h5>
            </div>
          </div>
          <div class="row">
            <table class="grades table table-bordered col-sm-4">
              <tr class="info">
               <td>Lab 1</td>
               <td>Quiz 1</td>
               <td>Lab 2</td>
               <td>Lab 3</td>
               <td>MT 1</td>
               <td>Lab 4</td>
               <td>Quiz 2</td>
               <td>MT 2</td>
              </tr>
              <tr>
              <td class="danger">40%</td>
              <td>66%</td>
              <td>50%</td>
              <td>60%</td>
              <td class="danger">33%</td>
              <td class="danger">30%</td>
              <td>60%</td>
              <td>60%</td>
            </table>
          </div>
          <h4>Issue History</h4>
          <div class="row student-issue-sort">
           <ul class="nav nav-pills col-md-8" style="margin-bottom:0px">
            <li class="active left">
             <a href="#unresolved_tab_student_jeff" data-toggle="tab">Unresolved</a>
            </li>

            <li class="left">
             <a href="#resolved_tab_student_jeff" data-toggle="tab">Resolved</a>
            </li>
           </ul>
          </div>
          <div class="tab-content" id="studentTabContent">
            <div class="tab-pane active" id="unresolved_tab_student_jeff">
             <table class="table table-hover table-striped" id="unresolved_tab_table_student">
              <tr class="info">
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
                        $lines=fgets($file); 
                        $first_char=$lines[0];
                        if ($first_char !='*' && $first_char !='^' && trim($lines) !='') 
                        { 
                          $split=explode( '|', $lines);
                          $name = str_replace(' ', '', $split[5]);
                            if ($name=='JeffJung') { 
                            echo '<tr class="danger">'; 
                            foreach($split as $line) 
                            { 
                              echo '<td>'.$line. '</td>';
                            } 
                            echo '</tr>'; 
                          }
                        } 
                      } fclose($file); 
                    } 
              ?>
             </table>
          </div>
          <div class="tab-pane" id="resolved_tab_student_jeff">
           <table class="table table-hover table-striped" id="resolved_tab_table_student">
            <tr class="info">
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
                      $lines=fgets($file); 
                      $first_char=$lines[0];
                      if ($first_char !='*' && $first_char !='^' && trim($lines) !='') 
                      { 
                        $split=explode( '|', $lines);
                        $name = str_replace(' ', '', $split[5]);
                          if ($name=='JeffJung') { 
                          echo '<tr class="success">'; 
                          foreach($split as $line) 
                          { 
                            echo '<td>'.$line. '</td>';
                          } 
                          echo '</tr>'; 
                        }
                      } 
                    } fclose($file); 
                  } 
            ?>
          </table>
          </div>
         </div>
        </div>
      </div>
    </div>    
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
  <script src="vendor/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="js/app.js" type="text/javascript"></script>
  <script>  
        $(function ()  
        { 
                $("#recentActivityPopOver").popover({placement:'bottom', trigger: 'click', html:true,
                content: function() {
          return $('#recentActivity_popover_content_wrapper').html();
        }});  
        });  
  </script>  
 </div>
</body>

</html>
