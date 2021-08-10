@extends('layout.master')
@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-8 col-lg-5 mx-auto">
      <div class="card text-center border-dark">
        <div class="card-header teal">
        <h2>Registro de Llamadas</h2>
      </div>
      <div class="card-body white">
        <div class="mb-3">
          <label for="date-txt" class="form-label">Fecha</label>
          <input type="date" class="form-control" id="date-txt">
        </div>
        <div class="mb-3">
          <label for="hora-txt" class="form-label">Hora</label>
          <input type="time" class="form-control" id="hora-txt">
        </div>
        <div class="mb-3">
          <label for="operador-txt" class="form-label">Nombre de Operador/a</label>
          <input type="text" class="form-control" id="operador-txt">
        </div>
      </div>
      <div class="card-footer white d-grid gap-1">           
        <button type="button" class="btn teal" id="registrar-btn">Agregar</button>
      </div>
      </div>
    </div>
  </div>
@endsection