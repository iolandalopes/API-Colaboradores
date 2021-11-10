<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColaboradorUpdate;
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

        $dadosForm = $request->all();

        $dados = $this->colaborador->create($dadosForm);

        return response()->json($dados, 201);
    }

    public function show($id)
    {
        $dados = $this->colaborador->find($id);
        return response()->json($dados);
    }


    public function update(ColaboradorUpdate $request, $id)
    {
        if (!$dados = $this->colaborador->find($id))
            return response()->json(['error' => 'Nenhum registro encontrado!'], 404);



        $dadosForm = $request->all();

        $dados->update($dadosForm);

        return response()->json($dados);
    }


    public function destroy($id)
    {
        if (!$dados = $this->colaborador->find($id)) {
            return response()->json(['error' => 'Nenhum registro encontrado!'], 404);
        }
        $dados->delete();
        return response()->json(['sucess' => 'Deletado com sucesso']);
    }
}
