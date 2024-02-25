<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['username', 'first_number', 'second_number', 'sum'];

    protected $validationRules = [
        'username' => 'required|max_length[30]|is_unique[users.username]',
        'first_number' => 'required',
        'second_number' => 'required',
    ];
}
