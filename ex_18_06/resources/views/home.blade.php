@extends('layout')

@section('section')

  <a href="{{route('create_form')}}">CREATE NEW</a>

  <ul>

    @foreach ($omini as $ometto)

      <li>
        <a href="{{route('show', $ometto['id'])}}">
          {{$ometto['first_name']}} {{$ometto['last_name']}}
        </a>
      </li>
    @endforeach
  </ul>

@endsection
