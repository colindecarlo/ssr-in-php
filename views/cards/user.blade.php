<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">{{ $user['name'] ?? $user['email'] }}</h5>
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $user['email'] }}</dd>

            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $user['name'] }}</dd>

            <dt class="col-sm-3">Username</dt>
            <dd class="col-sm-9">{{ $user['username'] }}</dd>

            <dt class="col-sm-3">Verified</dt>
            <dd class="col-sm-9">{{ $user['is_verified'] ? 'Yes' : 'No' }}</dd>

            <dt class="col-sm-3">Created</dt>
            <dd class="col-sm-9">{{ $user['created_at'] }}</dd>
        </dl>
    </div>
</div>