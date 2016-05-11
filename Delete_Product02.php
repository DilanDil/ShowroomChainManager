<?php
$P_Model=$_POST["P_Model"];

//get connect with database
include 'database.php'; 
//END

$sql = "DELETE FROM `product` WHERE P_Model='".$P_Model."'";



if (mysql_query($sql)){
	echo" Selected record is deleted successfully </br> Press OK to continue..!";
}else{
	echo "There is a Problem in Deleting this record...   <br/> Please check and Try again...!", mysql_error($conn);
}
mysql_close($conn);	

?>
<html><body>
<button><a href="StoreRoom.php">OK</a></button>
</body>
</html>
