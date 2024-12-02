<?php

namespace App\Controllers;

class VentaC extends BaseController
{
    protected $helpers = ['form'];

    public function index(): string
    {
        $this->checkAccess([0, 1]); // Solo admin (0) y empleado (1) pueden acceder

        $ventaM = model('VentaM');
        $data['Ven'] = $ventaM->findAll();
        return 
               view('menu') .
               view('Ventas/Show', $data) .
               view('footer');
    }
    
    public function valida()
    {
        $session = session();
        if ($session->has('logged_in')) {
            return redirect()->to(base_url('/Usuario'));
        }
        print_r($_SESSION);
    }

    public function Sesion()
    {
        $this->checkAccess([0]); // Solo admin (0) puede acceder

        $session = session();
        $data1['nombreUsuario'] = $session->get('nombreUsuario');

        $clienteM = model('ClienteM');
        $data['cliente'] = $clienteM->findAll();

        return 
               view('menu', $data1) .
               view('marcas/show', $data) .
               view('footer');
    }

    public function update()
    {
        $this->checkAccess([0, 1]); // Admin (0) y empleado (1) pueden actualizar

        $ventaM = model('VentaM');
        $idventa = $_POST['idVenta'];

        $data = [
            'fechaVenta' => $_POST['fechaVenta'],
            'cantidadV' => $_POST['cantidadV'],
            'precioV' => $_POST['precioV'],
            'metodoPago' => $_POST['metodoPago'],
            'descripcionVenta' => $_POST['descripcionVenta'],
        ];

        $ventaM->set($data)->where('idVenta', $idventa)->update();

        return redirect()->to(base_url('/Ventas'));
    }

    public function add()
    {
        $this->checkAccess([0, 1]); // Admin (0) y empleado (1) pueden agregar ventas

        return 
               view('menu') .
               view('Ventas/Add') .
               view('footer');
    }

    public function Edit($idVenta)
    {
        $this->checkAccess([0, 1]); // Admin (0) y empleado (1) pueden editar

        $ventaM = model('VentaM');
        $data['idVenta'] = $idVenta;
        $data['Ven'] = $ventaM->where('idVenta', $idVenta)->findAll();

        return 
               view('menu') .
               view('Ventas/Edit', $data) .
               view('footer');
    }

    public function insert()
    {
        $this->checkAccess([0, 1]); // Admin (0) y empleado (1) pueden insertar

        if (!$this->request->is('post')) {
            return $this->index();
        }

        $rules = [
            'fechaVenta' => 'required',
            'cantidadV' => 'required',
            'precioV' => 'required',
            'metodoPago' => 'required',
            'descripcionVenta' => 'required',
        ];

        $data = [
            'fechaVenta' => $_POST['fechaVenta'],
            'cantidadV' => $_POST['cantidadV'],
            'precioV' => $_POST['precioV'],
            'metodoPago' => $_POST['metodoPago'],
            'descripcionVenta' => $_POST['descripcionVenta'],
        ];

        if (!$this->validate($rules)) {
            return 
                   view('menu') .
                   view('Ventas/Add', ['validation' => $this->validator]) .
                   view('footer');
        }

        $ventaM = model('VentaM');
        $ventaM->insert($data);

        return redirect()->to(base_url('/Ventas'));
    }

    public function delete($idVenta)
    {
        $this->checkAccess([0]); // Solo admin (0) puede eliminar

        $ventaM = model('VentaM');
        $ventaM->delete($idVenta);

        return redirect()->to(base_url('/Ventas'));
    }

    /**
     * Método para verificar el acceso basado en roles.
     */
    private function checkAccess(array $allowedRoles)
    {
        $session = session();
        $userRole = $session->get('rol'); // 0: admin, 1: empleado, 2: cliente

        if (!$session->has('logged_in') || !in_array($userRole, $allowedRoles)) {
            return redirect()->to(base_url('/acceso-denegado'))->send();
        }
    }
}
