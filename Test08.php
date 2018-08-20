<!DOCTYPE html>
<HTML lang="ja">
<HEAD>
	<META charset="UTF-8" />
	<TITLE>PHPテストプログラム</TITLE>
</HEAD>
<BODY>
	<form method="GET" action="Test08.php">
		<input type="text" name="SET">
		<input type="submit" value="入力">
	</form>
	<?php
		echo $_GET['SET'];
	?>
</BODY>
</HTML>