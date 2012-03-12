<?php


use Symfony\Component\HttpFoundation\Request;

// Require autoload.
require_once __DIR__.'/../app/autoload.php';

// Require kernel.
require_once __DIR__.'/../app/AppKernel.php';

// Initialize kernel and run the application.
$kernel = new \AppKernel('production', false);
$kernel->handle(Request::createFromGlobals())->send();
