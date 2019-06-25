var ctgid;
ctgid=0;

function createcategory()
{
	var inpctgid, inpctgname;
	var inp = document.getElementById('jobdesc');
	var optinp = inp.getElementsByTagName('option');
	inpctgid = inp.value;
	for(var i=0; i<optinp.length;i++)
	{
		if(optinp[i].value == inpctgid)
		{
			inpctgname = optinp[i].innerHTML;
		}
	}
	
	//console.log(inpctgid);
	//console.log(inpctgname);
	
	var pnt = document.getElementById('selectedcategoryarea'); //get base div
	var existing = pnt.getElementsByTagName('input');
	var addflag;
	addflag=1;
	for(var i=0; i<existing.length;i++)
	{
		if(existing[i].value == inpctgid)
		{
			addflag=0;
		}
	}
	if(addflag == 1)
	{
		ctgid++;
		
		var ctg = document.createElement('div');// div row
		ctg.id = "selectedcategory_" + ctgid;
		ctg.classList.add("row");
		ctg.classList.add("align-items-center");
		pnt.appendChild(ctg);
		var brk = document.createElement('br');
		ctg.appendChild(brk);
		ctg.appendChild(brk);
		var cnt = document.createElement('input'); //hidden id
		cnt.type= "hidden";
		cnt.name= "bookcategories[]";
		cnt.value=inpctgid;
		ctg.appendChild(cnt);
		var clm1 = document.createElement('div'); //col1
		clm1.classList.add("col-md-3");
		ctg.appendChild(clm1);
		var name = document.createElement('h6');
		name.innerHTML = inpctgname;
		clm1.appendChild(name);
		var clm2 = document.createElement('div'); //col2
		clm2.classList.add("col-md-4");
		ctg.appendChild(clm2);
		var btn = document.createElement('button');
		btn.id="selectedcategory_" + ctgid;
		btn.type= "button";
		btn.classList.add("btn");
		btn.classList.add("btn-primary");
		btn.innerHTML = "Remove";
		clm2.appendChild(btn);
		btn.addEventListener("click", function(){
				console.log(this.id);
				var ement = document.getElementById(this.id);
				ement.parentNode.removeChild(ement);
		});
		
		
	}
}