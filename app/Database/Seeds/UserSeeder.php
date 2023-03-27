<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Password;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = new UserModel();
        $groups = new GroupModel();

        $users->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password_hash' => Password::hash('admin'),
            'active' => 1
        ]);
        $groups->addUserToGroup($users->getInsertID(), 1);

        $users->insert([
            'username' => 'bertus21',
            'email' => 'wiraaditya0@gmail.com',
            'password_hash' => Password::hash('akugakero'),
            'active' => 1
        ]);
        $groups->addUserToGroup($users->getInsertID(), 2);
    }
}
