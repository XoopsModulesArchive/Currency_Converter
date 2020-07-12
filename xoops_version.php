<?php
$modversion['name'] = _CURRCONV_NAME;
$modversion['version'] = 1.0;
$modversion['description'] = _CURRCONV_DESCR;
$modversion['author'] = "Made for XOOPS by Danordesign.com (Runeher)";
$modversion['credits'] = "";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/currency_converter.gif";
$modversion['dirname'] = "Currency_Converter";
$modversion['hasAdmin'] = 0;
$modversion['adminpath'] = "";
$modversion['hasMain'] = 1;

$modversion['blocks'][1]['file'] = "currency_converter_block.php";
$modversion['blocks'][1]['name'] = "Currency Converter";
$modversion['blocks'][1]['description'] = "Currency Converter block";
$modversion['blocks'][1]['show_func'] = "Currency_Converter_show"; 

?>