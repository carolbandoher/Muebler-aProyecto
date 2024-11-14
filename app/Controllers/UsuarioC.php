<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class UsuarioC extends Controller{
   
   public function index(){
    return  view('head').
            
     view('Usuario/login');
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
    
}