<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
	<form method="GET" action="Test06.php">
		<input type="submit" value="入力" name="SET">
	</form>
	<?php
		echo $_GET['SET'];
	?>
	</BODY>
</HTML>
