@extends('sisbeca.layouts.main')
@section('title','Inicio')
@section('subtitle','Mantenimiento de Costos')
@section('content')

<div class="row">

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon"><i class="fa fa-usd"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Costo Membresias<br/>(ind./VIP)</span>
                <span class="info-box-number">{{$costo->costo_membresia}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>

        <!-- /.info-box -->
    </div>

    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon "><i class="fa fa-usd"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Costo Asesoria<br/>(Básica)</span>
                <span class="info-box-number">{{$costo->costo_ases_basica}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon"><i class="fa fa-usd"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Costo Asesoria<br/>(Intermedia)</span>
                <span class="info-box-number">{{$costo->costo_ases_intermedia}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon"><i class="fa fa-usd"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Costo Asesoria<br/>(Completa)</span>
                <span class="info-box-number">{{$costo->costo_ases_completa}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>

        <!-- /.info-box -->
    </div>


    <!-- /.col -->
</div>
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12" ></div>
    <div class="col-md-3 col-sm-6 col-xs-12" align="center">
        <div class="info-box">
            <span class="info-box-icon "><i class="fa fa-usd"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Sueldo Becario<br/>(Total)</span>
                <span class="info-box-number">{{$costo->sueldo_becario}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>

<div class="panel-group Material-default-accordion" id="Material-accordion3" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default-accordion mb-3">
        <div class="panel-accordion" role="tab" id="heading2">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion3" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Actualizar Costos
                </a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div align="justify" class="panel-body">
                <form class="form-horizontal" accept-charset="UTF-8" method="POST" action="{{route('costos.createOrUpdate',$id)}}">

                        {{csrf_field()}}
                    @if($id!=0)
                        {{method_field('PUT')}}
                    @endif

                    <div class="form-group has-default">
                        <div class="row">
                            <label class="col-sm-4 control-label" align="right">Sueldo Becario (Total)</label>
                            <div class="col-sm-3">
                                <input type="number" value="{{$costo->sueldo_becario}}" name="sueldo_becario" required class="form-control">
                                <span class=" fa fa-usd form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-default">
                        <div class="row">
                            <label class="col-sm-4 control-label" align="right">Costo Asesoria (Básica)</label>
                            <div class="col-sm-3">
                                <input type="number" value="{{$costo->costo_ases_basica}}" name="costo_ases_basica" required class="form-control">
                                <span class=" fa fa-usd form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-default">
                        <div class="row">
                            <label class="col-sm-4 control-label" align="right">Costo Asesoria (Intermedia)</label>
                            <div class="col-sm-3">
                                <input type="number" value="{{$costo->costo_ases_intermedia}}" name="costo_ases_intermedia" required class="form-control">
                                <span class=" fa fa-usd form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-default">
                        <div class="row">
                            <label class="col-sm-4 control-label" align="right">Costo Asesoria (Completa)</label>
                            <div class="col-sm-3">
                                <input type="number" value="{{$costo->costo_ases_completa}}" name="costo_ases_completa" required class="form-control">
                                <span class=" fa fa-usd form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-default">
                        <div class="row">
                            <label class="col-sm-4 control-label" align="right">Costo Membresia (Ind./VIP)</label>
                            <div class="col-sm-3">
                                <input type="number" required  value="{{$costo->costo_membresia}}" name="costo_membresia" class="form-control">
                                <span class=" fa fa-usd form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-default">
                        <div class="row">
                            <label class="col-sm-4 control-label" align="right">Validos a partir de</label>
                            <div class="col-sm-3">
                                <input type="date"   value="{{$costo->fecha_valido}}" name="fecha_valido" required class="form-control">
                                <span class=" fa fa-usd form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary col-lg-12">
                        Actualizar Costos
                    </button>

                </form>
            </div>
        </div>
    </div>

</div>
    @endsection