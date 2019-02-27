<?php

require '../inc/bootstrap.php';

$users = (new \SSR\Database)->users();

echo $plates->render('index', ['users' => $users]);