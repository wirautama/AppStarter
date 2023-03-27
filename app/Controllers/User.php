<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class User extends BaseController
{
    protected $users;
    public function __construct()
    {
        $this->users = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'User | AppStarter',
            'users' => $this->users->findAll()
        ];
        return view('users/index', $data);
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Komik | Bertus',
            'validation' => \config\Services::validation(),
            'users' => $this->users->find($id)
        ];
        return view('users/edit', $data);
    }

    public function update($id)
    {
    }

    public function delete($id)
    {
        $this->users->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('user');
    }
}
