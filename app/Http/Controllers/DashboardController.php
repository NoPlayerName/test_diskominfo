<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'tittle' => 'Dashboard'
        ]);
    }

    public function data_sample() {
        return view('dashboard.add_sample', [
            'tittle' => 'Data Sample',
            'data' => Sample::get()->all()
            
        ]);
    }

    public function new_sample(){
        return view('dashboard.new_sample', [
            'tittle' => 'Add sample'
        ]);
    }
}
