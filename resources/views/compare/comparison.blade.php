@extends('layouts.app')

@section('title', 'Consultar Clima')

@section('content')
    <div class="py-6">
        <p class="h1">Veja o Resultado</p>
    </div>
    <div class="py-6">
        <div id="cidades-compare">
            <div class="card border-dark" style="width: 18rem;">
                <div class="card-header border-dark" id="header-info">
                    <div><img src="{{ asset('images/temperatura.png') }}" alt=""></div>&nbsp;
                    <div><strong>{{ $climateC1->cidade }} - {{ $climateC1->temperatura }}°C</strong></div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <strong>Sensação:</strong> {{ $climateC1->sensacao }}°C <br>
                    <strong>Velocidade do Vento:</strong> {{ $climateC1->velocidade_vento }} km/h <br>
                    <strong>Umidade:</strong> {{ $climateC1->umidade }}% <br>
                    <strong>Visibilidade:</strong> {{ $climateC1->visibilidade }} <br>
                    <strong>Cobertura das Nuvens:</strong> {{ $climateC1->cobertura_nuvens }} <br>
                    <strong>Precipitação:</strong> {{ $climateC1->precipitacao }} <br>
                    <strong>Pressão:</strong> {{ $climateC1->pressao }} <br>
                    <strong>Data/Hora:</strong> {{ \Carbon\Carbon::parse($climateC1->data_hora_pesquisa)->format('d/m/Y H:i') }}
                    </p>
                </div>
            </div>
            <div class="card border-dark" id="card-cidade-2" style="width: 18rem;">
                <div class="card-header border-dark" id="header-info">
                    <div><img src="{{ asset('images/temperatura.png') }}" alt=""></div>&nbsp;
                    <div><strong>{{ $climateC2->cidade }} - {{ $climateC2->temperatura }}°C</strong></div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <strong>Sensação:</strong> {{ $climateC2->sensacao }}°C <br>
                    <strong>Velocidade do Vento:</strong> {{ $climateC2->velocidade_vento }} km/h <br>
                    <strong>Umidade:</strong> {{ $climateC2->umidade }}% <br>
                    <strong>Visibilidade:</strong> {{ $climateC2->visibilidade }} <br>
                    <strong>Cobertura das Nuvens:</strong> {{ $climateC2->cobertura_nuvens }} <br>
                    <strong>Precipitação:</strong> {{ $climateC2->precipitacao }} <br>
                    <strong>Pressão:</strong> {{ $climateC2->pressao }} <br>
                    <strong>Data/Hora:</strong> {{ \Carbon\Carbon::parse($climateC2->data_hora_pesquisa)->format('d/m/Y H:i') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='{{ route('compare.index') }}'">Voltar</button>
    </div>
    <script src="{{ asset('js/index-compare.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/index.compare.css') }}">
@endsection