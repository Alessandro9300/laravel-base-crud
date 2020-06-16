@extends('layout')

@section('main')
  <div class="main">
    {{$elCane['nome']}} <br>
    {{$elCane['tipo']}} <br>
    {{$elCane['altezza']}} <br>
    {{$elCane['peso']}} <br>
  </div>
@endsection
