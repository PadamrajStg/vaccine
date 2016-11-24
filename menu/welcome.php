<?php
	/*foreach ($_POST as $key => $value) {
		//echo "$key : $value <br>\n";

		//echo "\$$key = \$_POST[\"$key\"];<br>\n";
		echo "echo \"$key:\$$key\";<br>";
	}*/



$baby_id = $_POST["baby_id"];
$vpid = $_POST["vpid"];
$vvid = $_POST["vvid"];
$createdat = $_POST["createdat"];
$updatedat = $_POST["updatedat"];

echo "baby_id:$baby_id<br>";
echo "vpid:$vpid<br>";
echo "vvid:$vvid<br>";
echo "createdat:$createdat<br>";
echo "updatedat:$updatedat<br>";
?>