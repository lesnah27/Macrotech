@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
             <div class="col-md-4 mb-3">
                <label for="category_id">Categoría </label>
                <select name="category_id" class="form-control">
                    <option value="0">General</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                             @if($incident->category_id == $category->id) selected
                              @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
             </div>
            </div>
            <div class="form-group">
              <div class="col-md-4 mb-3">
                <label for="severity">Severidad</label>
                <select name="severity" class="form-control">
                    <option value="M" @if($incident->severity=='M') selected @endif>Menor</option>
                    <option value="N" @if($incident->severity=='N') selected @endif>Normal</option>
                    <option value="A" @if($incident->severity=='A') selected @endif>Alta</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4 mb-3">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $incident->title) }}">
            </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="serial">Serial</label>
                  <input type="text" name="serial" class="form-control" value="{{ old('serial',$incident->serial) }}">
                </div>
              </div>


                 <!--<div class="form-group">-->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="marca">Marca</label>
                  <input type="text" name="marca" class="form-control" value="{{ old('marca',$incident->marca) }}">
                </div>
              </div>

              <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo" class="form-control" value="{{ old('modelo',$incident->modelo) }}">
                      </div>
              </div>



              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="cliente">Cliente</label>
                  <input type="text" name="cliente" class="form-control" value="{{ old('cliente',$incident->cliente) }}">
                </div>
        </div>

        <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="ubicacion">Ubicacion</label>
                  <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion',$incident->ubicacion) }}">
                </div>
        </div>



        <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="tecnico">Tecnico Asignado</label>
              <input type="text" name="tecnico" class="form-control" value="{{ old('tecnico',$incident->tecnico) }}">
            </div>
        </div>










            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control">{{ old('description', $incident->description) }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>

    </div>
</div>
@endsection
