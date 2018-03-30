@extends('sisbeca.layouts.main')
@section('title','Nómina')
@section('subtitle','Consultar Nómina')
@section('content')
    <div class="row">

        <div class="col-lg-12" style="padding-top: 15px; padding-bottom: 15px;">
            Consultar Nómina: {{ $mes.'/'.$anho }}
            <a href="{{ route('nomina.listar') }}" class="btn btn-sm btn-danger pull-right ">Atrás</a>
            <hr/>


        </div>

        <div class="col-lg-12">
        <table id="myTable" data-order='[[ 0, "asc" ]]' data-page-length='10' class="display" style="width:100%">
            <thead>
            <tr>
                <th class="text-center">Nombre</th>
                <th class="text-right">Retroactivo</th>
                <th class="text-right">Sueldo Base</th>
                <th class="text-right">Monto Libros</th>
                <th class="text-right">Total</th>
                <th class="text-center">Estatus</th>
                <th class="text-center">Fecha Pago</th>
                <th class="text-center">Fecha Generada</th>
            </tr>
            </thead>
            <tbody>
            @if(count($nominas)>0)
                @foreach($nominas as $nomina)
                    <tr>

                        <td class="text-center"> {{ $nomina->becarios[0]->user->name }} </td>
                        <td class="text-right">{{ $nomina->becarios[0]->retroactivo }}
                        </td>
                        <td class="text-right">{{ $nomina->sueldo_base }}</td>
                        <td class="text-right">{{ $nomina->monto_libros }}</td>
                        <td class="text-right">{{ $nomina->total }}</td>
                        <td class="text-center">{{ $nomina->status }}</td>
                        <td class="text-center">{{ $nomina->fecha_pago }}</td>
                        <td class="text-center">{{ $nomina->fecha_generada }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
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
            $('#myTable').DataTable();



        } );

        $('#example')
            .removeClass( 'display' )
            .addClass('');
    </script>
@endsection
