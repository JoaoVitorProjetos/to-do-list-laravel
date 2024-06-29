@extends('layouts.app')

@section('conteudo')

<div class="container1">
    <h1 class="">Editar Tarefa</h1>
    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="">
            <label for="titulo">Título</label>
            <input type="text"  id="titulo" name="titulo" value="{{ $tarefa->titulo }}" required>
        </div>
        <div class="">
            <label for="descricao" >Descrição</label>
            <textarea  id="descricao" name="descricao">{{ $tarefa->descricao }}</textarea>
        </div>
        <div class="">
            <label for="data_vencimento" >Data de Vencimento</label>
            <input type="date"  id="data_vencimento" name="data_vencimento" value="{{ $tarefa->data_vencimento }}">
        </div>
        <div class="">
            <label for="prioridade" >Prioridade</label>
            <select id="prioridade" name="prioridade" required>
                <option value="normal" {{ $tarefa->prioridade == 'normal' ? 'selected' : '' }}>Normal</option>
                <option value="alta" {{ $tarefa->prioridade == 'alta' ? 'selected' : '' }}>Alta</option>
                <option value="baixa" {{ $tarefa->prioridade == 'baixa' ? 'selected' : '' }}>Baixa</option>
            </select>
        </div>
        <div class="">
            <label for="concluido" >Concluido</label>
            <select id="concluido" name="concluido" required>
                <option value="concluido" {{ $tarefa->concluido == 'concluido' ? 'selected' : '' }}>Concluido</option>
                <option value="não concluido" {{ $tarefa->concluido == 'nao_concluido' ? 'selected' : '' }}>Nao Concluido</option>
            </select>
        </div>
        <button type="submit" class="btn">Atualizar</button>
    </form>
</div>

@endsection
