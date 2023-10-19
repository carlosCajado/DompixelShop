@extends('products.productsindex')
@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Catálogo de Produtos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}">Adicionar Novo Produto</a>
        </div>
    </div>
</div>

@if ($message = Session::get('Sucesso'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="table-responsive complet">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Detalhes</th>
                <th width="400px"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nome }}</td>
                    <td>{{ $product->quantidade }} Unidades</td>
                    <td>R$ {{ number_format($product->preco, 2, ',', '.') }}</td>
                    <td>{{ $product->descricao }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Visualizar</a>
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $products->links('vendor.pagination.pagination') !!}
</div>
@endsection
