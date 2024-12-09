@extends('layouts.app')

@section('title', 'Consultar Clima')

@section('content')
    <div class="py-6">
        <p class="h1">Histórico de Consultas</p>
    </div>
    <div class="py-6">
        <table class="display" id="table-historico">
            <thead>
                <th>Cidade</th>
                <th>Data/Hora</th>
                <th>Temperatura</th>
                <th>Sensação</th>
            </thead>
            <tbody>
            @forelse ($climates as $clima)
                <tr>
                    <td>{{ $clima->cidade }}</td>
                    <td>{{ \Carbon\Carbon::parse($clima->data_hora_pesquisa)->format('d/m/Y H:i') }}</td>
                    <td>{{ $clima->temperatura }}</td>
                    <td>{{ $clima->sensacao }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nenhum histórico encontrado para a cidade</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/index-historico.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('css/index.css') }}">
@endsection