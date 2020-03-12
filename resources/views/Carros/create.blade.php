@extends('Layouts.LayoutFull')
@push('css')
@endpush
@section('conteudo')

<body>
    <div class="container">
        <h1>Cadastro de Carro</h1>
        <form method="post" action="{{ route('carros.store') }}">
            <div class="form-group">
                <label>Modelo:</label>
                <input class="form-control" name="inputNome" type="text" placeholder="Digite o modelo">
            </div>
            <div class="form-group">
                <label>Marca:</label>
                <input id="cpf" type="text" name="cpf" class="form-control" placeholder="Digite a marca" />
            </div>
            <div class="form-group">
                <label>Versão:</label>
                <input class="form-control" name="inputEndereco" type="text" placeholder="Digite a versão">
            </div>
            <div class="form-group">
                <label>Ano:</label>
                <input class="form-control" name="inputEndereco" type="number" placeholder="Digite o ano">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" style="float:right">Cadastrar</button>
                <a class="btn btn-primary btn-sm" href="./" role="button">Voltar</a>
            </div>
        </form>
    </div>
</body>
@endsection