<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>Delete User<?= $this->endSection() ?>
<?= $this->section('children') ?>

<p><a href="<?= site_url('/users/' . $user['id']) ?>">Back</a></p>

<h2>Delete User</h2>

<?= form_open('users/delete/' . $user['id']) ?>
    <button>Sure</button>
</form>

<?= $this->endSection() ?>