<table class="contain" cellspacing="0">
<tr>
	<td rowspan="2" align="left" width="299"><img src="../images/logo.png" /></td>
</tr>
<tr><td align="right" valign="bottom">
	<table cellpadding="5" width="100%" bgcolor="#0099FF"><tr>
			<td><a href="index.php">Trang chu</a></td>
			<td><?php if (isset($_SESSION["uid"])) echo "<a href=\"logout.php\">Dang xuat</a>"; else echo "<a href=\"login.php\">Dang nhap</a>"; ?></td>
		</tr></table>
</td></tr>
</table>