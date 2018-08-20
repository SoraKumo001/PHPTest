<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
<?php
$a = array("シュネッケン", "デスソース", "サルミアッキ");
foreach($a as $i => $v){
	echo gettype($i)." $i:$v<br>\n";
}
echo "<br>\n";
$a = array("0"=>"シュネッケン", "1" => "デスソース", "2" => "サルミアッキ");
foreach ($a as $i => $v) {
	echo gettype($i) . " $i:$v<br>\n";
}
echo "<br>\n";
$a = array("00" => "シュネッケン", "01" => "デスソース", "02" => "サルミアッキ");
foreach ($a as $i => $v) {
	echo gettype($i) . " $i:$v<br>\n";
}
echo "<br>\n";
?>
	</BODY>
</HTML>