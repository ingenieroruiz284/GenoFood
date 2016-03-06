@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="<?php echo url('/') ?>/repartidor/add" type="button" class="btn btn-primary"> Agregar + </a>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                

                <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th> 
                        <th>Telefono</th> 
                        <th>Email</th> 
                        <th>Especialidad</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($comensales as $comensal)
                    <tr>
                        <td>{{$comensal->name}}</td>
                        <td>{{$comensal->telefono}}</td> 
                        <td>{{$comensal->email}}</td> 
                        <td>{{$comensal->especialidad}}</td> 
                    </tr> 
                    @endforeach
                </tbody>
            </table>


                </div>
            </div>
        </div>
    </div>

    @push('scripts')
     
    </script>
    @endpush
@endsection
