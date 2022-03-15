<?php

namespace App\Http\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{
    public function render()
    {
        return view('layouts.main');
    }
}