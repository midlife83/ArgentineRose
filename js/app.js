function updateIssuesTable()
{
	if ($('#issuesTabContent').find('.nav-pills .active').text()=="Unresolved")
	{
		updateUnresolvedIssueTable();
	}
	else
	{
		updateResolvedIssueTable();
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
