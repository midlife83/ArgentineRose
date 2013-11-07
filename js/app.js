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
	}
	else if (text=="resolved_tab")
	{
		updateResolvedIssueTable();
	}
	else
	{
		updateAllIssueTable();
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
					unresolvedTable.rows[j].cells[0].childNodes[0].checked = true;
					j = unresolvedTable.rows.length;
				}
			}
			
			for (var j = 0; j < resolvedTable.rows.length; j++) 
			{
				if (resolvedTable.rows[j].cells[1].childNodes[0].nodeValue == row.cells[1].childNodes[0].nodeValue)
				{
					resolvedTable.rows[j].cells[0].childNodes[0].checked = true;
					j = resolvedTable.rows.length;
				}
			}
			
			row.className='success';
			row.cells[0].childNodes[0].checked = false;
			
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
	for (var i = 0; i < x; i++) 
	{
		row = tableRows[i];
		cells = row.cells;			
		if (cells[0].childNodes[0].checked)
		{				
			var clone = row.cloneNode(true);
			clone.className='success';
			clone.cells[0].childNodes[0].checked = false;
			var parentN = targetTable.rows[1].parentNode;
			parentN.insertBefore(clone, targetTable.rows[1]);				
			currentTable.deleteRow(i);				
			i--;
			x--;
			
			for (var r = 0, n = allIssuesTable.rows.length; r < n; r++) {
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
	for (var i = 0; i < x; i++) 
	{
		row = tableRows[i];
		cells = row.cells;			
		if (cells[0].childNodes[0].checked)
		{				
			var clone = row.cloneNode(true);
			clone.className='danger';
			clone.cells[0].childNodes[0].checked = false;
			var parentN = targetTable.rows[1].parentNode;
			parentN.insertBefore(clone, targetTable.rows[1]);				
			currentTable.deleteRow(i);				
			i--;
			x--;
			
			for (var r = 0, n = allIssuesTable.rows.length; r < n; r++) {
				if(allIssuesTable.rows[r].cells[1].childNodes[0].nodeValue == clone.cells[1].childNodes[0].nodeValue)
				{
					allIssuesTable.rows[r].className = 'danger';
				}					
			}
		}
	}
}
