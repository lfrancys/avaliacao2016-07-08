@extends('layout.index')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    {!! Form::model($produto, ['url' => route('produto.update', $produto->id), 'method' => 'put', 'enctype' => 'multipart/form-data', 'id' => 'produtoEdit']) !!}
        @include('content.produto.partials.form')
    {!! Form::close() !!}

@endsection

@include('content.produto.index.js')