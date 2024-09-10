<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occasion;
use App\Http\Requests\OccasionRequest;
use Illuminate\Support\Facades\Storage;

class OccasionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $occasions = Occasion::all();
        return view('admin.occasion.index', compact('occasions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.occasion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OccasionRequest $request)
    {

        Occasion::create([
            'title' => $request->input('title'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('occasions.index')->with('success', 'Occasion yaradıldı');
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
    public function edit(Occasion $occasion)
    {
        return view('admin.occasion.edit', compact( 'occasion'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OccasionRequest $request, Occasion $occasion)
    {
        $occasion->status = $request->input('status');
        $occasion->title = $request->input('title');
        $occasion->save();
        return redirect()->route('occasions.index')->with('success', 'Occasion yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Occasion $occasion)
    {
        $occasion->delete();
        return redirect()->route('occasions.index')->with('success', 'Occasion Silindi');
    }
}
