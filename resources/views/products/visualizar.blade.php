@extends('products.productsindex')
@section('content')
<link rel="stylesheet" href="{{ asset('css/visualizar.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes do Produto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row complet">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th>Nome:</th>
                    <td>{{ $product->nome }}</td>
                </tr>
                <tr>
                    <th>Quantidade:</th>
                    <td>{{ $product->quantidade }} Unidades</td>
                </tr>
                <tr>
                    <th>Preço:</th>
                    <td>R$ {{ number_format($product->preco, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Descrição:</th>
                    <td>{{ $product->descricao }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
