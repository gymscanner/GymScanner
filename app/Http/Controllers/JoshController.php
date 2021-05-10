<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class JoshController extends Controller
{
    /**
     * check if view exists, then show it or throw error
     *
     * @param [type] $name
     * @return void
     */
    public function showView($name=null)
    {
        if(View::exists($name))
        {
                return view($name);
        }
        abort('404');
    }
}
