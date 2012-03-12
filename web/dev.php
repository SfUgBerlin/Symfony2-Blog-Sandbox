<?php


use Symfony\Component\HttpFoundation\Request;

/*
 * Dev environment.
 */

// Require autoload.
require_once __DIR__.'/../app/autoload.php';

// Require kernel.
require_once __DIR__.'/../app/AppKernel.php';

// Initialize kernel and run the application.
$kernel = new \AppKernel('development', true);
$kernel->loadClassCache();
$kernel->handle(Request::createFromGlobals())->send();
