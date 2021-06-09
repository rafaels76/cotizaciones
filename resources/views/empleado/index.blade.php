@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
<div class="alert alert-primary" role="alert">{{ Session::get('mensaje') }}</div>
@endif
<a href="{{ url('empleado/create') }}" class="btn btn-primary">Crear un nuevo empleado</a>
<table class="table mt-3">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td><img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" class="img-thumbnail img-fluid"/></td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->email }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-primary">
                Editar
                </a>
                /

                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" class="d-inline">
                    @csrf
                    {{ method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('quieres borrar?')" class="btn btn-primary">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
