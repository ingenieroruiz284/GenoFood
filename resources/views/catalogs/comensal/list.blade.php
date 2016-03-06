@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="<?php echo url('/') ?>/comensal/add" type="button" class="btn btn-primary"> Agregar + </a>
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
                        <th>Genero</th> 
                        <th>Edad</th> 
                        <th>Estatura</th> 
                        <th>PSP</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($comensales as $comensal)
                    <tr>
                        <td>{{$comensal->name}}</td>
                        <td>{{$comensal->genero}}</td>
                        <td>{{$comensal->edad}}</td>
                        <td>{{$comensal->estatura}}</td>
                        <td>{{$comensal->psp}}</td>
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
