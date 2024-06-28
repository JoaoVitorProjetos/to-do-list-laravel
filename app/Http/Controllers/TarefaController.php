<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use IlluminateSupportFacadesRoute;
use AppHttpControllersPostController;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'data_vencimento' => 'required',
            'prioridade' => 'required'
          ]);
          Tarefa::create($request->all());
          return redirect()->route('tarefas.index')
            ->with('sucesso','tarefa criada.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'data_vencimento' => 'required',
            'prioridade' => 'required'
          ]);
          $post = Tarefa::find($id);
          $post->update($request->all());
          return redirect()->route('tarefas.index')
            ->with('sucesso', 'tarefa editada.');
    }

    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        return redirect()->route('tarefas.index')
        ->with('sucesso', 'tarefa deletada');
    }

    public function create()
    {
        return view('tarefas.create');
    }

    public function edit($id)
    {
        $tarefa = Tarefa::find($id);
        return view('tarefas.edit', compact('tarefa'));
    } 
}
