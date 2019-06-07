@extends('layouts.layout')

@section('title', "Lista")

@section('content')
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <img class="rounded-circle" src="{{asset('img/icons/Listas.png')}}">
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                    </div>
                    <div class="col-lg-4 order-lg-1">
                        <div class="card-profile-stats d-flex justify-content-center">
                            <div style="background:white">
                                <span class="heading">Lista de:</span>
                                <span class="description">GRADO ( Nombre del grado)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <h1>LISTA DEL GRADO ( Nombre del grado)</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <div class="mt-3 py-5 border-top text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <table class="tableizer-table col-lg-12">
                                <tbody>
                                <tr>
                                    <td>Código</td>
                                    <td>Nombre completo</td>
                                    <td>Notas</td>
                                    <td>Evaluación Bimestral</td>
                                    <td>Fallas</td>
                                    <td>Definitiva</td>
                                </tr>
                                @foreach($estudiantes as $value)
                                    <tr>
                                        <td> {{$count++}}</td>
                                        <td>{{ $value->nombre_est }}</td>
                                        <td>{{ $value->apellido_est }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <hr/>
                            <button class="btn btn-danger btn-lg" type="button">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
