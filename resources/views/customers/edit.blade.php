@extends('adminlte::page')
@section('title', 'Editar Cliente')
@section('content_header')
    <h1>
        Editar Cliente
    </h1>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5>
                    <i class="icon fa fa-ban"></i> Ocorreu um erro
                </h5>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('customers.update', ['customer' => $customer->id]) }}" method="POST"
                class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome Completo</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{ $customer->nome }}"
                            class="form-control @error('name') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Veículo</label>
                    <div class="col-sm-10">
                        <input type="text" name="veiculo" value="{{ $customer->veiculo }}"
                            class="form-control @error('name') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PA</label>
                    <div class="col-sm-10">
                        <input type="text" name="pa" value="{{ $customer->pa }}"
                            class="form-control @error('pa') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="status" value="{{ $customer->status }}"
                            class="form-control @error('status') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Banco</label>
                    <div class="col-sm-10">
                        <input type="text" name="banco" value="{{ $customer->banco }}"
                            class="form-control @error('banco') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Total Divida</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" name="total_divida" value="{{ $customer->total_divida }}"
                            class="form-control @error('total_divida') is-invalid @enderror" />
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Valor Quitado</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" name="valor_quitado" value="{{ $customer->valor_quitado }}"
                            class="form-control @error('valor_quitado') is-invalid @enderror" />
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Entrada</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" name="entrada" value="{{ $customer->entrada }}"
                            class="form-control @error('entrada') is-invalid @enderror" />
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Qtd Parcelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="qt_parcelas" value="{{ $customer->qt_parcelas }}"
                            class="form-control @error('qt_parcelas') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Valor Parcela</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" name="valor_parcela" value="{{ $customer->valor_parcela }}"
                            class="form-control" />
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Notas</label>
                    <div class="col-sm-10">
                        <input type="text" name="notas" value="{{ $customer->notas }}"
                            class="form-control @error('notas') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Revisão</label>
                    <div class="col-sm-10">
                        <input type="text" name="revisao" value="{{ $customer->revisao }}"
                            class="form-control @error('revisao') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ação Tomada</label>
                    <div class="col-sm-10">
                        <input type="text" name="acao_tomada" value="{{ $customer->acao_tomada }}"
                            class="form-control @error('acao_tomada') is-invalid @enderror" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Buscas</label>
                    <div class="col-sm-10">
                        <input type="text" name="buscas" value="{{ $customer->buscas }}"
                            class="form-control @error('buscas') is-invalid @enderror" />
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Valor Contrato</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" name="valor_contrato" value="{{ $customer->valor_contrato }}"
                            class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Data Cobrança</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" name="dt_cobranca" value="{{ $customer->dt_cobranca }}"
                            class="form-control col-sm-10" data-inputmask-alias="datetime"
                            data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Valor Aberto</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" name="valor_aberto" value="{{ $customer->valor_aberto }}"
                            class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">Valor Cobrança</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" name="vl_cobranca" value="{{ $customer->vl_cobranca }}"
                            class="form-control" />
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </div>



    <div class="form-group">
        <div class="col-sm-10">
            <input type="submit" value="Salvar" class="btn btn-success" />
        </div>
    </div>
    </form>
    </div>
    </div>
@endsection

@section('footer')

@endsection
