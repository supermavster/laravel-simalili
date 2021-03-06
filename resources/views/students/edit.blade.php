@extends('layouts.layout')

@section('title', "Editar Estudiante")

@section('content')


    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/students') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Estudiantes.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                    </div>
                    <div class="col-lg-4 order-lg-1">
                        <div class="card-profile-stats d-flex justify-content-center">
                            <div style="background:white">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <span class="heading">Por favor corrige los errores debajo:</span>
                                        <span class="description">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <h1>Editar Estudiante</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url("students/{$student->id}") }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <h2>Estudiante:</h2>

                                @if(isset($student))
                                    <div class="form-group">
                                        <label for="nombre_est">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre_est" id="nombre_est"

                                               value="{{ old('nombre_est',$student->nombre_est) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="apellido_est">Apellido:</label>
                                        <input type="text" class="form-control" name="apellido_est" id="apellido_est"

                                               value="{{ old('apellido_est',$student->apellido_est) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="genero">Genero:</label>
                                        <div class="dropdown">
                                            <select id="genero" name="genero"
                                                    class="btn btn-secondary dropdown-toggle">
                                                <option class="dropdown-item"
                                                        selected>{{ old('genero',$student->genero) }}</option>
                                                <option class="dropdown-item">Hombre</option>
                                                <option class="dropdown-item">Mujer</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="doc_id">Documento de Identificación:</label>
                                        <div class="dropdown">
                                            <select id="doc_id" name="doc_id"
                                                    class="btn btn-secondary dropdown-toggle">
                                                <option class="dropdown-item"
                                                        selected>{{ old('doc_id',$student->doc_id) }}</option>
                                                <option class="dropdown-item">Cedula de Ciudadania</option>
                                                <option class="dropdown-item">Pasaporte</option>
                                                <option class="dropdown-item">Cedula Extranjera</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="num_id">Número de Identificación:</label>
                                        <input type="text" class="form-control" name="num_id" id="num_id"

                                               value="{{ old('num_id',$student->num_id) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="lugar_nac">Lugar de Nacimiento:</label>
                                        <input type="text" class="form-control" name="lugar_nac" id="lugar_nac"

                                               value="{{ old('lugar_nac',$student->lugar_nac) }}">
                                    </div>

                                    <label for="fecha_nac"> Fecha de Nacimiento</label>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input id="fecha_nac" name="fecha_nac" class="form-control datepicker"

                                                   type="text" value="{{old('fecha_nac',$student->fecha_nac)}}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="edad">Edad:</label>
                                        <input type="text" class="form-control" name="edad" id="edad"
                                               value="{{ old('edad',$student->edad) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="religion">Religión:</label>
                                        <input type="text" class="form-control" name="religion" id="religion"

                                               value="{{ old('religion',$student->religion) }}">
                                    </div>

                                @else
                                    <b>No existe un student para este usuario</b> Por favor cree este usuario con el
                                    mismo <b>Nombre</b> y <b>Correo</b>
                                    <a href="{{ url('/students/new') }}" class="btn btn-warning btn-lg">Crear</a>
                                @endif

                                <hr/>
                                <div class="text-center">
                                    <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Regresar</a>
                                    <button type="submit" class="btn btn-primary btn-lg">Actualizar Datos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
