<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    public function index()
    {
        return Colaborador::all();
    }

    public function store(Request $request)
    {
        Colaborador::create($request->all());
    }

   
    public function show($id)
    {
        return Colaborador::findOrFail($id);
    }

 
    public function update(Request $request, $id)
    {
       $colaborador = Colaborador::findOrFail($id);
       $colaborador->update($request->all());
    }

    public function destroy($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        $colaborador->delete();
    }
}
