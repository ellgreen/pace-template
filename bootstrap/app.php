<?php

use EllGreen\Pace\Builder;
use EllGreen\Pace\Console\Application;
use Illuminate\Container\Container;

$container = new Container();

Container::setInstance($container);
$container->instance(Container::class, $container);

$container->bind(Builder::class, function () {
    return new Builder(
        Container::getInstance(),
        realpath(__DIR__.'/../resources/views'),
        __DIR__.'/cache/views'
    );
});

$application = $container->makeWith(Application::class, ['Pace']);

$application->registerCommands($container);

// Binding Application as getNamespace is used for component compiling
$container->instance(\Illuminate\Contracts\Foundation\Application::class, $application);

return $application;
