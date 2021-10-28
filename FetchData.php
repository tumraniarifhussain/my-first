
<head>

	<style>
	
		#Update,#Delete
		{
			cursor: pointer;
		}
	
	</style>

</head>

<?php

$Conn = mysqli_connect("localhost","root","","crud");

echo '<table border="1" cellpadding="1" cellspacing="5" style="text-align: center;color: white;background-color: black;">

<tr>
	<td> Student Id 		</td>
	<td> Student Name 		</td>
	<td> Student Roll No# 	</td>
	<td> Update Data	    </td>
	<td> Delete Data		</td>	
</tr>';

$q = mysqli_query($Conn,"select * from students");

while($Arr = mysqli_fetch_array($q))
{
	echo "<tr>
				<td>  $Arr[stid] </td>
				<td>  $Arr[sname] </td>
				<td>  $Arr[sroll] </td>
				<td> <p id='Update'> Update Data </p> </td>
				<td> <p id='Delete' onClick='Delete(".$Arr['stid'].")'> Delete Data </p> </td>

		  </tr>";
	
}


echo "</table>";

?>

<script>

function Delete(id)
{
	$.get("DeleteData.php",{sid:id},function(msg)
	{
		alert(msg);
		$("#ShowData").load("FetchData.php");
	});
}

</script>

