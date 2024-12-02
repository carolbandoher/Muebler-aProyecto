<?php

namespace App\Controllers;

class CompraC extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    public function index(): string
    {
        $compraM = model('CompraM');
        $data['Com'] = $compraM->findAll();
        return 
        view ('menu') .
        view ('Compras/Show' ,$data) .
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
        $compraM = model('CompraM');
        $idcompra = $_POST['idCompra'];
           
               $data = [
                   'fechaCompra' => $_POST['fechaCompra'],
                   'cantidadCompra' => $_POST['cantidadCompra'],
                   'totalCompra' => $_POST['totalCompra'],
                   'descripcionCompra' => $_POST['descripcionCompra']
                   
                   
               ];
           
           
               $compraM->set($data)->where('idCompra',$idcompra)->update();

               
               return redirect()->to(base_url('/Compras'));
   
           
    }
    
    public function add(){

    return 
    view ('menu') . 
    view ('Compras/Add') . 
    view ('footer');

    }

    public function Edit($idCompra){   //get
        $idCompra = $data['idCompra'] = $idCompra;
        $compraM = model('CompraM');
        $data['Com'] = $compraM->where('idCompra',$idCompra)->findAll();
        return 
        view('menu') . 
        view('Compras/Edit',$data) .
        view('footer');

       
    }


    public function insert(){ //post
        if (! $this->request->is('post')) {
                $this->index();
        }
        
        $rules = [
            'fechaCompra' => 'required',
            'cantidadCompra' => 'required',
            'totalCompra' => 'required',
            'descripcionCompra' => 'required'

        ];

        $data = [
          "fechaCompra" => $_POST['fechaCompra'],
          "cantidadCompra" => $_POST['cantidadCompra'],
          "totalCompra" => $_POST['totalCompra'],
          "descripcionCompra" => $_POST['descripcionCompra']

        ] ;


        // Valida los datos
            if (! $this->validate($rules)) {
                // Si la validación falla, vuelve a cargar la vista con los errores
                return     
         
                view('menu') . 
                view('Compras/Add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 
            }
            else{
                $compraM = model('CompraM');
                $compraM->insert($data);
                return redirect()->to(base_url('/Compras'));
            }   

        
    }

    public function delete($idCompra){
       
        $compraM = model('CompraM');
        $compraM->delete($idCompra);
        return redirect()->to(base_url('/Compras'));
    }


}
