@section('javascript')
    @parent

    <script>

        $(document).ready(function(){

            {{-- data = {!!  json_encode($produtos) !!}; --}}

            $('#tblProdutos').DataTable({
                serverSide: false,
                paging: true,
                autoWidth: false,
                retrieve: true,
                rowId: 'id',
                /*ajax: {
                    url : "{!! route('produto.index') !!}"
                },*/
                //data: data,
                responsive: true,
                columns: [
                    {data: 'categoryId', name: 'Categoria'},
                    {data: 'productName', name: 'Nome'},
                    {data: 'productPrice', name: 'Preco'},
                    {data: 'productDescription', name: 'Descrição'},
                    {data: 'productPicture', name: 'Foto'},
                    []
                ],
                name : 'Produtos'
            });

        });
    </script>

@endsection