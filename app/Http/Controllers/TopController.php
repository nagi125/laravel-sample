<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
  public function index()
  {
    $data = [];
    $data = [
      'tanishi' => 'ダークソウル',
    ];

    return view('welcome', $data);
  }
}
