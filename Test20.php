<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
<?php
$a = ["シュネッケン", "デスソース", "サルミアッキ"];
$count = count($a);   //要素の数を返す
//forで要素数分だけループ
for ($i = 0; $i < $count; $i++){
	echo "$a[$i]<br>\n";
}
echo "<br>\n";
//foreachで要素数分だけループ
foreach($a as $v){
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