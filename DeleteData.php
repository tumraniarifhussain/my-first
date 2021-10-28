
<?php


$Conn = mysqli_connect("localhost","root","","crud");

$s_id = $_GET["sid"];


$Delete = mysqli_query($Conn,"delete from students where stid = '".$s_id."' ");

if($Delete > 0)
{
	echo "Data Is Deleted.....";
}
else
{
	echo "Data Is Not Deleted.....";
}

?>