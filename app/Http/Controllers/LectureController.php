<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LectureController extends Controller
{
  public function index()
  {
      return view('home');
  }
}
