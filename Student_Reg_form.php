<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		.main{border-style: solid; border-radius:30px; padding: 2% 2%; background-color: white;vertical-align: center}
		.subtable{border-style: groove; border-radius:10px; padding: 5px 5px;border-width: 1px}
		td{text-align: left; padding: 7px}
		th{text-align: center}
		body{background-color: #99bbff}
		input[type=text]{
  			border: 1px solid black;
  			border-radius: 10px;
  			padding: 7px 10px;
  			box-sizing: border-box;
  			text-align: left;
  			align-self: center;
  			float: center;
  			width: 80%;
		}
		button,input[type=submit]{background-color:#002b80 ;color: white;border: none;padding: 10px 40px;text-align: center; border-radius: 10px ; margin: 0% 40%}
		input[type=submit]:hover{background-color: green;}
	</style>
</head>
<body>
<form action="./login/Registration.php" method="post" enctype="multipart/form-data">
	<table align="center" class="main">
		<tr>
			<th colspan="2"><h1> Registration Form</h1></th>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="Fname" ></td>
		</tr>
		<tr>
			<td>Birthday</td>
			<td><input type="text" name="DOB" placeholder="YYYY-MM-DD"></td>
		</tr>
		<tr>
			<td>NIC No.</td>
			<td><input type="text" name="NIC" ></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="Address" ></td>
		</tr>
		<tr>
			<td>District</td> 
			<td><input type="text" name="District" ></td>
		<tr>
		<tr>
			<td>Province </td>
			<td><input type="text" name="Province"></td>
		</tr>
		<tr>
			<td>Divisional Secretariat</td>
			<td><input type="text" name="DS"></td>
		</tr>
		<tr>
			<td>Zip Code </td>
			<td><input type="text" name="Zip"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" id="Male" name="Gender" value="Male"> Male
				<input type="radio" id="Female" name="Gender" value="Female"> Female
			</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type="text" name="Mobile" placeholder="0774444444"></td>
		</tr>
		<tr>
			<td>Email Address</td>
			<td><input type="text" name="Email" placeholder="abc@mail.com"></td>
		</tr>
		<tr>
			<td rowspan="2">Marital status</td>
			<td><input type="radio" name="Marital" value="Single">Single</td>
		</tr>
		<tr>
			<td><input type="radio" name="Marital" value="Married">Married</td>
		</tr>
		<tr >
			<td rowspan="2">Program applying for</td>
			<td><input type="radio" name="Program" value="EAT"> BSc (External) in Electronics and Automation Technologies </td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="Program" value="FA"> BSc (External) in Financial Engineering
			</td>
		</tr>
		<tr>
			<td><u>Education Details</u></td>
		</tr>
		<tr>
			<td>Ordinary Level (O/L)</td>
			<td >Index No <input type="text" name="OLindex" style="width: 50% ;"></td>
		</tr>
		<tr>
			<td colspan="2">
				<table class="subtable">
					
					<tr>
						<td>
							Upload the verified softcopy of the result sheet
						</td>
						<td id="file">
							<input type="file" name="olfile" id="olfile">
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr><td colspan="2"></td></tr>
		<tr>
			<td>Advanced Level (A/L)</td>
			<td >Index No <input type="text" name="ALindex" style="width: 50% ;"></td>
		</tr>
		<tr>
			<td colspan="2">
				<table class="subtable">
					
					<tr>
						<td>
							Upload the verified softcopy of the result sheet
						</td>
						<td id="file">
							<input type="file" name="alfile" id="alfile">
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td colspan="2" ><u>Emergency Contact Details - 1</u></td>
		</tr>
		<tr>
			<td>
				Name			
			</td>
			<td>
				<input type="text" name="Emerg_contact1">
			</td>
		</tr>
		<tr>
			<td>
				Relationship to you			
			</td>
			<td>
				<input type="text" name="Relationship1">
			</td>
		</tr>
		<tr>
			<td>
				Mobile No			
			</td>
			<td>
				<input type="text" name="contact_no1">
			</td>
		</tr>

		<tr>
			<td colspan="2" ><u>Emergency Contact Details - 2</u></td>
		</tr>
		<tr>
			<td>
				Name			
			</td>
			<td>
				<input type="text" name="Emerg_contact2">
			</td>
		</tr>
		<tr>
			<td>
				Relationship to you			
			</td>
			<td>
				<input type="text" name="Relationship2">
			</td>
		</tr>
		<tr>
			<td>
				Mobile No			
			</td>
			<td>
				<input type="text" name="contact_no2">
			</td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="regform" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>