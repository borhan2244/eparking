<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index()
	{
		return view ('admin_login');
	}

	public function show_dashboard()
	{
		return view ('admin.dashboard');
	}

}
