@extends('adminlte::page')
@section('title','Novo Cliente')
@section('content_header')
 <h1>
    Novo Cliente
</h1>
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5>
                    <i class="icon fa fa-ban"></i> Ocorreu um erro</h5>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{route('customers.store')}}" method="POST" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome Completo</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{old('nome')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Veículo</label>
                    <div class="col-sm-10">
                        <input type="text" name="veiculo" value="{{old('veiculo')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PA</label>
                    <div class="col-sm-10">
                        <input type="text" name="pa" value="{{old('pa')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="status" value="{{old('status')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Banco</label>
                    <div class="col-sm-10">
                        <input type="text" name="banco" value="{{old('banco')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Total Divida</label>
                    <div class="col-sm-10">
                        <input type="text" name="total_divida" value="{{old('total_divida')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Valor Quitado</label>
                    <div class="col-sm-10">
                        <input type="text" name="valor_quitado" value="{{old('valor_quitado')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Entrada</label>
                    <div class="col-sm-10">
                        <input type="text" name="entrada" value="{{old('entrada')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Qtd Parcelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="qt_parcelas" value="{{old('qt_parcelas')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Valor Parcela</label>
                    <div class="col-sm-10">
                        <input type="text" name="valor_parcela" value="{{old('valor_parcela')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Notas</label>
                    <div class="col-sm-10">
                        <input type="text" name="notas" value="{{old('notas')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Revisão</label>
                    <div class="col-sm-10">
                        <input type="text" name="revisao" value="{{old('revisao')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ação Tomada</label>
                    <div class="col-sm-10">
                        <input type="text" name="acao_tomada" value="{{old('acao_tomada')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Buscas</label>
                    <div class="col-sm-10">
                        <input type="text" name="buscas" value="{{old('buscas')}}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Valor do Contrato</label>
                    <div class="col-sm-10">
                        <input type="text" name="buscas" value="{{old('buscas')}}" class="form-control" />
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Data da Cobrança</label>
                        <div class="col-sm-10">
                            <input type="text" name="dt_cobranca" value="{{old('dt_cobranca')}}" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" value="Salvar" class="btn btn-success" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
