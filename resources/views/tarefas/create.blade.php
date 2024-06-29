@extends('layouts.app')

@section('conteudo')

<div class="container">
    <h1>Adicionar Tarefa</h1>
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
        </div>
        <div class="form-group">
            <label for="data_vencimento">Data de Vencimento</label>
            <input type="date" class="form-control" id="data_vencimento" name="data_vencimento" required>
        </div>
        <div class="form-group">
            <label for="prioridade">Prioridade</label>
            <select class="form-control" id="prioridade" name="prioridade" required>
                <option value="normal">Normal</option>
                <option value="alta">Alta</option>
                <option value="baixa">Baixa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="concluido">Concluído</label>
            <select class="form-control" id="concluido" name="concluido" required>
                <option value="concluido">Concluído</option>
                <option value="nao_concluido">Não Concluído</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primario">Salvar</button>
    </form>
</div>

@endsection