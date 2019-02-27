<?php

require '../inc/bootstrap.php';

$users = (new \SSR\Database)->users();

echo $blade->make('index', ['users' => $users])->render();