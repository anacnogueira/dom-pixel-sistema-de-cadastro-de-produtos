@extends('adminlte::page')

@section('title', 'Criar Produto')

@section('content_header')
    <h1>Novo Produto</h1>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-price-format/2.2.0/jquery.priceformat.min.js"></script>
    <script src={{ asset("js/create-product.js") }}></script>
@stop

@section('content')
    <p>Os campos marcados com * são obrigatórios</p>
    <form method="POST" action="/products">
        @csrf
        <div class="row">
            <x-adminlte-input 
                name="name"
                label="Nome:*"
                placeholder="Insira o nome do produto"
                fgroup-class="col-md-12"/>
        </div>
        <div class="row">
            <x-adminlte-textarea
                name="description"
                label="Descrição:"
                placeholder="Insira a descrição do produto"
                fgroup-class="col-md-12"/>
        </div>
        <div class="row">
            <x-adminlte-input 
                name="amount"
                label="Preço:*"
                placeholder="Insira o preço do produto"
                class="currency"
                fgroup-class="col-md-6"/>

            <x-adminlte-input 
                name="stock"
                label="Qtde estoque:*"
                placeholder="Insira quatidade em estoque"
                type="number"
                min=0
                fgroup-class="col-md-6"/>    
        </div>
        <div class="row">
        <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
        </div>
    </form>
    
@stop
