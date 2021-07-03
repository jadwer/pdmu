<?php

namespace App\Controllers;

class Migrate extends \CodeIgniter\Controller
{
        public function index()
        {
                $migrate = \Config\Services::migrations();
                $seeder = \Config\Database::seeder();

                try
                {
                        $result = $migrate->latest();
                        d($result);
                        $seeder->call('UsuarioSeeder');
                }
                catch (\Throwable $e)
                {
                        // Do something with the error here...
                }
        }
}