@extends('layout')

@section('section')
  <div class="details">
    <span>FIRST NAME: </span> {{$ometto['first_name']}} <br>
    <span>LAST NAME: </span> {{$ometto['last_name']}} <br>
    <span>ADRESS: </span> {{$ometto['adress']}} <br>
    <span>CODE: </span> {{$ometto['code']}} <br>
    <span>STATE: </span> {{$ometto['state']}} <br>
    <span>PHONE NUMBER: </span> {{$ometto['phone_number']}} <br>
      <span>ROLE: </span> {{$ometto['role']}} <br>
    <a href="{{route('form_update', $ometto['id'])}}">Modifica</a>
  </div>

@endsection
