<!DOCTYPE html>
<HTML lang="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>PHPテストプログラム</TITLE>
    </HEAD>
    <BODY>
<?php
function output(...$a)
{
	foreach ($a as $v) {
		echo $v, "<br>";
	}
}
output(10, 20, 30, 40);
?>
    </BODY>
</HTML>