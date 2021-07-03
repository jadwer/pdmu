<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Entities\Usuario;


class UsuarioSeeder extends Seeder
{
    public function run(){
        echo "algo";
        $pass = password_hash("l", PASSWORD_DEFAULT);
        d($pass);
        $data = [
            'nombre' => 'Usuario',
            'usuario' => 'admin',
            'password' => $pass,
            'type' => 'admin',
        ];
        $usuario = new Usuario($data);
        d($usuario);
        $model = model('UsuarioModel');
        $model->save($usuario);
    }    
}