function feed(thisform)
{
with(thisform){

		if((aa.value=="" && bb.value=="")&&cc.value=="")
			{
				document.getElementById('aa').style.border="1px solid red";

				document.getElementById('bb').style.border="1px solid red";

				document.getElementById('cc').style.border="1px solid red";
	
			return false;

			}
		
		if(aa.value=="" || aa.value<3)
			{
	
			document.getElementById('a1').style.border="1px solid red";
	
			document.getElementById('a2').style.border="1px solid #CFCFCF";
	
			document.getElementById('a3').style.border="1px solid #CFCFCF";
	
			return false;
			
			}
		
		if(bb.value=="" || bb.value<8)
			{

				document.getElementById('a1').style.border="1px solid #CFCFCF";

				document.getElementById('a2').style.border="1px solid red";
	
			document.getElementById('a3').style.border="1px solid #CFCFCF";

				return false;

			}
		
		if(cc.value=="" || cc.value<10)
			{
			
				document.getElementById('a1').style.border="1px solid #CFCFCF";
	
			document.getElementById('a2').style.border="1px solid #CFCFCF";
	
			document.getElementById('a2').style.border="1px solid red";
	
			return false;
			
			}
		
		}
	
	
	}
