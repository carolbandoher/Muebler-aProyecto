<?php

namespace App\Controllers;

class EmpleadoC extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    public function index(): string
    {
        $empleadoM = model('EmpleadoM');
        $data['Emp'] = $empleadoM->findAll();
        return view('head') .
        view ('menu') .
        view ('Empleados/Show' ,$data) .
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
        $empleadoM = model('EmpleadoM');
        $idempleado = $_POST['idEmpleado'];
           
               $data = [
                   'nombreEmpleado' => $_POST['nombreEmpleado'],
                   'apellidoEmpleado' => $_POST['apellidoEmpleado'],
                   'fechaREmpleado' => $_POST['fechaREmpleado'],
                   'telefonoEmpleado' => $_POST['telefonoEmpleado'],
                   'fechaSEmpleado' => $_POST['fechaSEmpleado'],
                   
               ];
           
           
               $empleadoM->set($data)->where('idEmpleado',$idempleado)->update();

               
               return redirect()->to(base_url('/Empleados'));
   
           
    }
    
    public function add(){

    return view('head') . 
    view ('menu') . 
    view ('Empleados/Add') . 
    view ('footer');

    }

    public function Edit($idEmpleado){   //get
        $idEmpleado = $data['idEmpleado'] = $idEmpleado;
        $empleadoM = model('EmpleadoM');
        $data['Emp'] = $empleadoM->where('idEmpleado',$idEmpleado)->findAll();
        return view('head') .
        view('menu') . 
        view('Empleados/Edit',$data) .
        view('footer');

       
    }


    public function insert(){ //post
        if (! $this->request->is('post')) {
                $this->index();
        }
        
        $rules = [
            'nombreEmpleado' => 'required',
            'apellidoEmpleado' => 'required',
            'fechaREmpleado' => 'required',
            'telefonoEmpleado' => 'required',
            'fechaSEmpleado' => 'required'

        ];

        $data = [
          "nombreEmpleado" => $_POST['nombreEmpleado'],
          "apellidoEmpleado" => $_POST['apellidoEmpleado'],
          "fechaREmpleado" => $_POST['fechaREmpleado'],
          "telefonoEmpleado" => $_POST['telefonoEmpleado'],
          "fechaSEmpleado" => $_POST['fechaSEmpleado']

        ] ;


        // Valida los datos
            if (! $this->validate($rules)) {
                // Si la validación falla, vuelve a cargar la vista con los errores
                return     
                view('head') .
                view('menu') . 
                view('Empleados/Add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 
            }
            else{
                $empleadoM = model('EmpleadoM');
                $empleadoM->insert($data);
                return redirect()->to(base_url('/Empleados'));
            }   

        
    }

    public function delete($idEmpleado){
       
        $empleadoM= model('EmpleadoM');
        $empleadoM->delete($idEmpleado);
        return redirect()->to(base_url('/Empleados'));
    }


}
