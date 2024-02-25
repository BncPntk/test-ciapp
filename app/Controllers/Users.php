<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel();
    }

    public function index(): string
    {
        $users = $this->model->findAll();

        return view('Users/index', ['users' => $users]);
    }

    public function show($id): string
    {
        $user = $this->getUserNotFound($id);

        return view('Users/show', ['user' => $user]);
    }

    private function getUserNotFound($id): array
    {
        $user = $this->model->find($id);
        if ($user === null) {
            throw new PageNotFoundException("User with id: $id not found");
        }
        return $user;
    }
}
