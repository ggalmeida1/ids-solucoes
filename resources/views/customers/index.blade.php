@extends('adminlte::page')


@section('title', 'Clientes')


@section('content_header')
    <h1>
        <a href="{{ route('customers.create') }}" class="btn btn-sm btn-success">Novo Cliente</a>
    </h1>
@endsection

@section('content')
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data Cobrança</th>
                    <th>Status Pagamento</th>
                    <th>Valor Contrato</th>
                    <th>Valor em Aberto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->nome }}</td>
                        <td>{{ \Carbon\Carbon::parse($customer->dt_cobrança)->format('d/m/Y') }}</td>
                        <td class="badge badge-info">{{ $customer->status }}</td>
                        <td>{{ $customer->valor_contrato }}</td>
                        <td>{{ $customer->valor_aberto }}</td>
                        <td>
                            <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}"
                                class="btn btn-sm btn-info">Editar</a>
                            <form class="d-inline"
                                action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="post"
                                onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $customers->links() }}
@endsection
