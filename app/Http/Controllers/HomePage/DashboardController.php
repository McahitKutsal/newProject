<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(){
    return view('home.dashboard');
  }
}
