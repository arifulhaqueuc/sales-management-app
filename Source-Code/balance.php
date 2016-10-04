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



<table border="1" align="center">
<tr><th colspan="2">Product Balance</th></tr>
<tr><th>Product</th><th>Balance</th></tr>
<tr><th>Pest Repeller</th><th><?php echo grand_balance('Pest Repeller'); ?></th></tr>
<tr><th>Bug Scare</th><th><?php echo grand_balance('Bug Scare'); ?></th></tr>
</table>


</body>
</html>

<?php

function grand_balance($goods)
{
$query = "select sum(grandtot) from `invoice` where `goods` like '".$goods."';";
$result = mysql_query ($query);
$total = mysql_result ($result, 0);

return $total;
}
?>