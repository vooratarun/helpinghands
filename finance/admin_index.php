<html>
<head>
<title>HH:Transcations</title>
</head>
<body>
<form action="admin_2.php" method="post" enctype="multipart/form-data">
<center>
<table border="2" bordercolor="#CC9966" bgcolor="#FFCCFF">
    <tr>
        <td>
        	Select Date :
        </td>
        <td>
        	<select name="year">
            	<option value="2012">2012</option>
                <option selected="selected" value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
        	</select>
        </td>
        <td>
        	<select name="month">
            	<option selected="selected" value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
        	</select>
        </td>
        <td>
        	<select name="date" width="50px;">
            	<option selected="selected" value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
        	</select>
        </td>
    </tr>
    <tr>
        <td>
        	Upload Pdf :
        </td>
        <td colspan="3">
        	<input type="file" name="pdf_file" />
        </td>
    </tr>
    <tr>
        <td colspan="4" align="center">
       		<input type="submit" value="Submit"/>
        </td>
    </tr>
</table>
</center>
</form>
</body>
</html>