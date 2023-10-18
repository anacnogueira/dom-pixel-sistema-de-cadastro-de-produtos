@extends('adminlte::page')

@section('title', 'Catálogo Produtos')

@section('content_header')
    <h1>Catálogo Produtos</h1>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">   
@stop

@section('js')
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@stop

@section('content')
<div class="row">
    <a href="products/create" class="btn btn-primary">Cadastrar</a>
</div>
<br>
<x-adminlte-datatable id="products" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>
@stop
