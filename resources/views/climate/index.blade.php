@extends('layouts.app')

@section('title', 'Consultar Clima')

@section('content')
    <div class="py-6">
        <p class="h1">Consulte a Cidade Desejada</p>
    </div>
    <div class="py-6">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cep" placeholder="99.999-999">
            <label for="floatingInput">CEP</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="cidade" placeholder="Chapecó" disabled="disabled">
            <label for="floatingPassword">Cidade</label>
        </div>
        <button type="button" class="btn btn-primary btn-lg" id="consultar" onclick="getCurrentWeather()">Consultar</button>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('css/index.css') }}">
@endsection