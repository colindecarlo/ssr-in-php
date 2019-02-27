<?php require '../vendor/autoload.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SSR in PHP</title>
</head>
<body>

<div class="container">
    <div class="row">
        <?php foreach((new \SSR\Database)->users() as $user): ?>
            <div class="col-sm-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name'] ?? $user['email'] ?></h5>
                        <dl class="row">
                            <dt class="col-sm-3">Email</dt>
                            <dd class="col-sm-9"><?= $user['email'] ?></dd>

                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9"><?= $user['name'] ?></dd>

                            <dt class="col-sm-3">Username</dt>
                            <dd class="col-sm-9"><?= $user['username'] ?></dd>

                            <dt class="col-sm-3">Verified</dt>
                            <dd class="col-sm-9"><?= $user['is_verified'] ? 'Yes' : 'No' ?></dd>

                            <dt class="col-sm-3">Created</dt>
                            <dd class="col-sm-9"><?= $user['created_at'] ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>