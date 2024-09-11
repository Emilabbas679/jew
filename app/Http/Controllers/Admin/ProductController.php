<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Material;
use App\Models\Color;
use App\Models\Occasion;
use App\Models\Designer;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $materials = Material::where('status', 1)->get();
        $occasions = Occasion::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();
        $designers = Designer::where('status', 1)->get();
        return view('admin.products.create', compact('categories', 'colors', 'designers', 'materials','occasions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request->all());
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


    public function upload(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov|max:20480',
        ]);

        if ($request->file('file')) {
            $filename = $request->file('file')->store('products', 'public');
            return response()->json([
                'success' => true,
                'file' => $filename,
                'original_name' => $_FILES['file']['name']
            ]);
        }

        return response()->json([
            'success' => false,
        ]);
    }

}
