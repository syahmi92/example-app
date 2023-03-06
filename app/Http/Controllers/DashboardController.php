<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $name = str() -> upper('Syahmi');
        $occupation = 'Intern';
        $status = 'Single';

        return view('name',[
            'name' => $name,
            'occupation' => $occupation,
            'status' => $status
        ]);
    }
}
