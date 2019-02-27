<?php

require realpath('../vendor/autoload.php');

$blade = (function () {
    $container = \Illuminate\Container\Container::setInstance(
        new \Illuminate\Container\Container()
    );

    $filesystem = new \Illuminate\Filesystem\Filesystem();

    $resolver = new \Illuminate\View\Engines\EngineResolver();
    $resolver->register('blade', function () use ($filesystem) {
        $compiler = new \Illuminate\View\Compilers\BladeCompiler(
            $filesystem,
            realpath('../cache')
        );

        return new \Illuminate\View\Engines\CompilerEngine($compiler);
    });

    $finder = new \Illuminate\View\FileViewFinder($filesystem, [realpath('../views')]);

    $dispatcher = new \Illuminate\Events\Dispatcher($container);

    $factory = new \Illuminate\View\Factory($resolver, $finder, $dispatcher);
    $factory->setContainer($container);
    $factory->share('container', $container);

    return $factory;
})();

