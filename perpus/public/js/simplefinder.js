
	function filterFunction(){
		var inp, filter, table, tr, td, i, textval;
		inp = document.getElementById("searchInput"); 
		filter = inp.value.toUpperCase();
		console.log(filter);
		table = document.getElementById("datatable");
		console.log(table);
		tr = table.getElementsByTagName("tr");
		for (i = 1; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if(td)
			{
				textval = td.textContent || td.innerText;
				if(textval.toUpperCase().indexOf(filter) > -1)
				{
				tr[i].style.display = "";
				}
			else
				{
					tr[i].style.display = "none";
				}
			}
		}
	}
