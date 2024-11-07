<?php

namespace App\Controllers;

class ClienteC extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    public function index(): string
    {
        $clienteM = model('ClienteM');
        $data['cli'] = $clienteM->findAll();
        return view('head') .
        view ('menu') .
        view ('Clientes/Show' ,$data) .
        view ('footer');

    }
    
    public function valida(){
        $session = session();
        $session->has('logged_in');
        
            if($session->has('logged_in')){
                return redirect()->to(base_url('/usuario'));
                
            }
        
        print_r($_SESSION);
    }

    public function Sesion()
    {  
        $session = session();
        if($session->get('logged_in')!=true || $session->get('rol')!=0){
            return redirect()->to(base_url('/Usuario'));
        }
        $data1['nombreUsuario'] = $session->get('nombreUsuario');

        $clienteM = model('ClienteM');
        $data['cliente'] = $clienteM->findAll();
        return view('head') .
                view('menu',$data1) . 
                view('marcas/show', $data) .
                view('footer');
    }

    public function update(){
        $clienteM = model('ClienteM');
        $idcliente = $_POST['idCliente'];
           
               $data = [
                   'nombreCliente' => $_POST['nombreCliente'],
                   'apellidoCliente' => $_POST['apellidoCliente'],
                   'codigoPostal' => $_POST['codigoPostal'],
                   'fechaRegistro' => $_POST['fechaRegistro'],
                   'telefonoCliente' => $_POST['telefonoCliente'],
                   
               ];
           
           
               $clienteM->set($data)->where('idcliente',$idcliente)->update();

               
               return redirect()->to(base_url('/Clientes'));
   
           
    }
    
    public function add(){

    return view('head') . 
    view ('menu') . 
    view ('Clientes/Add') . 
    view ('footer');

    }

    public function Edit($idCliente){   //get
        $idCliente = $data['idCliente'] = $idCliente;
        $clienteM = model('ClienteM');
        $data['cliente'] = $clienteM->where('idCliente',$idCliente)->findAll();
        return view('head') .
        view('menu') . 
        view('Clientes/Edit',$data) .
        view('footer');

       
    }


    public function insert(){ //post
        if (! $this->request->is('post')) {
                $this->index();
        }
        
        $rules = [
            'nombreCliente' => 'required',
            'apellidoCliente' => 'required',
            'codigoPostal' => 'required',
            'fechaRegistro' => 'required',
            'telefonoCliente' => 'required'

        ];

        $data = [
          "nombreCliente" => $_POST['nombreCliente'],
          "apellidoCliente" => $_POST['apellidoCliente'],
          "codigoPostal" => $_POST['codigoPostal'],
          "fechaRegistro" => $_POST['fechaRegistro'],
          "telefonoCliente" => $_POST['telefonoCliente']

        ] ;


        // Valida los datos
            if (! $this->validate($rules)) {
                // Si la validación falla, vuelve a cargar la vista con los errores
                return     
                view('head') .
                view('menu') . 
                view('Clientes/Add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 
            }
            else{
                $clienteM = model('ClienteM');
                $clienteM->insert($data);
                return redirect()->to(base_url('/Clientes'));
            }   

        
    }

    public function delete($idCliente){
       
        $clienteM = model('ClienteM');
        $clienteM->delete($idCliente);
        return redirect()->to(base_url('/Clientes'));
    }


}
