<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Materia; 

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio', [
            'nombre'   => 'Luis Fernando Espinoza Silva',
            'carrera'  => 'Ingeniería de Sistemas',
            'semestre' => 'Sexto semestre',
            'año'      => date('Y'),
        ]);
    }

    public function sobreMi()
    {
        return view('sobre-mi');
    }

    public function materias()
    {
        $materias = Materia::all();

    $promedio = round($materias->avg(fn(Materia $m) => $m->getNota()) ?? 0, 2);

    $aprobadas = $materias->filter(fn(Materia $m) => $m->estaAprobada())->count();

    return view('materias', compact('materias', 'promedio', 'aprobadas'));

    $notas = array_map(fn(Materia $m) => $m->getNota(), $materias);

    $promedio = round(array_sum($notas) / count($notas), 2);

    $aprobadas = count(array_filter($materias, fn(Materia $m) => $m->estaAprobada()));

    return view('materias', compact('materias', 'promedio', 'aprobadas'));
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function procesarContacto(Request $request)
    {
        $validated = $request->validate([
        'nombre' => 'required|min:3|max:100',
        'email' => 'required|email',
        'mensaje' => 'required|min:10',
         ]);

        return redirect()->route('contacto')
        ->with('exito', 'Tu mensaje fue enviado correctamente.');
    }
}