<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function index()
    {
        $codes = Codes::orderBy('created_at', 'desc')->get();   

        return view('catalog.index', ["codes" => $codes ]);
        // return view('catalog.index', ["greeting" => "hello", "codes" => $codes ]);
    }

    public function show($id)
    {
        // route -> /catalog/{id}
        // fetch a single record & pass into show view
    }

    public function add()
    {
        // route -> /catalog/create
        // render a create view (with web form) to users
    }

    public function store()
    {

    }
}
