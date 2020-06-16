<?php

namespace App\Http\Controllers;

use App\Cagnolini;
use Illuminate\Http\Request;

class caneController extends Controller
{
  public function index(){

    $cagnoliniDb = Cagnolini::all();

    return view('home', compact('cagnoliniDb'));
  }

  public function show($id){
    $elCane = Cagnolini::findOrFail($id);

    return view('cani', compact('elCane'));
  }
}
