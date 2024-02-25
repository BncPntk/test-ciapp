<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>Home<?= $this->endSection() ?>
<?= $this->section('children') ?>

<h2>Home</h2>

<h2><a href="<?= site_url('/users') ?>">Users</a></h2>

<?= $this->endSection() ?>