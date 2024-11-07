<?php

namespace App\Controllers;

class VentaC extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    public function index(): string
    {
        $ventaM = model('VentaM');
        $data['Ven'] = $ventaM->findAll();
        return view('head') .
        view ('menu') .
        view ('Ventas/Show' ,$data) .
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
        $ventaM = model('VentaM');
        $idventa = $_POST['idVenta'];
           
               $data = [
                   'fechaVenta' => $_POST['fechaVenta'],
                   'cantidadV' => $_POST['cantidadV'],
                   'precioV' => $_POST['precioV'],
                   'metodoPago' => $_POST['metodoPago'],
                   'descripcionVenta' => $_POST['descripcionVenta'],
                   
               ];
           
           
               $ventaM->set($data)->where('idVenta',$idventa)->update();

               
               return redirect()->to(base_url('/Ventas'));
   
           
    }
    
    public function add(){

    return view('head') . 
    view ('menu') . 
    view ('Ventas/Add') . 
    view ('footer');

    }

    public function Edit($idVenta){   //get
        $idVenta = $data['idVenta'] = $idVenta;
        $ventaM = model('VentaM');
        $data['Ven'] = $ventaM->where('idVenta',$idVenta)->findAll();
        return view('head') .
        view('menu') . 
        view('Ventas/Edit',$data) .
        view('footer');

       
    }


    public function insert(){ //post
        if (! $this->request->is('post')) {
                $this->index();
        }
        
        $rules = [
            'fechaVenta' => 'required',
            'cantidadV' => 'required',
            'precioV' => 'required',
            'metodoPago' => 'required',
            'descripcionVenta' => 'required'

        ];

        $data = [
          "fechaVenta" => $_POST['fechaVenta'],
          "cantidadV" => $_POST['cantidadV'],
          "precioV" => $_POST['precioV'],
          "metodoPago" => $_POST['metodoPago'],
          "descripcionVenta" => $_POST['descripcionVenta']

        ] ;


        // Valida los datos
            if (! $this->validate($rules)) {
                // Si la validación falla, vuelve a cargar la vista con los errores
                return     
                view('head') .
                view('menu') . 
                view('Ventas/Add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 
            }
            else{
                $ventaM = model('VentaM');
                $ventaM->insert($data);
                return redirect()->to(base_url('/Ventas'));
            }   

        
    }

    public function delete($idVenta){
       
        $ventaM = model('VentaM');
        $ventaM->delete($idVenta);
        return redirect()->to(base_url('/Ventas'));
    }

 
}
