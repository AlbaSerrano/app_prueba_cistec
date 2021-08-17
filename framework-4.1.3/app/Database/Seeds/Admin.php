<?php

namespace App\DataBase\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{

    public function run()
    {
        $user = "admin";
        $email = "admin@admin.org";
        $password = password_hash("123", PASSWORD_DEFAULT);

        $data = [
            "Usuario" => $user,
            "Email" => $email,
            "Contrasena" => $password
        ];

        //Using Query Builder
        $this->db->table('tbl_usuarios')->insert($data);
    }
}
