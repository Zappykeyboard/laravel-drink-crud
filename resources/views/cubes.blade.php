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
      Prezzo massimo: {{$value->prezzo}}€
    </div>
    <div class="cube">
      Prezzo minimo: {{$value->prezzo}}€
    </div>
    <div class="cube">
      Prezzo medio: {{$value->prezzo}}€
    </div>
  </div>
@endsection
