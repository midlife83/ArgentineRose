function searchStudent()
{	
	var studentList = document.getElementById("student_list_div");
	var studentToFind = document.getElementById('studentSearch').value;
	for (var i=1; i<studentList.childNodes.length; i++)
	{
		if (studentList.childNodes[i].textContent.indexOf(studentToFind) != -1)
		{
			studentList.childNodes[i].click();
			return false;
			break;
		}
	}	
	alert('Not found');
	return false;
}

function checkAllCheckboxes(checkBox)
{	
	var $tab = $('#issuesTabContent'), $active = $tab.find('.tab-pane.active'), text = $active.find('p:hidden').text();	
	var table;
	if (text=="unresolved_tab")
	{
		table = document.getElementById("unresolved_tab_table");
		
	}
	else if (text=="resolved_tab")
	{
		table = document.getElementById("resolved_tab_table");
	}
	else
	{
		table = document.getElementById("all_tab_table");
	}
	
	var flag;
	if (checkBox.checked)
	{
		flag = true;		
	}
	else
	{
		flag = false;
	}
	
	for (var i = 1; i < table.rows.length; i++) 
	{
		table.rows[i].cells[0].firstChild.checked = flag;
	}
}

function changeToMarkAsUnresolved()
{
	document.getElementById("markIssueButton").firstChild.data= "Mark As Unresolved";
}

function changeToMarkAsResolved()
{
	document.getElementById("markIssueButton").firstChild.data= "Mark As Resolved";
}

function changeToMarkAsBothResolvedAndUnresolved()
{
	document.getElementById("markIssueButton").firstChild.data= "Mark As Unresolved/Resolved";
}

function updateIssuesTable()
{
	var $tab = $('#issuesTabContent'), $active = $tab.find('.tab-pane.active'), text = $active.find('p:hidden').text();
	if (text=="unresolved_tab")
	{
		updateUnresolvedIssueTable();
		document.getElementById("unresolved_table_checkbox").checked = false;
	}
	else if (text=="resolved_tab")
	{
		updateResolvedIssueTable();
		document.getElementById("resolved_table_checkbox").checked = false;
	}
	else
	{
		updateAllIssueTable();
		document.getElementById("all_table_checkbox").checked = false;
	}
	
	
}

function updateAllIssueTable()
{
	var unresolvedTable = document.getElementById("unresolved_tab_table");
	var resolvedTable = document.getElementById("resolved_tab_table");
	var allIssuesTable = document.getElementById("all_tab_table");
		
	var tableRows = allIssuesTable.rows;
	var x = tableRows.length;		
	var row, cells;
	for (var i = 0; i < x; i++) 
	{
		row = tableRows[i];
		cells = row.cells;			
		if (cells[0].childNodes[0].checked)
		{				
			for (var j = 0; j < unresolvedTable.rows.length; j++) 
			{
				if (unresolvedTable.rows[j].cells[1].childNodes[0].nodeValue == row.cells[1].childNodes[0].nodeValue)
				{
					unresolvedTable.rows[j].cells[0].firstChild.checked = true;
					j = unresolvedTable.rows.length;
				}
			}
			
			for (var j = 0; j < resolvedTable.rows.length; j++) 
			{
				if (resolvedTable.rows[j].cells[1].childNodes[0].nodeValue == row.cells[1].childNodes[0].nodeValue)
				{
					resolvedTable.rows[j].cells[0].firstChild.checked = true;
					j = resolvedTable.rows.length;
				}
			}
			
			row.className='success';
			row.cells[0].firstChild.checked = false;
			
			updateUnresolvedIssueTable();
			updateResolvedIssueTable();
		}
	}		
}

function updateUnresolvedIssueTable()
{
	var currentTable = document.getElementById("unresolved_tab_table");
	var targetTable = document.getElementById("resolved_tab_table");
	var allIssuesTable = document.getElementById("all_tab_table");
	var tableRows = currentTable.rows;
	var x = tableRows.length;		
	var row, cells;
	
	for (var i = 1; i < x; i++) 
	{
		row = tableRows[i];
		cells = row.cells;			
		if (cells[0].childNodes[0].checked)
		{				
			var clone = row.cloneNode(true);
			clone.className='success';
			clone.cells[0].firstChild.checked = false;
			var parentN = targetTable.rows[0].parentNode;		
			parentN.appendChild(clone);
			currentTable.deleteRow(i);				
			i--;
			x--;
			
			for (var r = 1, n = allIssuesTable.rows.length; r < n; r++) {
				if(allIssuesTable.rows[r].cells[1].childNodes[0].nodeValue == clone.cells[1].childNodes[0].nodeValue)
				{
					allIssuesTable.rows[r].className = 'success';
				}					
			}
		}
	}
		
}

