<?php

namespace App\Controllers;

class ProveedorC extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    public function index(): string
    {
        $proveedorM = model('ProveedorM');
        $data['Pro'] = $proveedorM->findAll();
        return view('head') .
        view ('menu') .
        view ('Proveedores/Show' ,$data) .
        view ('footer');

    }
    
    public function valida(){
        $session = session();
        $session->has('logged_in');
        
            if($session->has('logged_in')){
                return redirect()->to(base_url('/Usuario'));
                
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
        $proveedorM = model('ProveedorM');
        $idproveedor = $_POST['idProveedor'];
           
               $data = [
                   'nombreProveedor' => $_POST['nombreProveedor'],
                   'apellidoProveedor' => $_POST['apellidoProveedor'],
                   'telefonoProveedor' => $_POST['telefonoProveedor'],
                   'NIF' => $_POST['NIF']
                   
                   
               ];
           
           
               $proveedorM->set($data)->where('idProveedor',$idproveedor)->update();

               
               return redirect()->to(base_url('/Proveedores'));
   
           
    }
    
    public function add(){

    return view('head') . 
    view ('menu') . 
    view ('Proveedores/Add') . 
    view ('footer');

    }

    public function Edit($idProveedor){   //get
        $idProveedor = $data['idProveedor'] = $idProveedor;
        $proveedorM = model('ProveedorM');
        $data['Pro'] = $proveedorM->where('idProveedor',$idProveedor)->findAll();
        return view('head') .
        view('menu') . 
        view('Proveedores/Edit',$data) .
        view('footer');

       
    }


    public function insert(){ //post
        if (! $this->request->is('post')) {
                $this->index();
        }
        
        $rules = [
            'nombreProveedor' => 'required',
            'apellidoProveedor' => 'required',
            'telefonoProveedor' => 'required',
            'NIF' => 'required'

        ];

        $data = [
          "nombreProveedor" => $_POST['nombreProveedor'],
          "apellidoProveedor" => $_POST['apellidoProveedor'],
          "telefonoProveedor" => $_POST['telefonoProveedor'],
          "NIF" => $_POST['NIF']

        ] ;


        // Valida los datos
            if (! $this->validate($rules)) {
                // Si la validación falla, vuelve a cargar la vista con los errores
                return     
                view('head') .
                view('menu') . 
                view('Proveedores/Add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 
            }
            else{
                $proveedorM = model('ProveedorM');
                $proveedorM->insert($data);
                return redirect()->to(base_url('/Proveedores'));
            }   

        
    }

    public function delete($idProveedor){
       
        $proveedorM = model('ProveedorM');
        $proveedorM->delete($idProveedor);
        return redirect()->to(base_url('/Proveedores'));
    }


}
