<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>Users<?= $this->endSection() ?>
<?= $this->section('children') ?>

<?php if (session()->has('message')) : ?>
    <p style="color: lightgreen;"><b><?= session('message') ?></b></p>
<?php endif ?>

<?= $this->include('Users/new') ?>

<h1>Data of all registered users</h1>


<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>First Number</th>
        <th>Second Number</th>
        <th>Sum</th>
    </tr>

    <?php foreach ($users as $user) : ?>

        <tr>
            <td><?= $user['id'] ?></td>
            <td><a href="<?= site_url('/users/' . $user['id']) ?>"><?= esc($user['username']) ?></a></td>
            <td><?= $user['first_number'] ?></td>
            <td><?= $user['second_number'] ?></td>
            <td><?= $user['sum'] ?></td>
        </tr>

    <?php endforeach ?>

</table>

<?= $this->endSection() ?>