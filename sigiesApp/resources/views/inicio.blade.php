@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
  <h1 class="text-center">Hola mundaoooo</h1>
  <x-alert type="success">
    <x-slot name="title">
      Titulo de la alerta
    </x-slot>
  contenido de la alerta
  </x-alert>     
@endsection
@push('js')
    <script src="validator.js">
      
    </script>
@endpush