function updateResolvedIssueTable()
{
	var currentTable = document.getElementById("resolved_tab_table");
	var targetTable = document.getElementById("unresolved_tab_table");
	var allIssuesTable = document.getElementById("all_tab_table");
	var tableRows = currentTable.rows;
	var x = tableRows.length;		
	var row, cells;
	
	for (var i = 1; i < x; i++) 
	{
		row = tableRows[i];
		cells = row.cells;			
		if (cells[0].childNodes[0].checked)
		{				
			var clone = row.cloneNode(true);
			clone.className='danger';
			clone.cells[0].firstChild.checked = false;
			var parentN = targetTable.rows[0].parentNode;	
			parentN.appendChild(clone);			
			currentTable.deleteRow(i);				
			i--;
			x--;
			
			for (var r = 1, n = allIssuesTable.rows.length; r < n; r++) {
				if(allIssuesTable.rows[r].cells[1].childNodes[0].nodeValue == clone.cells[1].childNodes[0].nodeValue)
				{
					allIssuesTable.rows[r].className = 'danger';
				}					
			}
		}
	}
	
			
}
<<<<<<< HEAD

function displayJeff(){
	// to make it highlight the correct name when you click on another student
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item';
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item active';

	document.getElementById('jeff').style.display='block';
	document.getElementById('alyssa').style.display='none';

}

function displayAlyssa(){
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item';
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item active';

	document.getElementById('alyssa').style.display='block';
	document.getElementById('jeff').style.display='none';
}
||||||| merged common ancestors
=======

function displayStudentTwo(){
	// to make it highlight the correct name when you click on another student
	document.getElementById("student-anchor-one").className='';
	document.getElementById("student-anchor-one").className='list-group-item';
	document.getElementById("student-anchor-two").className='';
	document.getElementById("student-anchor-two").className='list-group-item active';

	document.getElementById('student-two').style.display='block';
	document.getElementById('student-one').style.display='none';

}

function displayStudentOne(){
	document.getElementById("student-anchor-two").className='';
	document.getElementById("student-anchor-two").className='list-group-item';
	document.getElementById("student-anchor-one").className='';
	document.getElementById("student-anchor-one").className='list-group-item active';

	document.getElementById('student-one').style.display='block';
	document.getElementById('student-two').style.display='none';
}

function displayJeff(){
	// to make it highlight the correct name when you click on another student
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item';
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item active';
	document.getElementById("ashley-anchor").className='';
	document.getElementById("ashley-anchor").className='list-group-item';
	document.getElementById("tommy-anchor").className='';
	document.getElementById("tommy-anchor").className='list-group-item';
	document.getElementById("vincent-anchor").className='';
	document.getElementById("vincent-anchor").className='list-group-item';
	document.getElementById("john-anchor").className='';
	document.getElementById("john-anchor").className='list-group-item';
	document.getElementById("phoa-anchor").className='';
	document.getElementById("phoa-anchor").className='list-group-item';
	
	
	document.getElementById('jeff').style.display='block';
	document.getElementById('alyssa').style.display='none';
	document.getElementById('ashley').style.display='none';
	document.getElementById('tommy').style.display='none';
	document.getElementById('vincent').style.display='none';
	document.getElementById('john').style.display='none';
	document.getElementById('phoa').style.display='none';

}

function displayAlyssa(){
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item';
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item active';
	document.getElementById("ashley-anchor").className='';
	document.getElementById("ashley-anchor").className='list-group-item';
	document.getElementById("tommy-anchor").className='';
	document.getElementById("tommy-anchor").className='list-group-item';
	document.getElementById("vincent-anchor").className='';
	document.getElementById("vincent-anchor").className='list-group-item';
	document.getElementById("john-anchor").className='';
	document.getElementById("john-anchor").className='list-group-item';
	document.getElementById("phoa-anchor").className='';
	document.getElementById("phoa-anchor").className='list-group-item';

	document.getElementById('alyssa').style.display='block';
	document.getElementById('jeff').style.display='none';
	document.getElementById('ashley').style.display='none';
	document.getElementById('tommy').style.display='none';
	document.getElementById('vincent').style.display='none';
	document.getElementById('john').style.display='none';
	document.getElementById('phoa').style.display='none';
}

