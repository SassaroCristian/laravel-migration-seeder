@extends('layouts.app')

@section('content')
<h1>Elenco dei treni</h1>
<br>

@if($treni->count() > 0)
@foreach($treni as $treno)
<div>
    <h2>{{ $treno->azienda }}</h2>
    <p>STAZIONE DI PARTENZA: {{ $treno->stazione_partenza }}</p>
    <p>STAZIONE DI ARRIVO: {{ $treno->stazione_arrivo }}</p>
    <p>ORARIO PARTENZA: {{ $treno->orario_partenza }}</p>
    <p>ORARIO ARRIVO: {{ $treno->orario_arrivo }}</p>
    <p>CODICE DEL TRENO: {{ $treno->codice_treno }}</p>
</div>
<hr>
@endforeach
@else
<p>No trains available.</p>
@endif
@endsection