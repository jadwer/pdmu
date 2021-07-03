<?php
namespace App\Controllers;

use App\Entities\Producto;
use App\Entities\Usuario;

class Home extends BaseController
{
    protected $db = null;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function index()
	{
        $parser = \Config\Services::parser();

        /* echo $this->db->table('productos')->countAll(); */
        $data = [
            'nombre' => "Arroz",
            'precio' => 20,
            'id_usuario' => 1,
            'creacion' => date("Y-m-d H:i:s"),
        ];
        
        $producto = new Producto($data);
        
        $model = model('ProductoModel');
        //$model->save($producto);

  		$data2 = ['title'=>"Pagina Principal"];
        return view('home', $data2);

	}

    public function login(){
        $data = ['title'=>"Login"];
        return view('login', $data);
    }

    public function login_send(){

        $matricula = $this->request->getPost("matricula");
        $pass = $this->request->getPost("pass");

        $userModel = model("UsuarioModel");
        $usuario = $userModel->where('usuario', $matricula)->findAll();
        //d($usuario[0]);

        if(($usuario != null) && password_verify($pass, $usuario[0]->password)){
            $data = ['title'=>"Accediste prro"];

            $session = session();
            $userData = [
                'nombre' => $usuario[0]->nombre,
                'usuario' => $usuario[0]->usuario,
                'type' => $usuario[0]->type,
            ];
            $session->set($userData);
            d($session->type);

            return view('home', $data);
        }
        else {
            $data = ['title'=>"Fail"];
            return view('home', $data);
        }
    }

    public function inicio(){
        $data = ['title'=>"Inicio"];
        return view('home', $data);
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(\base_url());
    }

}
