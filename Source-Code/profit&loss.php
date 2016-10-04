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
<tr><th colspan="2">Profit & Loss</th></tr>
<tr><th>Type</th><th>Value</th></tr>
<tr><th>Total Income</th><th><?php echo income(); ?></th></tr>
<tr><th>Total Expenses</th><th><?php echo expense(); ?></th></tr>
<tr><th>Balance</th><th><?php echo profit_loss(); ?></th></tr>
</table>


</body>
</html>

<?php

function profit_loss()
{

$income = income();
$expense = expense();
	if ($income>$expense)
	{
		$profit = $income - $expense;
		return "Profit ".$profit;
	}
	else
	{
		$loss = $expense - $income;
		return "Loss ".$loss;
	}

}

function income()
{
$query = "select sum(grandtot) from `invoice`;";
$result = mysql_query ($query);
$total = mysql_result ($result, 0);

return $total;
}

function expense()
{
$query = "select sum(totexp) from `stock`;";
$result = mysql_query ($query);
$total = mysql_result ($result, 0);

return $total;
}
?>