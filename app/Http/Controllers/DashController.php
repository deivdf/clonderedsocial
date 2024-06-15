<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(User $user)
    {
        // Get the currently authenticated user
        //$user = auth()->user();

        // Pass the user data to the view
        return view('dashboard', ['user' => $user]);
    }
}
