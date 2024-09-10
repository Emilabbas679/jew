<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use App\Http\Requests\DesignerRequest;
use Illuminate\Support\Facades\Storage;

class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designers = Designer::all();
        return view('admin.designers.index', compact('designers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.designers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DesignerRequest $request)
    {

        Designer::create([
            'title' => $request->input('title'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('designers.index')->with('success', 'Designer yaradıldı');
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
    public function edit(Designer $designer)
    {
        return view('admin.designers.edit', compact( 'designer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DesignerRequest $request, Designer $designer)
    {
        $designer->status = $request->input('status');
        $designer->title = $request->input('title');
        $designer->save();
        return redirect()->route('designers.index')->with('success', 'Designers yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designer $designer)
    {
        $designer->delete();
        return redirect()->route('designers.index')->with('success', 'Designer Silindi');
    }
}
