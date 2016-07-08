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

    {!! Form::open(['url' => route('produto.store'), 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'produtoCreate']) !!}
        @include('content.produto.partials.form')
    {!! Form::close() !!}

@endsection

@include('content.produto.index.js')