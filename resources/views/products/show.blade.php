@extends('products.layout')
  
@section('content')
    <div style="padding-top: 50px;" class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center;">Produto</h2>
            </div>
        </div>
    </div>
   
    <div class="row d-flex justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-center">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $product->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-center">
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $product->preco }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-center">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->descricao }}
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
        </div>
    </div>
@endsection