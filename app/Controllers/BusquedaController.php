<?php

namespace App\Controllers;

use App\Models\MueblesM;

class BusquedaController extends BaseController
{
    public function buscar()
    {
        $query = $this->request->getGet('query'); // Captura el término de búsqueda
        $mueblesM= new MueblesM();

        if ($query) {
            $resultados = $mueblesM->buscarMuebles($query);
        } else {
            $resultados = [];
        }

        return view('resultados_busqueda', ['resultados' => $resultados, 'query' => $query]);
    }
}
