@extends('layouts.app')

@section('conteudo')

<div class="container">
    <h1>Lista de Tarefas</h1>
    <a href="{{ route('tarefas.create') }}" class="btn btn-primario mb-3">Adicionar Tarefa</a>
    <table class="tabela tabela-listada">
        <thead class="cabeçalho-escuro">
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data de Vencimento</th>
                <th scope="col">Prioridade</th>
                <th scope="col">Concluído</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->titulo }}</td>
                <td>{{ $tarefa->descricao }}</td>
                <td>{{ $tarefa->data_vencimento }}</td>
                <td>{{ $tarefa->prioridade }}</td>
                <td>{{ $tarefa->concluido }}</td>
                <td>
                    <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-aviso btn-pequeno">Editar</a>
                    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-perigo btn-pequeno">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection