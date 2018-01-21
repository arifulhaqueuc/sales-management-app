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
<form action="product_reference_update.php" name="myform" method="post">
<table border="1" align="center">
<tr><th colspan="2">Input Section 1</th></tr>
<tr><th>Reference Number</th><th><input name="reference_no" type="text" /></th></tr>
<tr><th>Product</th><th><select name="product">
        				<option selected="selected">Select the Item</option>
        				<option>Pest Repeller</option>
        				<option>Bug Scare</option>
     			        </select>
</th>
</tr>
<tr><th>Date</th><th><input name="date" type="text" /></th></tr>
<tr><th colspan="2"><input name="input_reference" type="submit" value="submit" /></th></tr>
</table>
</form>
</body>
</html>