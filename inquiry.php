<?php
header("X-RESULT: 011");
header("X-WUS-Host: rc24.xyz");
for ($i = 0; $i < substr_count($_REQUEST['chkno'], ",") + 1; $i++)
{
	echo("1");
}
?>