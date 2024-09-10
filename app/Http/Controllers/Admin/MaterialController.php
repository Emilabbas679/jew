<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Http\Requests\MaterialRequest;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::all();
        return view('admin.materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.materials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MaterialRequest $request)
    {

        Material::create([
            'title' => $request->input('title'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('materials.index')->with('success', 'material yaradıldı');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(material $material)
    {
        return view('admin.materials.edit', compact( 'material'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialRequest $request, material $material)
    {
        $material->status = $request->input('status');
        $material->title = $request->input('title');
        $material->save();
        return redirect()->route('materials.index')->with('success', 'material yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(material $material)
    {
        $material->delete();
        return redirect()->route('materials.index')->with('success', 'material Silindi');
    }
}
