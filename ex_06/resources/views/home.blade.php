@extends('layout')
@section('main')

  <div class="main">

    @foreach ($cagnoliniDb as $cano)

      <a href="{{route('cagnetto', $cano['id'])}}">
        {{$cano['nome']}}
      </a> <br>

    @endforeach
  </div>
@endsection
