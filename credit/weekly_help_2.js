var MonthAndDates={};
MonthAndDates['Jan']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
MonthAndDates['Mar']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
MonthAndDates['May']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
MonthAndDates['Jul']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
MonthAndDates['Aug']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
MonthAndDates['Oct']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
MonthAndDates['Dec']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
MonthAndDates['Apr']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'];
MonthAndDates['Jun']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'];
MonthAndDates['Sep']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'];
MonthAndDates['Nov']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'];

function publish_n()
{
	alert("com");
	var y = document.getElementById("year");
	var y_s=y.options[y.selectedIndex].value;
	var m = document.getElementById("year");
	var m_s=m.options[m.selectedIndex].value;
	var d = document.getElementById("year");
	var d_s=d.options[d.selectedIndex].value;
	var flag=1;
	if(d_s<10)
		d_s = "0"+d_s;
	if(m_s=="Jan")
		m_s="01":
	elseif(m_s=="Feb")
		m_s="02";
	elseif(m_s=="Mar")
		m_s="03";
	elseif(m_s=="Apr")
		m_s="04";
	elseif(m_s=="May")
		m_s="05";
	elseif(m_s=="Jun")
		m_s="06";
	elseif(m_s=="Jul")
		m_s="07";
	elseif(m_s=="Aug")
		m_s="08";
	elseif(m_s=="Sep")
		m_s="09";
	elseif(m_s=="Oct")
		m_s="10";
	elseif(m_s=="Nov")
		m_s="11";
	elseif(m_s=="Dec")
		m_s="12";
	else
		flag=0;
	var date = d_s+"-"+m_s+"-"+y_s;
	if(flag==1)
	{
		alert("going");
		$("#tab").hide();
		$("#not").hide();
			$.post("./wc/notice.php",{dat:date},function(text)
			{
				$("#not_are").html(text);
			});
	}
}
function load_mon()
{
	document.getElementById("month").style.display="block";
	var Y=document.getElementById("year");
	var yr=Y.options[Y.selectedIndex].value;
	if(((yr%4==0)&&(yr%100!=0))||(yr%4==0)&&((yr%100==0)&&(yr%400==0)))
		MonthAndDates['Feb']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29'];
	else
		MonthAndDates['Feb']=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28'];

}
function ChangeDateList()
{
	document.getElementById("date").style.display="block";
	var MonthList=document.getElementById("month");
	var DateList=document.getElementById("date");
	var selMonth=MonthList.options[MonthList.selectedIndex].value;
	if(selMonth=="")
	{
		document.getElementById("date").style.display="none";
	}
	while(DateList.options.length)
	{
		DateList.remove(0);
	}
	var months=MonthAndDates[selMonth];
	if(months)
	{
		for(var i=0;i<months.length;i++)
		{
			var Month=new Option(months[i],i);
			DateList.options.add(Month);
		}
	}
}
function Confirm()
{
	var val=confirm("Are you want Submit:");
	if(val==true)
	{
		document.getElementById("#submition_money").submit();
	}
}
function load_div()
{
	var batchList=document.getElementById("batch");
	var selBatch=batchList.options[batchList.selectedIndex].value;
	var content = '<table>';
	if(selBatch=="p1")
	{
		content +='<tr><td colspan="2"><input type="hidden" name="batch_name" value="Puc-1"/></td></tr>';
		
		content += '<tr><td>Lamda-1</td><td><input type="text" name="lamda-1"/></td></tr>';
		content += '<tr><td>Lamda-2</td><td><input type="text" name="lamda-2"/></td></tr>';
		content += '<tr><td>Lamda-3</td><td><input type="text" name="lamda-3"/></td></tr>';
		content += '<tr><td>Lamda-4</td><td><input type="text" name="lamda-4"/></td></tr>';
		content += '<tr><td>Lamda-5</td><td><input type="text" name="lamda-5"/></td></tr>';
		content += '<tr><td>Lamda-6</td><td><input type="text" name="lamda-6"/></td></tr>';
		content += '<tr><td>Lamda-7</td><td><input type="text" name="lamda-7"/></td></tr>';
		content += '<tr><td>Lamda-8</td><td><input type="text" name="lamda-8"/></td></tr>';
		content += '<tr><td>Lamda-9</td><td><input type="text" name="lamda-9"/></td></tr>';
		content += '<tr><td>Lamda-10</td><td><input type="text" name="lamda-10"/></td></tr>';
		content += '<tr><td>Lamda-11</td><td><input type="text" name="lamda-11"/></td></tr>';
		content += '<tr><td>Lamda-12</td><td><input type="text" name="lamda-12"/></td></tr>';
	
		content += '<tr><td>Mue-1</td><td><input type="text" name="mue-1"/></td></tr>';
		content += '<tr><td>Mue-2</td><td><input type="text" name="mue-2"/></td></tr>';
		content += '<tr><td>Mue-3</td><td><input type="text" name="mue-3"/></td></tr>';
		content += '<tr><td>Mue-4</td><td><input type="text" name="mue-4"/></td></tr>';
		content += '<tr><td>Mue-5</td><td><input type="text" name="mue-5"/></td></tr>';
	
		content += '<tr><td>Omega-10</td><td><input type="text" name="omega-10"/></td></tr>';
		content += '<tr><td>Omega-11</td><td><input type="text" name="omega-11"/></td></tr>';
		content += '<tr><td>Omega-12</td><td><input type="text" name="omega-12"/></td></tr>';
		content += '<tr><td colspan="2"><input type="button" onClick="Confirm();" value="Submit Money Details"/></td></tr>';
		
	}
	else if(selBatch=="p2")
	{
		content +='<tr><td colspan="2"><input type="hidden" name="batch_name" value="Puc-2"/></td></tr>';
				
		content += '<tr><td>Kappa-1</td><td><input type="text" name="kappa-1"/></td></tr>';
		content += '<tr><td>Kappa-2</td><td><input type="text" name="kappa-2"/></td></tr>';
		content += '<tr><td>Kappa-3</td><td><input type="text" name="kappa-3"/></td></tr>';
		content += '<tr><td>Kappa-4</td><td><input type="text" name="kappa-4"/></td></tr>';
		content += '<tr><td>Kappa-5</td><td><input type="text" name="kappa-5"/></td></tr>';
		content += '<tr><td>Kappa-6</td><td><input type="text" name="kappa-6"/></td></tr>';
		content += '<tr><td>Kappa-7</td><td><input type="text" name="kappa-7"/></td></tr>';
		content += '<tr><td>Kappa-8</td><td><input type="text" name="kappa-8"/></td></tr>';
		content += '<tr><td>Kappa-9</td><td><input type="text" name="kappa-9"/></td></tr>';
		content += '<tr><td>Kappa-10</td><td><input type="text" name="kappa-10"/></td></tr>';
		content += '<tr><td>Kappa-11</td><td><input type="text" name="kappa-11"/></td></tr>';
		content += '<tr><td>Kappa-12</td><td><input type="text" name="kappa-12"/></td></tr>';
	
		content += '<tr><td>Omega-1</td><td><input type="text" name="omega-1"/></td></tr>';
		content += '<tr><td>Omega-2</td><td><input type="text" name="omega-2"/></td></tr>';
		content += '<tr><td>Omega-3</td><td><input type="text" name="omega-3"/></td></tr>';
		content += '<tr><td>Omega-4</td><td><input type="text" name="omega-4"/></td></tr>';
		content += '<tr><td>Omega-5</td><td><input type="text" name="omega-5"/></td></tr>';
		content += '<tr><td>Omega-6</td><td><input type="text" name="omega-6"/></td></tr>';
		content += '<tr><td>Omega-7</td><td><input type="text" name="omega-7"/></td></tr>';
		content += '<tr><td>Omega-8</td><td><input type="text" name="omega-8"/></td></tr>';
		content += '<tr><td>Omega-9</td><td><input type="text" name="omega-9"/></td></tr>';
		content += '<tr><td>Omega-10</td><td><input type="text" name="omega-10"/></td></tr>';
		content += '<tr><td colspan="2"><input type="button" onClick="Confirm();" value="Submit Money Details"/></td></tr>';
	}
	else if(selBatch=="e1")
	{
		content +='<tr><td colspan="2"><input type="hidden" name="batch_name" value="Engg-1"/></td></tr>';
		
		content += '<tr><td>CG-1</td><td><input type="text" name="CG-1"/></td></tr>';
		content += '<tr><td>CG-2</td><td><input type="text" name="CG-2"/></td></tr>';
		content += '<tr><td>CG-3</td><td><input type="text" name="CG-3"/></td></tr>';
		content += '<tr><td>CG-4</td><td><input type="text" name="CG-4"/></td></tr>';
		content += '<tr><td>CF-1</td><td><input type="text" name="CF-1"/></td></tr>';
		content += '<tr><td>CF-2</td><td><input type="text" name="CF-2"/></td></tr>';
		content += '<tr><td>CF-3</td><td><input type="text" name="CF-3"/></td></tr>';
	
		content += '<tr><td>CS-1</td><td><input type="text" name="CS-1"/></td></tr>';
		content += '<tr><td>CS-2</td><td><input type="text" name="CS-2"/></td></tr>';
		content += '<tr><td>CS-3</td><td><input type="text" name="CS-3"/></td></tr>';
		content += '<tr><td>CS-4</td><td><input type="text" name="CS-4"/></td></tr>';
		content += '<tr><td>CT-1</td><td><input type="text" name="CT-1"/></td></tr>';
		content += '<tr><td>CT-2</td><td><input type="text" name="CT-2"/></td></tr>';
		content += '<tr><td>CT-3</td><td><input type="text" name="CT-3"/></td></tr>';
		content += '<tr><td colspan="2"><input type="button" onClick="Confirm();" value="Submit Money Details"/></td></tr>';
	}
	else if(selBatch=="e2")
	{
		content +='<tr><td colspan="2"><input type="hidden" name="batch_name" value="Engg-2"/></td></tr>';

		content += '<tr><td>CSE-1</td><td><input type="text" name="CSE-1"/></td></tr>';
		content += '<tr><td>CSE-2</td><td><input type="text" name="CSE-2"/></td></tr>';
		content += '<tr><td>CSE-3</td><td><input type="text" name="CSE-3"/></td></tr>';
		
		content += '<tr><td>ECE-1</td><td><input type="text" name="ECE-1"/></td></tr>';
		content += '<tr><td>ECE-2</td><td><input type="text" name="ECE-2"/></td></tr>';
		content += '<tr><td>ECE-3</td><td><input type="text" name="ECE-3"/></td></tr>';

		content += '<tr><td>MECH-1</td><td><input type="text" name="MECH-1"/></td></tr>';
		content += '<tr><td>MECH-2</td><td><input type="text" name="MECH-2"/></td></tr>';
		content += '<tr><td>MECH-3</td><td><input type="text" name="MECH-3"/></td></tr>';
	
		content += '<tr><td>CIVIL-1</td><td><input type="text" name="CIVIL-1"/></td></tr>';
		content += '<tr><td>CIVIL-2</td><td><input type="text" name="CIVIL-2"/></td></tr>';
		content += '<tr><td>CIVIL-3</td><td><input type="text" name="CIVIL-3"/></td></tr>';
	
		content += '<tr><td>MME-1</td><td><input type="text" name="MME-1"/></td></tr>';
		content += '<tr><td>MME-2</td><td><input type="text" name="MME-2"/></td></tr>';
	
		content += '<tr><td>CHEM-1</td><td><input type="text" name="CHEM-1"/></td></tr>';
		content += '<tr><td colspan="2"><input type="button" onClick="Confirm();" value="Submit Money Details"/></td></tr>';
		
	}
	else if(selBatch=="e3")
	{
		content +='<tr><td colspan="2"><input type="hidden" name="batch_name" value="Engg-3"/></td></tr>';
		
		content += '<tr><td>CSE-1</td><td><input type="text" name="CSE-1"/></td></tr>';
		content += '<tr><td>CSE-2</td><td><input type="text" name="CSE-2"/></td></tr>';
		content += '<tr><td>CSE-3</td><td><input type="text" name="CSE-3"/></td></tr>';
		content += '<tr><td>CSE-4</td><td><input type="text" name="CSE-4"/></td></tr>';
		content += '<tr><td>CSE-5</td><td><input type="text" name="CSE-5"/></td></tr>';
		content += '<tr><td>CSE-6</td><td><input type="text" name="CSE-6"/></td></tr>';
	
		content += '<tr><td>ECE-1</td><td><input type="text" name="ECE-1"/></td></tr>';
		content += '<tr><td>ECE-2</td><td><input type="text" name="ECE-2"/></td></tr>';
		content += '<tr><td>ECE-3</td><td><input type="text" name="ECE-3"/></td></tr>';
		content += '<tr><td>ECE-4</td><td><input type="text" name="ECE-4"/></td></tr>';
		content += '<tr><td>ECE-5</td><td><input type="text" name="ECE-5"/></td></tr>';
		content += '<tr><td>ECE-6</td><td><input type="text" name="ECE-6"/></td></tr>';
	
		content += '<tr><td>MECH-1</td><td><input type="text" name="MECH-1"/></td></tr>';
		content += '<tr><td>MECH-2</td><td><input type="text" name="MECH-2"/></td></tr>';
		content += '<tr><td>MECH-3</td><td><input type="text" name="MECH-3"/></td></tr>';
		content += '<tr><td>MECH-4</td><td><input type="text" name="MECH-4"/></td></tr>';
		content += '<tr><td>MECH-5</td><td><input type="text" name="MECH-5"/></td></tr>';
	
		content += '<tr><td>CIVIL-1</td><td><input type="text" name="CIVIL-1"/></td></tr>';
		content += '<tr><td>CIVIL-2</td><td><input type="text" name="CIVIL-2"/></td></tr>';
		content += '<tr><td>CIVIL-3</td><td><input type="text" name="CIVIL-3"/></td></tr>';
		content += '<tr><td>CIVIL-4</td><td><input type="text" name="CIVIL-4"/></td></tr>';
		content += '<tr><td>CIVIL-5</td><td><input type="text" name="CIVIL-5"/></td></tr>';
	
		content += '<tr><td>MME-1</td><td><input type="text" name="MME-1"/></td></tr>';
		content += '<tr><td>MME-2</td><td><input type="text" name="MME-2"/></td></tr>';
		content += '<tr><td>MME-3</td><td><input type="text" name="MME-3"/></td></tr>';
		content += '<tr><td>MME-4</td><td><input type="text" name="MME-4"/></td></tr>';
	
		content += '<tr><td>CHEM-1</td><td><input type="text" name="CHEM-1"/></td></tr>';
		content += '<tr><td>CHEM-2</td><td><input type="text" name="CHEM-2"/></td></tr>';
		content += '<tr><td colspan="2"><input type="button" onClick="Confirm();" value="Submit Money Details"/></td></tr>';
		
	}
	else if(selBatch=="e4")
	{
		content +='<tr><td colspan="2"><input type="hidden" name="batch_name" value="Engg-4"/></td></tr>';
		
		content += '<tr><td>CSE-1</td><td><input type="text" name="CSE-1"/></td></tr>';
		content += '<tr><td>CSE-2</td><td><input type="text" name="CSE-2"/></td></tr>';
		content += '<tr><td>CSE-3</td><td><input type="text" name="CSE-3"/></td></tr>';
		content += '<tr><td>CSE-4</td><td><input type="text" name="CSE-4"/></td></tr>';
		content += '<tr><td>CSE-5</td><td><input type="text" name="CSE-5"/></td></tr>';
		content += '<tr><td>CSE-6</td><td><input type="text" name="CSE-6"/></td></tr>';
		
		content += '<tr><td>ECE-1</td><td><input type="text" name="ECE-1"/></td></tr>';
		content += '<tr><td>ECE-2</td><td><input type="text" name="ECE-2"/></td></tr>';
		content += '<tr><td>ECE-3</td><td><input type="text" name="ECE-3"/></td></tr>';
		content += '<tr><td>ECE-4</td><td><input type="text" name="ECE-4"/></td></tr>';
		content += '<tr><td>ECE-5</td><td><input type="text" name="ECE-5"/></td></tr>';
		content += '<tr><td>ECE-6</td><td><input type="text" name="ECE-6"/></td></tr>';
	
		content += '<tr><td>MECH-1</td><td><input type="text" name="MECH-1"/></td></tr>';
		content += '<tr><td>MECH-2</td><td><input type="text" name="MECH-2"/></td></tr>';
		content += '<tr><td>MECH-3</td><td><input type="text" name="MECH-3"/></td></tr>';
		content += '<tr><td>MECH-4</td><td><input type="text" name="MECH-4"/></td></tr>';
		content += '<tr><td>MECH-5</td><td><input type="text" name="MECH-5"/></td></tr>';
		content += '<tr><td>MECH-6</td><td><input type="text" name="MECH-6"/></td></tr>';
	
		content += '<tr><td>CIVIL-1</td><td><input type="text" name="CIVIL-1"/></td></tr>';
		content += '<tr><td>CIVIL-2</td><td><input type="text" name="CIVIL-2"/></td></tr>';
		content += '<tr><td>CIVIL-3</td><td><input type="text" name="CIVIL-3"/></td></tr>';
		content += '<tr><td>CIVIL-4</td><td><input type="text" name="CIVIL-4"/></td></tr>';
		content += '<tr><td>CIVIL-5</td><td><input type="text" name="CIVIL-5"/></td></tr>';
		content += '<tr><td>CIVIL-6</td><td><input type="text" name="CIVIL-6"/></td></tr>';
	
		content += '<tr><td>MME-1</td><td><input type="text" name="MME-1"/></td></tr>';
		content += '<tr><td>MME-2</td><td><input type="text" name="MME-2"/></td></tr>';
		content += '<tr><td>MME-3</td><td><input type="text" name="MME-3"/></td></tr>';
		content += '<tr><td>MME-4</td><td><input type="text" name="MME-4"/></td></tr>';
	
		content += '<tr><td>CHEM-1</td><td><input type="text" name="CHEM-1"/></td></tr>';
		content += '<tr><td>CHEM-2</td><td><input type="text" name="CHEM-2"/></td></tr>';
		content += '<tr><td>CHEM-3</td><td><input type="text" name="CHEM-3"/></td></tr>';
		content += '<tr><td colspan="2"><input type="button" onClick="Confirm();" value="Submit Money Details"/></td></tr>';
	}
	else
	{
		content +='<tr><td>Please Select Batch</td></tr>';
	}
	content += '</table>';
	document.getElementById("container_div").innerHTML=content;

}
