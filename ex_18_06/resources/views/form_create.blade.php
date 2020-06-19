@extends('layout')

@section('section')

  <div class="form">
    <form class="" action="{{route('create_store')}}" method="post">
      @csrf
      @method('post')

      first_name: <input type="text" name="first_name" value=""> <br>
      last_name: <input type="text" name="last_name" value=""> <br>
      adress: <input type="text" name="adress" value=""> <br>
      code: <input type="text" name="code" value=""> <br>
      state: <input type="text" name="state" value=""> <br>
      phone_number: <input type="text" name="phone_number" value=""> <br>
      role: <input type="text" name="role" value=""> <br>
      <input type="submit" name="" value="SUBMIT">
    </form>
  </div>

@endsection
