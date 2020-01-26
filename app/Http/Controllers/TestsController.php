<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        $tests =Test::all();
        return view('tests.index')->with('tests',$tests);
    }
}
