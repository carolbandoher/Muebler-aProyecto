<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class UsuarioC extends Controller{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];
   
   public function index(){
    return            
     view('Usuario/login');
   }

   
   public function index2(): string
   {
       $usuarioM = model('UsuarioM');
       $data['usu'] = $usuarioM->findAll();
       return 
       view ('menu') .
       view ('Administrador/Show' ,$data) .
       view ('footer');

   }

   

   public function acceder(){
    $nombreUsuario = $_POST['nombreUsuario'];
    $pass = $_POST['pass'];

    $usuarioM = model('UsuarioM');
    $session = session();

    $result = $usuarioM->valida($nombreUsuario,$pass);
    if(count($result)>0){
        
        $newdata = [
            'nombreUsuario'  => $result[0]->nombreUsuario,
            'rol'     => $result[0]->rol,
            'logged_in' => TRUE,
        ];
        
        $session->set($newdata);

        switch ($result[0]->rol) {
            case 0:
                return redirect()->to(base_url('/Administrador'));
            case 1:
                return redirect()->to(base_url('/Muebles'));
            case 2:
                return redirect()->to(base_url('/front/Principal'));
            default:
                return redirect()->to(base_url('/login'));
        }
        
        return redirect()->to(base_url('/Clientes'));
    }
    else{
        $session->destroy();
        return redirect()->to(base_url('/Usuario'));
    }
   }


   public function salir(){
    $array_items = ['nombreUsuario', 'rol','logged_in'];
    $session = session();
    $session->remove($array_items);
   
    return redirect()->to(base_url('/Usuario'));

   }

   public function update(){
    $usuarioM = model('UsuarioM');
    $idusuario = $_POST['idUsuario'];
       
           $data = [
               'nombreUsuario' => $_POST['nombreUsuario'],
               'apellidoPaterno' => $_POST['apellidoPaterno'],
               'apellidoMaterno' => $_POST['apellidoMaterno'],
               'telefono' => $_POST['telefono'],
               'correo' => $_POST['correo'],
               
           ];
       
       
           $usuarioM->set($data)->where('idusuario',$idusuario)->update();

           
           return redirect()->to(base_url('/Administrador'));

       
}

public function add(){

return 
view ('menu') . 
view ('Administrador/Add') . 
view ('footer');

}

public function Edit($idUsuario){   //get
    $idUsuario = $data['idUsuario'] = $idUsuario;
    $usuarioM = model('UsuarioM');
    $data['usua'] = $usuarioM->where('idUsuario',$idUsuario)->findAll();
    return 
    view('menu') . 
    view('Administrador/Edit',$data) .
    view('footer');

   
}


public function insert(){ //post
    if (! $this->request->is('post')) {
            $this->index();
    }
    
    $rules = [
        'nombreUsuario' => 'required',
        'apellidoPaterno' => 'required',
        'apellidoMaterno' => 'required',
        'telefono' => 'required',
        'correo' => 'required',
        'rol' => 'required',
        'pass' => 'required'

    ];

    $data = [
      "nombreUsuario" => $_POST['nombreUsuario'],
      "apellidoPaterno" => $_POST['apellidoPaterno'],
      "apellidoMaterno" => $_POST['apellidoMaterno'],
      "telefono" => $_POST['telefono'],
      "correo" => $_POST['correo'],
      "rol" => $_POST['rol'],
      "pass" => $_POST['pass']

    ] ;


    // Valida los datos
        if (! $this->validate($rules)) {
            // Si la validación falla, vuelve a cargar la vista con los errores
            return     
        
            view('menu') . 
            view('Administrador/Add',[
                'validation' => $this->validator
            ]) .
            view('footer'); 
        }
        else{
            $usuarioM = model('UsuarioM');
            $usuarioM->insert($data);
            return redirect()->to(base_url('/Administrador'));
        }   

    
}

public function delete($idUsuario){
   
    $usuarioM = model('UsuarioM');
    $usuarioM->delete($idUsuario);
    return redirect()->to(base_url('/Administrador'));
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
    return 
            view('menu',$data1) . 
            view('marcas/show', $data) .
            view('footer');
}


    
}