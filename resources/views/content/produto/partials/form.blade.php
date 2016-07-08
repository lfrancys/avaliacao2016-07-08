@section('content')
    @parent

    <table class="w3-table" width="100%">
        <tr>
            <td>{{ Form::label('categoryId', 'Categoria') }}</td>
            <td>{{ Form::select('categoryId', $categorias) }}</td>
        </tr>

        <tr>
            <td>{{ Form::label('productName', 'Nome') }}</td>
            <td>{{ Form::text('productName') }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('productPrice', 'Preço') }}</td>
            <td>{{ Form::text('productPrice') }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('productPicture', 'Foto') }}</td>
            <td>{{ Form::file('productPrice') }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('productionDescription', 'Descrição') }}</td>
            <td>{{ Form::textarea ('productDescription') }}</td>
        </tr>

        <tr>
            <td colspan="2" style="text-align: center">
                {!! Form::reset('Limpar', ['class' => 'w3-btn w3-dark-grey']) !!}
                {!! Form::submit('Salvar', ['class' => 'w3-btn w3-teal']) !!}
            </td>
        </tr>
    </table>

@endsection

@include('content.produto.index.js')