<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
<?php
$a[0] = "あいうえお";
$a["0"] = "かきくけこ";
echo $a[0]. "<br>\n";
echo $a["0"]. "<br>\n";
echo "<br>\n";

$a[00] = "あいうえお";
$a["00"] = "かきくけこ";
echo $a[00] . "<br>\n";
echo $a["00"] . "<br>\n";
echo "<br>\n";
?>
	</BODY>
</HTML>