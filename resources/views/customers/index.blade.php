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
                    <th>Veiculo</th>
                    <th>Status</th>
                    <th>Banco</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->nome }}</td>
                        <td>{{ $customer->veiculo }}</td>
                        <td>{{ $customer->status }}</td>
                        <td>{{ $customer->banco }}</td>
                        <td>
                            <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}"
                                class="btn btn-sm btn-info">Editar</a>
                                <form class="d-inline" action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir?')">
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
