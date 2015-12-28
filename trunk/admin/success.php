<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/masterPage.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/header.css" />
<!-- InstanceBeginEditable name="head" --><title>ezBIDS</title><!-- InstanceEndEditable -->
</head>

<body bgcolor="#0099FF">
<div name="contain" style="border:solid #00CCFF 3px;">
<div name="header">
	<?php include("header.php"); ?>
</div>

<div name="mainContent">
	Ban da dang nhap thanh cong. Ban se duoc tu dong chuyen ve trang chu.
	Neu ban khong duoc tu dong chuyen ve trang chu sau 3 giay, hay an vao <a href="index.php">day</a>.
</div>

<div name="footer" align="center">
	<?php
		include("../footer.php");
	?>
</div>

</div>
<script>
	setInterval("window.location = 'index.php';", 3000);
</script>
</body> 
<!-- InstanceEnd --></html>