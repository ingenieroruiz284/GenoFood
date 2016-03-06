@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <blockquote>
                    <p>
                        Ayudanos a repartir la salud
                    </p>
                </blockquote>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default"> 

                    <form class="form-horizontal" id="calculate_genotype" style="padding: 40px;" action="<?php echo url('/') ?>/repartidor/addws" method="post">

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="name" name="name"
                                       placeholder="Tu nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="especialidad" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" required class="form-control" id="email" name="email"
                                       placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="especialidad" class="col-sm-2 control-label">Teléfono</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="telefono" name="telefono"
                                       placeholder="Teléfono">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="especialidad" class="col-sm-2 control-label">Especialidad</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="especialidad" name="especialidad"
                                       placeholder="Especialidad">
                            </div>
                        </div>
 
 

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="calcula" class="btn btn-primary">Inscribir</button>
                                <a href="<?php echo url('/') ?>/repartidor/list" class="btn btn-default">Cancelar</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script type="text/javascript">
    /*
        var calculate_url = "{!! route('calculate.genotype.post') !!}";

        jQuery(document).ready(function () {
            $("#calcula").click(function (e) {
                e.preventDefault();
                var data = $('#calculate_genotype').serialize();

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
                });
                $.ajax({
                    url: calculate_url,
                    type: "post",
                    data: data,
                    success: function (response) {
                        if (response.success) {

                        }
                    },
                    error: function (response) {

                    }
                });

            });
        });*/


    </script>
    @endpush
@endsection
