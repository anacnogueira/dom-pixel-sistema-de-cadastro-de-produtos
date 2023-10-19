@extends('adminlte::page')

@section('title', 'Visualizar Produto')

@section('content_header')
    <h1>Visualizar Produto</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-body">
                <dl>
                    <dt>ID:</dt>
                    <dd>
                        {{ $product['id'] }}
                        &nbsp;
                    </dd>
                    <dt>Nome:</dt>
                    <dd>
                        {{ $product['name'] }}
                        &nbsp;
                    </dd>
                    <dt>Descrição:</dt>
                    <dd>
                        {{ $product['description'] }}
                        &nbsp;
                    </dd>
                    <dt>Valor:</dt>
                    <dd>
                        R$ {{ $product['amount'] }}
                        &nbsp;
                    </dd>
                    <dt>Qtde estoque:</dt>
                    <dd>
                        {{ $product['stock'] }}
                        &nbsp;
                    </dd>    
                </dl>
            </div>
            <div class="btn-group">
                @include('shared.back-button')
            </div>
        </div>
    </div>
</div>   
@stop


