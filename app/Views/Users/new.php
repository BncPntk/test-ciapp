<h1>New User</h1>

<?php if (session()->has('errors')) : ?>
    <?php foreach (session('errors') as $error) : ?>
        <ul>
            <li style="color:crimson"><?= $error ?></li>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>

<?= form_open('users/create') ?>

<?= form_label('Username', 'username') ?>
<?= form_input('username', old('username') ?? '', 'id=username', 'text') ?>

<?= form_label('First Number', 'first_number') ?>
<?= form_input('first_number', old('first_number') ?? '', 'id=first_number', 'number') ?>

<?= form_label('Second Number', 'second_number') ?>
<?= form_input('second_number', old('second_number') ?? '', 'id=second_number', 'number') ?>

<button>Add</button>

</form>