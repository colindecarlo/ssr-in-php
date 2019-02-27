<?php $this->layout('layout', ['title' => 'Users']) ?>

<div class="row">
    <?php foreach($users as $user): ?>
        <div class="col-sm-6">
            <?= $this->fetch('cards/user', ['user' => $user]) ?>
        </div>
    <?php endforeach; ?>
</div>

