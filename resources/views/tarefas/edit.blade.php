@extends('layouts.app')

@section('conteudo')

<div class="container">
    <h1>Editar Tarefa</h1>
    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $tarefa->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao">{{ $tarefa->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label for="data_vencimento">Data de Vencimento</label>
            <input type="date" class="form-control" id="data_vencimento" name="data_vencimento" value="{{ $tarefa->data_vencimento }}">
        </div>
        <div class="form-group">
            <label for="prioridade">Prioridade</label>
            <select class="form-control" id="prioridade" name="prioridade" required>
                <option value="normal" {{ $tarefa->prioridade == 'normal' ? 'selected' : '' }}>Normal</option>
                <option value="alta" {{ $tarefa->prioridade == 'alta' ? 'selected' : '' }}>Alta</option>
                <option value="baixa" {{ $tarefa->prioridade == 'baixa' ? 'selected' : '' }}>Baixa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="concluido">Concluído</label>
            <select class="form-control" id="concluido" name="concluido" required>
                <option value="concluido" {{ $tarefa->concluido == 'concluido' ? 'selected' : '' }}>Concluído</option>
                <option value="não concluido" {{ $tarefa->concluido == 'não concluido' ? 'selected' : '' }}>Não Concluído</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primario">Atualizar</button>
    </form>
</div>

@endsection
