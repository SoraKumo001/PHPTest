<!DOCTYPE html>
<HTML lang="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>PHPテストプログラム</TITLE>
    </HEAD>
    <BODY>
<?php
function output($a,$b,$c)
{
	echo $a, "<br>";
	echo $b, "<br>";
	echo $c, "<br>";
}
$out = [10,20,30];
output(...$out);
?>
    </BODY>
</HTML>