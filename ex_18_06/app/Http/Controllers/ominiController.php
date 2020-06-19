<?php

namespace App\Http\Controllers;

use App\omini;
use Illuminate\Http\Request;

class ominiController extends Controller
{
  public function index(){
    $omini = Omini::all();

    return view('home', compact('omini'));
  }

  public function show($id){
    $ometto = Omini::findOrFail($id);

    return view('omo', compact('ometto'));
  }

  public function form($id){
    $ometto = Omini::findOrFail($id);

    return view('form_update', compact('ometto'));
  }

  public function update_store(Request $request, $id){

    $data = $request -> all();

    $ometto = Omini::findOrFail($id);

    // dd($request);

    $ometto -> first_name = $data['first_name'];
    $ometto -> last_name = $data['last_name'];
    $ometto -> adress = $data['adress'];
    $ometto -> code = $data['code'];
    $ometto -> state = $data['state'];
    $ometto -> phone_number = $data['phone_number'];
    $ometto -> role = $data['role'];

    $ometto -> save();

    return redirect() -> route('home');

  }

  public function create_form(){

    return view('form_create');
  }

  public function create_store(Request $request){

    $data = $request -> all();

    $ometto = new Omini;

    $ometto -> first_name = $data['first_name'];
    $ometto -> last_name = $data['last_name'];
    $ometto -> adress = $data['adress'];
    $ometto -> code = $data['code'];
    $ometto -> state = $data['state'];
    $ometto -> phone_number = $data['phone_number'];
    $ometto -> role = $data['role'];

    $ometto -> save();

    return redirect() -> route('home');

  }
}
