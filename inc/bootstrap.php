<?php

require '../vendor/autoload.php';

$twig = (function () {
    $loader = new \Twig\Loader\FilesystemLoader(realpath('../templates'));
    return new \Twig\Environment($loader, [
        'cache' => realpath('../cache'),
    ]);
})();