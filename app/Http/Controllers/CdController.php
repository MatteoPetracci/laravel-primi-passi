<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdController extends Controller
{
    public function cdIndex()
    {
        $cds = [
            'path',
            'title',
            'author',
            'year'
        ];

        return view('cd.index', compact('cds'));
    }
}
