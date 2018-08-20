<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
<?php
$a = array("SCHNECKEN" => "シュネッケン", "DEATH SAUCE" => "デスソース", "SALMIAKKI" => "サルミアッキ");
$b = ["SCHNECKEN" => "シュネッケン", "DEATH SAUCE" => "デスソース", "SALMIAKKI" => "サルミアッキ"];

//foreachで要素数分だけループ(要素番号を取り出す)
foreach ($a as $i => $v) {
	echo "$i:$v<br>\n";
}
echo "<br>\n";
foreach ($b as $i => $v) {
	echo "$i:$v<br>\n";
}
?>
	</BODY>
</HTML>