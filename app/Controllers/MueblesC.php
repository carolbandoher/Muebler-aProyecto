<?php

namespace App\Controllers;

class MueblesC extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    public function index(): string
    {
        $mueblesM = model('MueblesM');
        $data['Mue'] = $mueblesM->findAll();
        return view('head') .
        view ('menu') .
        view ('Muebles/Show' ,$data) .
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
        $mueblesM = model('MueblesM');
        $idmueble = $_POST['idMueble'];
           
               $data = [
                   'nombreMueble' => $_POST['nombreMueble'],
                   'descripcionM' => $_POST['descripcionM'],
                   'precioMueble' => $_POST['precioMueble'],
                   'cantidadInventario' => $_POST['cantidadInventario'],
                   'categoriaMueble' => $_POST['categoriaMueble'],
                   
               ];
           
           
               $mueblesM->set($data)->where('idMueble',$idmueble)->update();

               
               return redirect()->to(base_url('/Muebles'));
   
           
    }
    
    public function add(){

    return view('head') . 
    view ('menu') . 
    view ('Muebles/Add') . 
    view ('footer');

    }

    public function Edit($idMueble){   //get
        $idMueble = $data['idMueble'] = $idMueble;
        $muebleM = model('MueblesM');
        $data['Mue'] = $muebleM->where('idMueble',$idMueble)->findAll();
        return view('head') .
        view('menu') . 
        view('Muebles/Edit',$data) .
        view('footer');

       
    }


    public function insert(){ //post
        if (! $this->request->is('post')) {
                $this->index();
        }
        
        $rules = [
            'nombreMueble' => 'required',
            'descripcionM' => 'required',
            'precioMueble' => 'required',
            'cantidadInventario' => 'required',
            'categoriaMueble' => 'required'

        ];

        $data = [
          "nombreMueble" => $_POST['nombreMueble'],
          "descripcionM" => $_POST['descripcionM'],
          "precioMueble" => $_POST['precioMueble'],
          "cantidadInventario" => $_POST['cantidadInventario'],
          "categoriaMueble" => $_POST['categoriaMueble']

        ] ;


        // Valida los datos
            if (! $this->validate($rules)) {
                // Si la validación falla, vuelve a cargar la vista con los errores
                return     
                view('head') .
                view('menu') . 
                view('Muebles/Add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 
            }
            else{
                $mueblesM = model('MueblesM');
                $mueblesM->insert($data);
                return redirect()->to(base_url('/Muebles'));
            }   

        
    }

    public function delete($idMueble){
       
        $mueblesM = model('MueblesM');
        $mueblesM->delete($idMueble);
        return redirect()->to(base_url('/Muebles'));
    }


}
