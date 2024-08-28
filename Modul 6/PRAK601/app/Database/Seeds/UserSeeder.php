<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'username' => 'Farly',
            'email' => 'farlyhaydy123@gmail.com',
            'password' => password_hash('123', PASSWORD_DEFAULT),
        ]);
    }
}
