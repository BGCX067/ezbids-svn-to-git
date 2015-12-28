<?php
  include("../config/config.php");
  session_start();
  $error = "";
  if (isset($_SESSION["uid"])) {
          header('Location: index.php');
  }
  if (isset($_POST["btnSubmit"])) {
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $db = DB_Core::getInstance();
    $result = $db->executeQuery('SELECT * FROM user WHERE username="'.$username.'";');
    if (!$result) {
      $error = "Ban nhap tai khoan hoac mat khau sai.";
    } else {
      $result = mysql_fetch_assoc($result);
      if (crypt($password, $result["salt"]) === $result["password"]) {
        session_register("uid");
        $_SESSION["uid"] = $result["id"];
        header('Location: success.php');
      } else {
        $error = "Ban nhap tai khoan hoac mat khau sai.";
      }
    }
  }
?>
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
	<?php
		echo $error."<br />";
	?>
	<form action="login.php" method="POST">
	<table>
		<tr>
			<td>
				Username
			</td>
			<td>
				<input type="text" name="txtUsername" />
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" name="txtPassword" />
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Login" name="btnSubmit" /></td>
		</tr>		
	</table>
	</form>
</div>

<div name="footer" align="center">
	<?php include("../footer.php"); ?>
</div>

</div>
</body> 
<!-- InstanceEnd --></html>