@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-primary" role="alert">{{ Session::get('mensaje') }}</div>
    @endif
    <a href="{{ url('empresa/create') }}">Crear nueva empresa</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Razon Social</th>
                <th>R.I.F.</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empresas as $empresa)
            <tr>
                <td>{{ $empresa->id }}</td>
                <td>{{ $empresa->razon_social }}</td>
                <td>{{ $empresa->direccion }}</td>
                <td>{{ $empresa->telefono }}</td>
                <td>{{ $empresa->email }}</td>
                <td>
                    <a href="{{ url('/empresa/'.$empresa->id.'/edit') }}">
                        Editar
                    </a>
                    /

                    <form action="{{ url('/empresa/'.$empresa->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE')}}
                        <button type="submit" onclick="return confirm('quieres borrar?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection