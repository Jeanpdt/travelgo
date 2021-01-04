@extends('products.layout')
 
@section('content')
    <div style="padding-top: 50px;" class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produtos</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col" width="280px" style="text-align: center">Ação</th>
            </tr>
        <thead>
        <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ ++$i }}</td>
            <td>{{ $product->nome }}</td>
            <td>{{ $product->preco }}</td>
            <td>{{ $product->descricao }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-flex justify-content-center">
                    <div class="btn-group" role="group" aria-label="Ex.">
                        <a class="btn btn-secondary" href="{{ route('products.show',$product->id) }}"><i class="far fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"></i></a>
                        
                        @csrf
                        @method('DELETE')
                        <button type="primary" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a class="btn btn-success" href="{{ route('products.create') }}"><i class="fas fa-plus-square"></i> Produto</a>
    </div>
  
    {!! $products->links() !!}
      
@endsection