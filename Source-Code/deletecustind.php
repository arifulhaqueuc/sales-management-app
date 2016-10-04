<?php
include("dbconnection.php");

$del = $_GET['id'];
$delquery = mysql_query("DELETE from custind where serial = $del");

if ($delquery) 
{
include_once('updatecust.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete from Database</title>
</head>

<body>

</body>
</html>
