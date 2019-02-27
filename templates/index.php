<?php $this->layout('layout', ['title' => 'Users']) ?>

<div class="row">
    <?php foreach($users as $user): ?>
        <div class="col-sm-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><?= $this->e($user['name'] ?? $user['email']) ?></h5>
                    <dl class="row">
                        <dt class="col-sm-3">Email</dt>
                        <dd class="col-sm-9"><?= $this->e($user['email']) ?></dd>

                        <dt class="col-sm-3">Name</dt>
                        <dd class="col-sm-9"><?= $this->e($user['name']) ?></dd>

                        <dt class="col-sm-3">Username</dt>
                        <dd class="col-sm-9"><?= $this->e($user['username']) ?></dd>

                        <dt class="col-sm-3">Verified</dt>
                        <dd class="col-sm-9"><?= $user['is_verified'] ? 'Yes' : 'No' ?></dd>

                        <dt class="col-sm-3">Created</dt>
                        <dd class="col-sm-9"><?= $this->e($user['created_at']) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

