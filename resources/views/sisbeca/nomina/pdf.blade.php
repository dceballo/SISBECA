<!DOCTYPE html>
<html>
<head>
    <title>PDF ...</title>
    <style type="text/css">
         *
    {
      margin: 0;
      padding: 0;
      font-family: sans-serif, Arial, sans-serif;
      font-size: 10px;
      vertical-align: top;
    }
    html, body
    {
      margin: 0;
      padding: 0;
    }
    body
    {
      padding: 10px 0 !important;
    }
    .wrapper
    {
      width: 100%;
      max-width: 780px;
      min-width: 780px;
      margin: 0 auto !important;
    }
    .col-xs-6
    {
      display: inline-block;
      width: 50%;
      float: left;
    }
    .text-uppercase
    {
      text-transform: uppercase;
    }
    .text-right
    {
      text-align: right;
    }
    .text-center
    {
      text-align: center;
    }
    .text-left
    {
      text-align: left;
    }
    .title
    {
      background: #ccc;
      padding: 5px;
      margin-bottom: 5px;
    }
    .clearfix
    {
      clear: both !important;
      float: none !important;
    }
    table
    {
      width: 100%;
      border-collapse: 1px;
    }
    .border-bottom
    {
      border-bottom: 1px solid #ccc;
    }
    .border-top
    {
      border-top: 1px solid #ccc;
    }
    

    table.table-ads
    {
      margin-top: 4px;
    }
    .table-ads table,  .table-ads th,  .table-ads td {
      border: 1px solid #ccc;
      border-collapse: collapse;
      padding: 0;
      margin: 0;
    }
    .table-ads td,
    .table-ads th
    {
      padding: 5px;
      vertical-align: middle;
    }
    .table-ads th
    {
      text-align: right
    }

    .table-resume
    {
      width: 100%;
    }
    .table-resume th,  .table-resume td {
      border-collapse: collapse;
      padding: 0;
      margin: 0;
    }
    .table-resume td
    {
      text-align: right;
      text-transform: none;
    }
    .table-resume th
    {
      text-align: right;
      text-transform: none;
    }

    </style>
</head>
<body>
    <div class="col-lg-12">
        <p classs="text-center"><strong>Nómina de: {{ $mes.'/'.$anho }}</strong></p>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th class="text-left">Nombre</th>
                <th class="text-right">Retroactivo</th>
                <th class="text-right">Sueldo Base</th>
                <th class="text-right">Total</th>
                <th class="text-right">Monto Libros</th>
                <th class="text-center">Estatus</th>
                <th class="text-center">Fecha Pago</th>
                <th class="text-center">Fecha Generada</th>
            </tr>                         
        </thead>
        <tbody>
            @foreach($nominas as $nomina)
            <tr>
                <td class="text-left"> {{ $nomina->becarios[0]->user->name }} </td>
                <td class="text-right">{{ $nomina->becarios[0]->retroactivo }} </td>
                <td class="text-right">{{ $nomina->sueldo_base }}</td>
                <td class="text-right">{{ $nomina->total }}</td>
                <td class="text-right">{{ $nomina->monto_libros }}</td>
                <td class="text-center">{{ $nomina->status }}</td>
                <td class="text-center">{{ $nomina->fecha_pago }}</td>
                <td class="text-center">{{ $nomina->fecha_generada }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
   
