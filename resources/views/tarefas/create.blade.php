@extends('layouts.app')


@section('conteudo')

<div class="container1">
    <h1 class="">Adicionar Tarefa</h1>
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <div class="">
            <label for="titulo" >Título</label>
            <input type="text"  id="titulo" name="titulo" required>
        </div>
        <div class="">
            <label for="descricao" >Descrição</label>
            <textarea  id="descricao" name="descricao"></textarea>
        </div>
        <div class="">
            <label for="data_vencimento" >Data de Vencimento</label>
            <input type="date" id="data_vencimento" name="data_vencimento">
        </div>
        <div class="">
            <label for="prioridade" >Prioridade</label>
            <select  id="prioridade" name="prioridade" required>
                <option value="normal">Normal</option>
                <option value="alta">Alta</option>
                <option value="baixa">Baixa</option>
            </select>
        </div>
        <div class="">
            <label for="concluido" >Concluido</label>
            <select id="concluido" name="concluido" required>
                <option value="concluido">Concluido</option>
                <option value="não concluido">Nao Concluido</option>
            </select>
        </div>
        <button type="submit" class="btn">Salvar</button>
    </form>
</div>

@endsection
