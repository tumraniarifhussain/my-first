<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ajax Crud Example </title>
	
	<script src="jq.js"> </script>
	
	<script>
	
		$(document).ready(function()
		{
			
			$("#BtnSave").click(function()
			{
				var name = $("#SName").val();	
				var roll = $("#SRoll").val();
				
				$.post("SaveData.php",{n:name , r:roll},function(msg)
				{
					//alert(msg);
					$("#ShowData").load("FetchData.php");
				});
				
			});
			
			$("#ShowData").load("FetchData.php");
			
		});
		
	</script>
	
</head>

<body>
	
	<table>
	
		<tr>
			<td> Student Name </td>
			<td> <input type="text" id="SName" /> </td>
		</tr>
		
		<tr>
			<td> Student Roll No# </td>
			<td> <input type="text" id="SRoll" /> </td>
		</tr>
		
		<tr>
			<td> </td>
			<td> <input type="button" value="Save Data" id="BtnSave" /> </td>
		</tr>
	
	</table>
	
</body>
</html>


<div id="ShowData"> </div>

