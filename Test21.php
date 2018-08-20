<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
<?php
$a["SCHNECKEN"] = "シュネッケン";
$a["DEATH SAUCE"] = "デスソース";
$a["SALMIAKKI"] = "サルミアッキ";

echo "$a[SCHNECKEN]<br>\n";
echo "{$a['DEATH SAUCE']}<br>\n";
echo "$a[SALMIAKKI]<br>\n";
echo "<br>\n";
//foreachで要素数分だけループ
foreach ($a as $v) {
	echo "$v<br>\n";
}
echo "<br>\n";
//foreachで要素数分だけループ(要素番号を取り出す)
foreach ($a as $i => $v) {
	echo "$i:$v<br>\n";
}
?>
	</BODY>
</HTML>