<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Response;

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

    public function create(): Response
    {
        $username = $this->cleanUsername();
        $firstNumber = $this->request->getPost('first_number');
        $secondNumber = $this->request->getPost('second_number');
        $sum = intval($firstNumber) + intval($secondNumber);

        $newUser = [
            'username' => $username,
            'first_number' => $firstNumber,
            'second_number' => $secondNumber,
            'sum' => $sum
        ];

        $id = $this->model->insert($newUser);

        if (!$id) {
            return redirect()->back()->with('errors', $this->model->errors())->withInput();
        }

        return redirect()->to("users/$id");
    }

    public function delete($id)
    {
        $user = $this->getUserNotFound($id);

        if ($this->request->is('post')) {
            $this->model->delete($id);

            return redirect()->to('users')->with('message', 'User deleted');
        }

        return view('Users/delete', ['user' => $user]);
    }

    private function getUserNotFound($id): array
    {
        $user = $this->model->find($id);
        if ($user === null) {
            throw new PageNotFoundException("User with id: $id not found");
        }
        return $user;
    }

    protected function cleanUsername(): string
    {
        $username = $this->request->getPost('username');

        if (is_array($username) || $username === null) {
            return '';
        }

        return trim($username);
    }
}
