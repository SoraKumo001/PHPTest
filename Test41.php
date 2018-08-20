<!DOCTYPE html>
<HTML lang="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>PHPテストプログラム</TITLE>
    </HEAD>
    <BODY>
<?php
$a = 10;
$b = &$a;
$b = 20;
echo $a;
?>
    </BODY>
</HTML>