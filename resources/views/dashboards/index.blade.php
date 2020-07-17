@extends('layouts.app') 

@section('content')
<div class="container">
<h1><div style="text-align:centerleft">Dashboard
<a href="{{ route('dashboards.index') }}" a>

<div class="container-fluid d-flex flex-wrap"> 
<div class="card text-white bg-success mb-2" style="max-width: 20rem;">
  <div class="card-header">Concluídos</div>
  <div class="card-body">
  <div class="card-title"></div>
    <p class="card-text">{{$Finalizado}}</p>
    </div>
</div>
<div class="card text-white bg-primary mb-2" style="max-width: 20rem;">
  <div class="card-header">Em andamento</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">{{$Em_Andamento}}</p>
    </div>
</div>
<div class="card text-white bg-danger mb-2" style="max-width: 20rem;">
  <div class="card-header">Atrasados</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">{{$Em_Atraso}}</p>
  </div>


@endsection;





