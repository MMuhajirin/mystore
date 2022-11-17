<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = array('tittle' => 'Dashboard');
        return view('dashboard.index', $data);
    }
    // public function admin()
    // {
    //     $data = array('tittle' => 'Dashboard Admin');
    //     return view('dashboard.admin', $data);
    // }

}
