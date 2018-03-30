@extends('sisbeca.layouts.main')
@section('title','Becarios')
@section('subtitle','Listar Becarios')
@section('content')

<div class="row">
	
	<div class="col-lg-12" style="padding-top: 15px; padding-bottom: 15px;">
		Becarios
	</div>
	<div class="col-lg-12 table-responsive">
		<table class="table table-bordered table-hover " id="myTable">
			<thead>
				<tr>
					<th class="text-center">Nombre</th>
					<th class="text-center">Apellido</th>
					<th class="text-center"># en Nómina</th>
					<th class="text-center">Acciones</th>
				</tr>
			</thead>
			<tbody class="searchable">
				<tr class="no-data">
		            <td colspan="8" class="text-center">No se encontraron registros en <strong>becarios</strong></td>
		        </tr>
				@if(count($becarios)>0)
				@foreach($becarios as $becario)
				<tr class="tr">
					<td class="text-center">{{ $becario->user->name }}</td>
					<td class="text-center">{{ $becario->user->lastname }}</td>
					<td class="text-center">{{ $becario->nominas }}</td>
					<td class="text-center">
						Null
					</td>
				</tr>
				@endforeach
				@else
				<tr class="tr">
					<td class="text-center" colspan="9">No hay registros en <strong>becarios</strong></td>
				</tr>
				@endif
			</tbody>
		</table>
		
	</div>
</div>
@endsection

@section('personaljs')
<script>

</script>

@endsection
