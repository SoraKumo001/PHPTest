<!DOCTYPE html>
<HTML lang="ja">
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>PHPテストプログラム</TITLE>
	</HEAD>
	<BODY>
<?php
$a = 10;
if($a === 10)
	echo "真<br>\n";
else
	echo "偽<br>\n";

$a = 20;
if ($a === 10)
	echo "真<br>\n";
else
	echo "偽<br>\n";

$a = 20;
if ($a === 10){
	echo "真<br>\n";
}else{
	echo "偽<br>\n";
}

$a = 20;
if ($a === 10)
	echo "1<br>\n";
else if($a === 20)
	echo "2<br>\n";
else
	echo "3<br>\n";

$a = 20;
if ($a === 10)
	echo "1<br>\n";
elseif ($a === 20)
	echo "2<br>\n";
else
	echo "3<br>\n";

$a = 20;
if ($a === 10):
	echo "複数";
	echo "1<br>\n";
elseif ($a === 20):
	echo "複数";
	echo "2<br>\n";
else:
	echo "複数";
	echo "3<br>\n";
endif;

?>
	</BODY>
</HTML>