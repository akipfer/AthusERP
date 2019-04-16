@extends('ERP.base.header')

@section('title', 'Contatos')

@section('content')

<div class="container">
@foreach ($registros as $registro)
  <p>{{ $registro->id }}</p>
@endforeach
</div>
@stop