function displayAshley(){
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item';
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item';
	document.getElementById("ashley-anchor").className='';
	document.getElementById("ashley-anchor").className='list-group-item active';
	document.getElementById("tommy-anchor").className='';
	document.getElementById("tommy-anchor").className='list-group-item';
	document.getElementById("vincent-anchor").className='';
	document.getElementById("vincent-anchor").className='list-group-item';
	document.getElementById("john-anchor").className='';
	document.getElementById("john-anchor").className='list-group-item';
	document.getElementById("phoa-anchor").className='';
	document.getElementById("phoa-anchor").className='list-group-item';

	document.getElementById('ashley').style.display='block';
	document.getElementById('jeff').style.display='none';
	document.getElementById('alyssa').style.display='none';
	document.getElementById('tommy').style.display='none';
	document.getElementById('vincent').style.display='none';
	document.getElementById('john').style.display='none';
	document.getElementById('phoa').style.display='none';
}
function displayTommy(){
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item';
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item';
	document.getElementById("ashley-anchor").className='';
	document.getElementById("ashley-anchor").className='list-group-item';
	document.getElementById("tommy-anchor").className='';
	document.getElementById("tommy-anchor").className='list-group-item active';
	document.getElementById("vincent-anchor").className='';
	document.getElementById("vincent-anchor").className='list-group-item';
	document.getElementById("john-anchor").className='';
	document.getElementById("john-anchor").className='list-group-item';
	document.getElementById("phoa-anchor").className='';
	document.getElementById("phoa-anchor").className='list-group-item';

	document.getElementById('tommy').style.display='block';
	document.getElementById('jeff').style.display='none';
	document.getElementById('ashley').style.display='none';
	document.getElementById('alyssa').style.display='none';
	document.getElementById('vincent').style.display='none';
	document.getElementById('john').style.display='none';
	document.getElementById('phoa').style.display='none';
}
function displayVincent(){
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item';
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item';
	document.getElementById("ashley-anchor").className='';
	document.getElementById("ashley-anchor").className='list-group-item';
	document.getElementById("tommy-anchor").className='';
	document.getElementById("tommy-anchor").className='list-group-item';
	document.getElementById("vincent-anchor").className='';
	document.getElementById("vincent-anchor").className='list-group-item active';
	document.getElementById("john-anchor").className='';
	document.getElementById("john-anchor").className='list-group-item';
	document.getElementById("phoa-anchor").className='';
	document.getElementById("phoa-anchor").className='list-group-item';

	document.getElementById('vincent').style.display='block';
	document.getElementById('jeff').style.display='none';
	document.getElementById('ashley').style.display='none';
	document.getElementById('tommy').style.display='none';
	document.getElementById('alyssa').style.display='none';
	document.getElementById('john').style.display='none';
	document.getElementById('phoa').style.display='none';
}

function displayJohn(){
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item';
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item';
	document.getElementById("ashley-anchor").className='';
	document.getElementById("ashley-anchor").className='list-group-item';
	document.getElementById("tommy-anchor").className='';
	document.getElementById("tommy-anchor").className='list-group-item';
	document.getElementById("vincent-anchor").className='';
	document.getElementById("vincent-anchor").className='list-group-item';
	document.getElementById("john-anchor").className='';
	document.getElementById("john-anchor").className='list-group-item active';
	document.getElementById("phoa-anchor").className='';
	document.getElementById("phoa-anchor").className='list-group-item';

	document.getElementById('john').style.display='block';
	document.getElementById('jeff').style.display='none';
	document.getElementById('ashley').style.display='none';
	document.getElementById('tommy').style.display='none';
	document.getElementById('vincent').style.display='none';
	document.getElementById('alyssa').style.display='none';
	document.getElementById('phoa').style.display='none';
}
function displayPhoa(){
	document.getElementById("jeff-anchor").className='';
	document.getElementById("jeff-anchor").className='list-group-item';
	document.getElementById("alyssa-anchor").className='';
	document.getElementById("alyssa-anchor").className='list-group-item';
	document.getElementById("ashley-anchor").className='';
	document.getElementById("ashley-anchor").className='list-group-item';
	document.getElementById("tommy-anchor").className='';
	document.getElementById("tommy-anchor").className='list-group-item';
	document.getElementById("vincent-anchor").className='';
	document.getElementById("vincent-anchor").className='list-group-item';
	document.getElementById("john-anchor").className='';
	document.getElementById("john-anchor").className='list-group-item';
	document.getElementById("phoa-anchor").className='';
	document.getElementById("phoa-anchor").className='list-group-item active';

	document.getElementById('phoa').style.display='block';
	document.getElementById('jeff').style.display='none';
	document.getElementById('ashley').style.display='none';
	document.getElementById('tommy').style.display='none';
	document.getElementById('vincent').style.display='none';
	document.getElementById('john').style.display='none';
	document.getElementById('alyssa').style.display='none';
}
>>>>>>> newbranch
