<?php
include("../../mainfile.php");
if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php';
}else{
  include_once 'language/english/modinfo.php';
}
include "currencyconverter.php";
include(XOOPS_ROOT_PATH."/header.php");
$xoopsOption['show_rblock'] = 1;
include(XOOPS_ROOT_PATH."/footer.php");
?>