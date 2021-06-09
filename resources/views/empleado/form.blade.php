<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : ''  }}"><br />
<labe for="apellido"l>Apellido</label>
<input type="text" name="apellido" value="{{ isset($empleado->apellido) ? $empleado->apellido : ''  }}"><br />
<label for="email">Email</label>
<input type="text" name="email" value="{{ isset($empleado->email) ? $empleado->email : ''  }}"><br />
<label for="foto">Foto</label>
@if(isset($empleado->foto))
<img src="{{ asset('storage').'/'.$empleado->foto }}" width="100"/>
@endif
<input type="file" name="foto"><br />
<button type="submit">{{$modo}}</button>
<a href="{{ url('empleado') }}">Regresar</a>