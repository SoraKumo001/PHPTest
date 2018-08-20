<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
	<form method="POST" action="Test07.php">
		<input type="submit" value="入力" name="SET">
	</form>
	<?php
		if (isset($_POST['SET']))
			echo $_POST['SET'];
		else
			echo "データ入力なし\n";
	?>
	</BODY>
</HTML>