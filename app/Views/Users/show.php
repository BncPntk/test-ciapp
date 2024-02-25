<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>User<?= $this->endSection() ?>
<?= $this->section('children') ?>

<p><a href="<?= site_url('/users') ?>">Back</a></p>

<div>
    <h1>Welcome, <?= esc($user['username']) ?></h1>
    <h3>First Number: <?= $user['first_number'] ?></h3>
    <h3>Second Number: <?= $user['second_number'] ?></h3>
    <h3>Sum: <?= $user['sum'] ?></h3>
</div>

<p><a href="<?= url_to('Users::delete', $user['id']) ?>">Delete</a></p>

<?= $this->endSection() ?>