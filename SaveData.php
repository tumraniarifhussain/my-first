
<?php


$Conn = mysqli_connect("localhost","root","","crud");

$sname = $_POST["n"];
$sroll = $_POST["r"];

$Ins = mysqli_query($Conn,"insert into students values(null,'".$sname."' , '".$sroll."')");

if($Ins > 0)
{
	echo "Data Is Inserted.....";
}
else
{
	echo "Data Is Not Inserted.....";
}

?>