<?php
require_once (dirname(__FILE__) . "/include/common.inc.php");
require_once DEDEINC."/arc.partview.class.php";
$pv = new PartView();
$pv->SetTemplet($cfg_basedir . $cfg_templets_dir . "/default/rss.htm");
header("Content-type:application/xml");
$pv->Display();
?>