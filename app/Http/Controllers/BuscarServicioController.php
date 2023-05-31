<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class BuscarServicioController extends Controller
{
    public function index()
    {
        return view("consult.buscarservicio");
    }

    public function search(Request $request)
    {
        $flag = false;

        $ventas = Servicio::query()
        ->with('cliente', 'estadoservicio', 'tipocomprobante', 'serviciodetalles','user');

        if ($request->filled('email')) {
            $email = $request->email;
            $ventas->where('estado','A')
            ->whereHas('cliente', function ($query) use ($email) {
                $query->where('email', '=', $email);
            });

            $flag = true;
        }

        if ($flag) {
            return $ventas->get();
        } else {
            return [];
        }

    }
}
