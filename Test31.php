<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
<?php
for($i=0;$i<5;$i++)
	echo "$i<br>\n";

echo "<br>\n";

$i=0;
while($i<5){
	echo "$i<br>\n";
	$i++;
}

echo "<br>\n";

$i=10;
do{
	echo "$i<br>\n";
	$i++;
}while($i<0)
?>
	</BODY>
</HTML>