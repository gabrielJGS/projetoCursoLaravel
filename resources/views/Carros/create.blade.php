@extends('Layouts.LayoutFull')
@push('css')
@endpush
@section('conteudo')

<body>
    <div class="container">
        <h1>Cadastro de Carro</h1>
        <form method="post" action="{{ route('carros.store') }}" class="form-horizontal form-validate">
            {{csrf_field()}}
            <div class="form-group">
                <label>Modelo:</label>
                <input id="modelo" class="form-control" name="modelo" type="text" placeholder="Digite o modelo">
            </div>
            <div class="form-group">
                <label>Marca:</label>
                <input id="marca" type="text" name="marca" class="form-control" placeholder="Digite a marca" />
            </div>
            <div class="form-group">
                <label>Versão:</label>
                <input id="versao" class="form-control" name="versao" type="text" placeholder="Digite a versão">
            </div>
            <div class="form-group">
                <label>Ano:</label>
                <input id="ano" class="form-control" name="ano" type="number" placeholder="Digite o ano">
            </div>
            <div class="box">
                <label>Ativo:</label>
                <input id="em_producao" name="em_producao" type="checkbox" value="{{old("em_producao")}}"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" style="float:right"><i class="fas fa-check-circle"></i> Cadastrar</button>
            </div>
        </form>
        <a class="btn btn-primary btn-sm" href="{{ route('carros.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
    </div>
</body>
@endsection