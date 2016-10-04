<?php
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$query = "SELECT *  FROM `product_reference`;";
	$search = mysql_query($query);
	
	echo "<table border='1' align='center'>";
	echo "<tr><th>Reference No</th><th>Product</th><th>Date</th><th>Status</th></tr>";
		while ($data = mysql_fetch_array($search))
		{	
			echo "<tr><td>".$data['ref_no']."</td><td>".$data['product']."</td><td>".$data['date']."</td><td>".$data['status']."</td></tr>";
		}
		echo "</table>";

?>
</body>
</html>