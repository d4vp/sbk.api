<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Bicicleta;
use Illuminate\Http\Request;

use App\Http\Resources\V1\BicicletaResource;
use App\Http\Resources\V1\BicicletaCollection;
use Illuminate\Support\Facades\Auth;

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new BicicletaCollection(Bicicleta::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function show(Bicicleta $bicicleta)
    {
        return new BicicletaResource($bicicleta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bicicleta $bicicleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bicicleta $bicicleta)
    {
        $bicicleta->delete();

        return response()->json([
            'message' => 'Success'
        ]); // 204
    }
}
