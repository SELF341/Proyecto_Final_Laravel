<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = [
            ['nombre' => 'Laptop HP Victus 15', 'precio' => 7500.00, 'categoria' => 'Electrónica'],
            ['nombre' => 'Teclado Mecánico', 'precio' => 350.00, 'categoria' => 'Perifericos'],
            ['nombre' => 'Monitor MSI G27C4', 'precio' => 1250.99, 'categoria' => 'Monitores'],
            ['nombre' => 'RTX 4070 Ti Super', 'precio' => 7200.00, 'categoria' => 'Hardware'],
            ['nombre' => 'Ryzen 7 7800X3D', 'precio' => 3200.00, 'categoria' => 'Procesadores'],
            ['nombre' => 'Corsair K70 RGB Pro', 'precio' => 890.00, 'categoria' => 'Periféricos'],
            ['nombre' => 'Logitech G Pro X Superlight', 'precio' => 980.00, 'categoria' => 'Periféricos'],
            ['nombre' => 'Samsung Odyssey G5', 'precio' => 2400.00, 'categoria' => 'Monitores'],
        ];

        $precioPromedio = array_sum(array_column($productos, 'precio')) / count($productos);

        return view('productos', compact('productos', 'precioPromedio'));
    }
}