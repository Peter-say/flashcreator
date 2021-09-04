<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

class DashboardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    
    public function index()
    {
         return view('dashboards.admin');
    }

    public function profile()
    {
        return view('dashboards.profile');
    }
  

}
