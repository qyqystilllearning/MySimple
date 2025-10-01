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
        $codes = Codes::findOrfail($id);

        return view('catalog.show', ["codes" => $codes]);
    }

    public function add()
    {
        // route -> /catalog/create
        return view('catalog.add');
    }

    public function store()
    {

    }

    public function destroy($id) {
      // --> /ninjas/{id} (DELETE)
      // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}
