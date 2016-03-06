@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <blockquote>
                    <p>
                        Generacion de rutas de entrega
                    </p>
                </blockquote>
            </div>
        </div>
    
    Comensal
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


    Cocinero
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
                    @foreach($cocineros as $cocinero)
                        <tr>
                            <td>{{$cocinero->name}}</td>
                            <td>{{$cocinero->telefono}}</td> 
                            <td>{{$cocinero->email}}</td> 
                            <td>{{$cocinero->especialidad}}</td> 
                        </tr> 
                        @endforeach
                    </tbody>
                </table>  
                </div>
            </div>
        </div>


    Repartidor
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
                    @foreach($repartidores as $repartidor)
                        <tr>
                            <td>{{$repartidor->name}}</td>
                            <td>{{$repartidor->telefono}}</td> 
                            <td>{{$repartidor->email}}</td> 
                            <td>{{$repartidor->especialidad}}</td> 
                        </tr> 
                        @endforeach
                    </tbody>
                </table>  
                </div>
            </div>
        </div>


 <div class="row">
            <div class="col-md-10 col-md-offset-1">
        <iframe src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyD6wINdM_YNVqkB-zzPStSDV4fkCcGs9Vk&amp;origin=La+Condesa+df&amp;destination=Colonia+Del+valle&amp;" style="
    width: 100%;
    min-height: 600px;
    border: 0px;
"></iframe>
</div>
</div>



 
    </div>
 
@endsection
