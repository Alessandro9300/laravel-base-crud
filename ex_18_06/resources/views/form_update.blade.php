@extends('layout')

@section('section')

  <div class="form">
    <form class="" action="{{route('update_store', $ometto['id'])}}" method="post">
      @csrf
      @method('post')

      first_name: <input type="text" name="first_name" value="{{$ometto['first_name']}}"> <br>
      last_name: <input type="text" name="last_name" value="{{$ometto['last_name']}}"> <br>
      adress: <input type="text" name="adress" value="{{$ometto['adress']}}"> <br>
      code: <input type="text" name="code" value="{{$ometto['code']}}"> <br>
      state: <input type="text" name="state" value="{{$ometto['state']}}"> <br>
      phone_number: <input type="text" name="phone_number" value="{{$ometto['phone_number']}}"> <br>
      role: <input type="text" name="role" value="{{$ometto['role']}}"> <br>
      <input type="submit" name="" value="SUBMIT">
    </form>
  </div>

@endsection
