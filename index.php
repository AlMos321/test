<?php


require_once 'vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Almos\AlmosKernel;

$request = Request::createFromGlobals();
$kernel = new AlmosKernel();
$response = $kernel->handle($request);
$response->send();