<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use App\Models\Organization;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function index()
    {
        $codes = Codes::with('organization')->orderBy('created_at', 'desc')->paginate(10); 

        return view('catalog.index', ["codes" => $codes ]);
        // return view('catalog.index', ["greeting" => "hello", "codes" => $codes ]);
    }

    public function show(Codes $code)
{
    $code->load('organization');
    // Tidak perlu 'findOrfail' lagi, Laravel sudah melakukannya!
    return view('catalog.show', ["codes" => $code]);
}

    public function add()
    {
        $organizations = Organization::all();
        // route -> /catalog/create
        return view(  'catalog.add', ["organizations" => $organizations]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'length' => 'required|integer|min:0',
            'description' => 'required|string|min:10|max:500',
            'organization_id' => 'required|exists:organizations,id',
            
        ]);
        
        Codes::create($validated);

        return redirect()->route('catalog.index')->with('success', 'Codes added.');
    }

    public function destroy(Codes $code) {
      // --> /ninjas/{id} (DELETE)
      $code->delete();

      return redirect()->route('catalog.index')->with('deleted', 'Codes deleted.');
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}
