@extends('products.productsindex')
@section('content')
    <div>
    @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Preencha todos os campos obrigatórios corretamente<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> 
    <div class="content complet">
        <h2>Novo Produto</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        <input type="text" name="nome" class="form-control" placeholder="Nome Produto">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong>Preço:</strong>
                        <input type="number" name="preco" class="form-control" placeholder="R$">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong>Quantidade:</strong>
                        <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descrição:</strong>
                        <textarea class="form-control" style="height:400px" name="descricao" placeholder="Descrição"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                   <a class="btn btn-danger" href="{{ route('products.index') }}">Voltar</a>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection


<script>
    $(document).ready(function () {
        // Adicionando uma Máscara para o campo de preço
        $('#price-input').inputmask('currency', {
            prefix: 'R$ ',
            alias: 'numeric',
            groupSeparator: ',',
            autoGroup: true,
            digits: 2,
            digitsOptional: false,
            placeholder: '0',
            radixPoint: ',', 
        });
    });
</script>
