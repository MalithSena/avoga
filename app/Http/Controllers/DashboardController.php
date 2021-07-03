<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){ 
        $user = Auth::user()->get('name');
        // $user = $users->name;
        return view('dashboard')->with(['user' => $user]);
       
    }
}
