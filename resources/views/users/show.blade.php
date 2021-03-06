@extends('layouts.layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/users') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Usuario.png')}}">
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

                    <h1>Usuario #{{ $user->id }}</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url('users') }}">
                    <div class="mt-3 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <h2>Docente:</h2>
                                <p>Nombre del usuario: {{ $docent->nombre_completo }}</p>
                                <p>Lugar de nacimiento: {{ $docent->lugar_nac }}</p>
                                <p>Edad: {{ $docent->edad }}</p>
                                <p>Religión: {{ $docent->religion }}</p>
                                <p>Título Profesional: {{ $docent->titulo_prof }}</p>
                                <p>Tipo de Identificación: {{ $docent->tipo_documento }}</p>
                                <p>Número de Identificación: {{ $docent->number_id }}</p>
                                <h2>usuario</h2>
                                <p>Tipo de Usuario: {{
                                ($user->id_tipousuario == 1)?'Directivo':(($user->id_tipousuario == 2)?'Secretaría':'Normal')
                                }}
                                </p>
                                <p>Nombre: {{$user->name}}</p>
                                z <p>Correo electrónico: {{ $user->email }}</p>
                                <hr/>
                                <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Regresar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
