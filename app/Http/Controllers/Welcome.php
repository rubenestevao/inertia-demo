<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class Welcome extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Welcome');
    }
}
