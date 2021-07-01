<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Producto;

class ProductModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType    = 'App\Entities\Producto';
    protected $allowedFields = ['nombre', 'precio','id_usuario', 'creacion'];

    protected $useTimestamps = false;
    protected $createdField  = 'creacion';
}