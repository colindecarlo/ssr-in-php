<?php

require '../inc/bootstrap.php';

$users = (new \SSR\Database)->users();

echo $twig->render('index.twig', ['users' => $users]);