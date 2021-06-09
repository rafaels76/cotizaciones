<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="mb-3">
                <label for="nombre" class="form-label">Razon social</label>
                <input type="text" class="form-control" name="razon_social" id="razon_social" value="{{ isset($empresa->razon_social) ? $empresa->razon_social : ''  }}">
            </div>
            <div class="mb-3">
                <label for="rif" class="form-label">R.I.F.</label>
                <input type="text" class="form-control" name="rif" id="rif" value="{{ isset($empresa->rif) ? $empresa->rif : ''  }}">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value="{{ isset($empresa->telefono) ? $empresa->telefono : ''  }}">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <textarea class="form-control" name="direccion" id="direccion">{{ isset($empresa->direccion) ? $empresa->direccion : ''  }}</textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="{{ isset($empresa->email) ? $empresa->email : ''  }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3 mr-3">{{$modo}}</button>
                <a href="{{ url('empresa') }}">Regresar</a>
            </div>
        </div>
    </div>
</div>