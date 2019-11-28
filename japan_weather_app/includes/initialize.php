<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'japan_weather_app');
defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'includes');

require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."window.php");
?>