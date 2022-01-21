<?php
require_once './common.php';
/** @var App\Http\Weborders\WebOrderHttpHandler $webHttpHandler */

$webHttpHandler->uploadOrder($webOrderService, $_FILES);