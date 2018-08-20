<!DOCTYPE html>
<HTML lang="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>PHPテストプログラム</TITLE>
    </HEAD>
    <BODY>
    <?php
			$a = 0;
			for ($i = 1; $i <= $_GET['data']; $i++) {
				$a += $i;
				echo "$a<BR>\n";
			}
	?>
    </BODY>
</HTML>