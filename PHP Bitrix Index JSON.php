<?php
#parse("BITRIX Globals.php")
#set( $D = '$' )

define("NO_KEEP_STATISTIC", true);
define("NO_AGENT_CHECK", true);
define("STOP_STATISTICS", true);

require(${D}_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

// CODE HERE

require(${D}_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");