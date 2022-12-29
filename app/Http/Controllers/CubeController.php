<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CubeController extends Controller
{
    public function index(): View
    {
        return view('cube.index');
    }
}
