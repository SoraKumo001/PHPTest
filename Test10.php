<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
	<?php
		$a = isset($_GET['a'])?$_GET['a'] + 1:$a = 0;
	?>
	<form method="GET" action="Test10.php">
		<input type="text" name="a" value="<?=$a?>">
		<input type="submit" value="入力">
	</form>
	</BODY>
</HTML>