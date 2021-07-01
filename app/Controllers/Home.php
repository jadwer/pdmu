<?php
namespace App\Controllers;

use App\Entities\Producto;

class Home extends BaseController
{
    protected $db = null;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function index()
	{
        $parser = \Config\Services::parser();

        //echo $this->db->table('productos')->countAll();
        $data = [
            'nombre' => "Arroz",
            'precio' => 20,
            'id_usuario' => 1,
            'creacion' => date("Y-m-d H:i:s"),
        ];
        
        $producto = new Producto($data);
        //d($producto);
        
        $model = model('ProductoModel');
        //$model->save($producto);

  		$data2 = ['title'=>"Pagina Principal"];
        return view('home', $data2);

	}
}
