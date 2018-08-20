<!DOCTYPE html>
<HTML lang="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>PHPテストプログラム</TITLE>
    </HEAD>
    <BODY>
<?php
function setValue1($v){
	$v = 10;
}
function setValue2(&$v){
	$v = 10;
}
$a = 0;
setValue1($a);
echo $a,"<br>\n";

$b = 0;
setValue2($b);
echo $b, "<br>\n";

?>
    </BODY>
</HTML>