<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
	<?php
		//小数が整数に変換され、少数以下が切り捨て
		$a = 3.14159;
		$a = (int)$a;
		echo $a."<br>";

		//小数を文字列に変換しても表示結果は変わらない
		$a = 3.14159;
		$a = (string)$a;
		echo "$a<br>";
	?>
	</BODY>
</HTML>