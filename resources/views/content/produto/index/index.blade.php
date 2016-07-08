@extends('layout.index')

@section('content')
    <a href="{{ route('produto.create') }}" class="w3-btn w3-dark-grey"> Novo Produto</a>

    <br/><br/><br/>

    <table id="tblProdutos" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Categoria</th>
            <th>Nome</th>
            <th>Preco</th>
            <th>Descrição</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
        </thead>
    </table>


@endsection

@include('content.produto.index.js')