<?php

namespace App\Http\Controllers;

use App\Models\Bicicleta;
use Illuminate\Http\Request;

class BicicletaController extends Controller
{
    public function index()
    {
        return view('index', [
        'bicicletas'=> Bicicleta::latest()->paginate()
        ]);
    }
}
