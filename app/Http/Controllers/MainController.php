<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view("home");
    }
    public function welcome()
    {
        return view("welcome");
    }
}