<?php
// Settings to make all errors more obvious during testing
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
date_default_timezone_set('UTC');

require_once('classes/class.YWDebug.php');
require_once('classes/class.YWRedis.php');
require_once('classes/class.YWProxy.php');
require_once('classes/class.YWUtil.php');
require_once('classes/class.YWText.php');
require __DIR__ . '/../vendor/autoload.php';

//tracing msg
$GLOBALS['YWD'] = new \YWDebug();



require __DIR__ . '/../config/config.php';
use Slim\Http\Environment;

