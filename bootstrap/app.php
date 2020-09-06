<?php

use EllGreen\Pace\Console\Application;
use EllGreen\Pace\Providers\PaceServiceProvider;
use Illuminate\Container\Container;

$container = Container::setInstance(new Container);
$container->instance(Container::class, $container);

PaceServiceProvider::register($container, realpath(__DIR__.'/../'));

$application = $container->makeWith(Application::class, ['name' => 'Pace']);

$application->registerCommands($container);

// Binding Application as getNamespace is used for component compiling
$container->instance(\Illuminate\Contracts\Foundation\Application::class, $application);

return $application;
