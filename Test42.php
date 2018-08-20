<!DOCTYPE html>
<HTML lang="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>PHPテストプログラム</TITLE>
    </HEAD>
    <BODY>
<?php
$a = [10, 20, 30];
$b = &$a;
unset($b);
$b = [30, 40, 50];
print_r($a);
?>
    </BODY>
</HTML>