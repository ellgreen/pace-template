<?php

use EllGreen\Pace\Console\Application;
use EllGreen\Pace\Pace;
use Illuminate\Container\Container;

$container = new Container();

Container::setInstance($container);
$container->instance(Container::class, $container);

Pace::register($container, realpath(__DIR__.'/../'));

$application = $container->makeWith(Application::class, ['Pace']);

$application->registerCommands($container);

// Binding Application as getNamespace is used for component compiling
$container->instance(\Illuminate\Contracts\Foundation\Application::class, $application);

return $application;
