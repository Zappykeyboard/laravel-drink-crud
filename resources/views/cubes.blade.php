@extends('layouts.baselayout')

@section('content')
  <div class="drinks container">
    @foreach ($values as $value)
      <div class="cube">
        {{$value->nome_bevanda}} <br>
        {{$value->marca}} <br>
        {{$value->prezzo}}€
      </div>
    @endforeach
  </div>

  <div class="stats container">
    <div class="cube">
      Prezzo massimo: {{$max}}€
    </div>
    <div class="cube">
      Prezzo minimo: {{$min}}€
    </div>
    <div class="cube">
      Prezzo medio: {{$avg}}€
    </div>
  </div>
@endsection
