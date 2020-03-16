<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdController extends Controller
{
    public function cdIndex()
    {
        $cds = [
            'path',
            'name'
        ];

        return view('cd.index', compact('cd'));
    }
}
