<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

class DashboardController extends Controller
{
    public function index()
    {
         return view('Admin.Dashboard.index');
    }
  

}
