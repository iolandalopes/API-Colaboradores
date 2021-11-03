<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colaboradores;

class ColaboradorController extends Controller
{

    public function __construct(Colaboradores $colaborador, Request $request)
    {
        $this->colaborador = $colaborador;
        $this->request = $request;
    }

    public function index()
    {
        $dados = $this->colaborador->all();
        return response()->json($dados);
    }


    public function store(Request $request)
    {
        $this->validate($request, $this->colaborador->rules());

        $dadosform = $request->all();

        $dados = $this->colaborador->create($dadosform);

        return response()->json($dados, 201);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
