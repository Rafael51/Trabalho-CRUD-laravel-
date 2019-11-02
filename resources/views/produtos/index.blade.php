@extends('layout')
@section('conteudo')
<h1>PRODUTOS</h1>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<a class="btn btn-primary" href="{{route('produtos.create')}}" role="button">Novo Produto</a>
<table class="table text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Operacoes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
            <td scope="row">{{$produto->id}}</td>
                <td scope="row">{{$produto->nome}}</td>
                <td scope="row">{{$produto->valor}}</td>
                <td>
                    <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('produtos.edit',$produto->id) }}" role="button">Editar</a>
                        @csrf
                        @method('DELETE')
      
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>  
        @endforeach 
    </tbody>
</table>
@endsection


