<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>User<?= $this->endSection() ?>
<?= $this->section('children') ?>

<p><a href="<?= site_url('/users') ?>">Back</a></p>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>First Number</th>
        <th>Second Number</th>
        <th>Sum</th>
    </tr>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['first_number'] ?></td>
        <td><?= $user['second_number'] ?></td>
        <td><?= $user['summ'] ?></td>
    </tr>
</table>

<?= $this->endSection() ?>