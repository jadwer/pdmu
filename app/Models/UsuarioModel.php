<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Usuario;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType    = 'App\Entities\Usuario';
    protected $allowedFields = ['nombre', 'usuario','password', 'type'];

    protected $useTimestamps = false;

    /*    protected $validationRules    = [
        'usuario'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required|min_length[6]',
        'pass_confirm' => 'required_with[password]|matches[password]'
    ];

    protected $validationMessages = [
        'email'        => [
            'is_unique' => '¡Lo sentimos! Éste correo ya etá registrado. ¿Olvidaste tu contraseña? ¡Recupérala!'
        ]
    ];
    */
}