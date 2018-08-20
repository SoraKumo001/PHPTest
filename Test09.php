<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
	<form method="GET" action="Test09.php">
		<input type="text" name="a">
		<input type="text" name="b">
		<input type="submit" value="入力">
	</form>
	<?php
		if(isset($_GET['a']) && isset($_GET['b'])) {
			$a = $_GET['a'];
			$b = $_GET['b'];
			echo "$a+$b=",$a+$b;
		}
	?>
	</BODY>
</HTML>