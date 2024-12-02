<?php

namespace App\Controllers;

class Categoria extends BaseController
{
    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    public function Index()
    {
        
        $mueblesM = model('MueblesM');
        
        $productos['producto'] = $mueblesM->findAll();
        
        return 
            view('menu', $productos) .
            view('pagina/listaProductos').
            view('footer');
    }

    
    public function Producto($idMueble)
    {
        
        $mueblesM = model('MueblesM');
        
        $productos['producto'] = $mueblesM->where('idMueble', $idMueble)->findAll();
        
        return 
            view('menu', $productos) .
            view('pagina/detalleProducto').
            view('footer'); 
    }

    public function ValidaUsuario(){
        $nombreUsuario = $_POST['nombreUsuario'];
        $pass = $_POST['pass'];
    
        $usuarioM = model('UsuarioM');
        $session = session();
    
        $result = $usuarioM->valida($nombreUsuario,$pass);
        if(count($result)>0){
            
            $newdata = [
                'nombreUsuario'  => $result[0]->nombreUsuario,
                'rol'     => $result[0]->rol,
                'carrito' => null,
                'logged_in' => TRUE,
            ];
            $session->set($newdata);
            return redirect()->to(base_url('/pagina'));
        }
        else{
            print "no hay";
        }

    }


    public function verCarrito(){
        $data['session'] =$session= session();
        return view('menu', $data).
        view('pagina/verCarrito').
        view('footer');

    }

    public function insertCarrito()
    {
        $session = session();

        $idMueble = $_POST['idMueble'];
        $nombre = $this->request->getPost('nombre');
        $cantidad =$this->request->getPost('cantidad');
        $costo =$this->request->getPost('costo');
        $subtotal = $cantidad * $costo;

        $carrito = $session->get('carrito') ??[];
        $item = [
            "idMueble" => $idMueble,
            "nombre" => $nombre,
            "cantidad" => $cantidad,
            "costo" => $costo,
            "subtotal" => $subtotal
        ];

        if(isset($carrito[$idMueble])){
           $carrito[$idProducto]['cantidad'] += $cantidad;
           $carrito[$idProducto]['subtotal'] = $carrito[$idProducto]['cantidad']* $costo;
        }else {
            $carrito[$idMueble] = $item;
        }

        $session->set('carrito', $carrito);

        return redirect()->to(base_url('pagina/verCarrito'));

    }

    
    public function salir(){
        $array_items = ['nombreUsuario', 'rol','logged_in'];
        $session = session();
        $session->remove($array_items);
       
        return redirect()->to(base_url('/Usuario'));
    
       }
    


    public function pagar (){
        $session = session();

        $ventasM = model('VentaMuebles');
        $carritoM = model('CarritoModel');
        $total = $_POST['total'];
        $dataventa =[
           'idUsuario'=>1,
           'fecha'=> date('y-m-d'),
           'total'=> $total 
        ];
        $ventasM->insert($dataventa);
        $idVenta = $ventasM->getInsertID();
     
        foreach ($session-> get('carrito') as $item){
            $dataVentaProducto = [
                'idVenta' => $idVenta,
                'idProducto' => $item['idProducto'],
                'cantidad' => $item['cantidad'],
                'costo' => $item['costo'],
                'subtotal' => $item['subtotal']
           
                
            ];
            $carritoM ->insert($dataVentaProducto);
           
            
        }
        echo ("cihdo");

    }
}