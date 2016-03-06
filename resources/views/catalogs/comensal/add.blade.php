@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <blockquote>
                    <p>
                        Calcula tu genotipo y empieza a comer sano
                        </p>
                </blockquote>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default"> 

                    <form class="form-horizontal" id="calculate_genotype" style="padding: 40px;" action="<?php echo url('/') ?>/comensal/addws" method="post">

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="name" name="name"
                                       placeholder="Tu nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="genero" class="col-sm-2 control-label">Género</label>
                            <div class="col-sm-10">
                                <select id="genero" name="genero">
                                    <option value="0">Masculino</option>
                                    <option value="1">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="edad" class="col-sm-2 control-label">Edad</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="edad" name="edad"
                                       placeholder="Edad en años">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="estatura" class="col-sm-2 control-label">Estatura</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="estatura" name="estatura"
                                       placeholder="Estatura estando de pie en cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="altura_1" class="col-sm-2 control-label">Altura silla</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="altura_1" name="altura_1"
                                       placeholder="Altura de la silla dodne te encuentres sentado en cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="altura_2" class="col-sm-2 control-label">Altura sentado</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="altura_2"
                                       placeholder="Tu altura estando sentado en cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="psp" class="col-sm-2 control-label">Porción superior de la pierna</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="psp" name="psp" placeholder="En cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pip" class="col-sm-2 control-label">Porción inferior de la pierna</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="pip" name="pip" placeholder="En cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dimd" class="col-sm-2 control-label">Dedo índice mano derecha</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="dimd" name="dimd" placeholder="En cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="damd" class="col-sm-2 control-label">Dedo anular mano derecha</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="damd" name="damd" placeholder="En cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dimi" class="col-sm-2 control-label">Dedo índice mano izquierda</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="dimi" name="dimi" placeholder="En cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dami" class="col-sm-2 control-label">Dedo anular mano izquierda</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="dami" name="dami" placeholder="En cm.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="grupo_san" class="col-sm-2 control-label">Grupo sanguíneo</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" id="grupo_san" name="grupo_san"
                                       placeholder="A|AB|B|O.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="factor" class="col-sm-2 control-label">Factor Rh</label>
                            <div class="col-sm-10">
                                <select name="factor" id="factor">
                                    <option value="0">Positivo</option>
                                    <option value="1">Negativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="calcula" class="btn btn-primary">Calcular</button>
                                <a href="<?php echo url('/') ?>/comensal/list" class="btn btn-default">Cancelar</a>
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
