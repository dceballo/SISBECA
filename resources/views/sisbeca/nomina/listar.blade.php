@extends('sisbeca.layouts.main')
@section('title','Nómina')
@section('subtitle','Listar Nómina')
@section('content')

<div class="row">
	
	<div class="col-lg-12" style="padding-top: 15px; padding-bottom: 15px;">
		Listar Nómina
		@if($generar)
			<a href="{{ route('nomina.generar.todo',array('mes'=>$mes,'anho'=>$anho) ) }}" class="btn btn-sm btn-danger pull-right ">Generar Nómina</a>
		@else
			<a href="{{ route('nomina.generar.todo',array('mes'=>$mes,'anho'=>$anho) ) }}" class="btn btn-sm btn-danger pull-right disabled" >Generar Nómina</a>
		@endif
		<hr/>

	</div>
	<div class="col-lg-12">
		<table class="display" style="width:100%" id="myTable">
			<thead>
				<tr>
					
					<th class="text-center">Mes/Año</th>
					<th class="text-center">Total Becarios</th>
					<th class="text-right">Sueldo Base</th>
					<th class="text-right">Total Pagado</th>
					<th class="text-center">Estatus</th>
					<th class="text-center">Fecha Pago</th>
					<th class="text-center">Fecha Generada</th>
					<th class="text-center">Acciones</th>
				</tr>
			</thead>
			<tbody>

				@if(count($nominas)>0)
				@foreach($nominas as $nomina)
				<tr>
					<td class="text-center">{{ $nomina->mes.'/'.$nomina->year }}</td>
					<td class="text-center">{{ $nomina->total_becarios }}</td>
					<td class="text-right">{{ $nomina->sueldo_base }}</td>
					<td class="text-right">{{ $nomina->total_pagado }}</td>
					<td class="text-center">{{ $nomina->status }}</td>
					<td class="text-center">{{ $nomina->fecha_pago }}</td>
					<td class="text-center">{{ $nomina->fecha_generada }}</td>
					<td class="text-center">
						<a href="{{ route('nomina.consultar',array('mes'=>$nomina->mes,'anho'=>$nomina->year)) }}" class="btn btn-xs btn-info">Consultar</a>
						<a href="{{ route('nomina.pdf',array('mes'=>$nomina->mes,'anho'=>$nomina->year)) }}" class="btn btn-xs btn-info">Generar PDF</a>
					</td>
				</tr>
				@endforeach
				@else
				<tr class="tr">
					<td class="text-center" colspan="9">No se encontraron registros en <strong>nómina</strong></td>
				</tr>
				@endif
			</tbody>
		</table>
		
	</div>
</div>
@endsection

@section('personaljs')
	<script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#myTable').DataTable( {
                columnDefs: [
                    { targets: [7], searchable: false}
                ]
            } );
        } );

        $('#example')
            .removeClass( 'display' )
            .addClass('');
	</script>
@endsection
