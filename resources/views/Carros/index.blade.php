@extends('Layouts.LayoutFull')
@push('css')
@endpush
@section('conteudo')
<body>
    <a class="btn btn-success" href="./create" role="button" style="margin:10px;float:right">Adicionar</a>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Modelo</th>
            <th scope="col">Marca</th>
            <th scope="col">Ano</th>
            <th scope="col">Versao</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
                <tr>
                    <th scope="row">{{$carro->id}}</th>
                    <td>{{$carro->modelo}}</td>
                    <td>{{$carro->marca}}</td>
                    <td>{{$carro->ano}}</td>
                    <td>{{$carro->versao}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="carros/create" role="button" style="margin:10px;float:right">Editar</a>
                        <a class="btn btn-danger btn-sm" href="carros/create" role="button" style="margin:10px;float:right">Excluir</a>
                    </td>
                </tr>
            @endforeach        
        </tbody>
      </table>
</body>
@endsection

<!-- @push('scripts')
    {{-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script>
        $(".cpf").mask('000.000.000-00')
    </script>
@endpush -->