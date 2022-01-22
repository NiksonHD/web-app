<?php
require_once './common.php';
/** @var App\Http\Weborders\WebOrderHttpHandler $webHttpHandler */

$webHttpHandler->upload($webOrderService, $_FILES);