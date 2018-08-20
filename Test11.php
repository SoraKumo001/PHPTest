<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
	<?php
		//整数と小数を足すと、小数型になる
		$a = 1;
		$b = 10.1;
		$sum = $a + $b;
		echo $sum . "<BR>";
		echo '$a=' . gettype($a) . "<BR>";
		echo '$b=' . gettype($b) . "<BR>";
		echo '$sum=' . gettype($sum) . "<BR>";

		//数値に変換できない文字列は0とみなされる
		$number = 348596;
		$string = "三十四万八千五百九十六";
		$sum = $number + $string;
		echo $sum;


		//先頭に数字がある場合は数値に変換される
		$number = 348596;
		$string = "100000を漢字で書くと十万になります";
		$sum = $number + $string;
		echo $sum;
	?>
	</BODY>
</HTML>
