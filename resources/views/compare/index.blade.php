@extends('layouts.app')

@section('title', 'Consultar Clima')

@section('content')
    <div class="py-6">
        <p class="h1">Compare o Clima das Cidades</p>
        <p class="h5">Serão considerados os últimos registros salvos de cada cidade</p>
    </div>
    <form action="{{ route('compare.comparison') }}" method="POST">
        @csrf
        <div class="py-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cep1" name="cep1" placeholder="99.999-999" required="required">
                <label for="floatingInput">CEP Cidade 1</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="cidade1" name="cidade1" placeholder="Chapecó" readonly="readonly" required="required">
                <label for="floatingPassword">Cidade 1</label>
            </div>
        </div>
        <div class="py-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cep2" name="cep2" placeholder="99.999-999" required="required">
                <label for="floatingInput">CEP Cidade 2</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="cidade2" name="cidade2" placeholder="Chapecó" readonly="readonly" required="required">
                <label for="floatingPassword">Cidade 2</label>
            </div>
        </div>
        <div class="py-6">
            <button type="submit" class="btn btn-primary btn-lg" id="comparar">Comparar</button>
        </div>
    </form>
    <script src="{{ asset('js/index-compare.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.compare.css') }}">
@endsection