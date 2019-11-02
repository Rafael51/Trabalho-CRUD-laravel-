@extends('layout')
@section('conteudo')
<h1>Atualizar Produto</h1>
<form action="{{ route('produtos.update',$produto->id) }}" method="POST">
    @csrf
    @method('PUT')

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>nome:</strong>
        <input type="text" name="nome" class="form-control" placeholder="Informe o nome" value="{{$produto->nome}}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>valor:</strong>
            <input type="number" step="0.01"name="valor" class="form-control" placeholder="Informe o Valor do Produto" value="{{$produto->valor}}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">enviar</button>
            <a class="btn btn-dark" href="{{route('produtos.index')}}" role="button">Voltar</a>
    </div>
</form>

    
@endsection