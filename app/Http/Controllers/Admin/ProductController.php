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
    public function store(ProductRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('cover')) {
            $imagePath = $request->file('cover')->store('products', 'public');
        }
        $files = null;
        if ($request->input('files')) {
            $files = [];
            foreach ($request->input('files') as $file)
                $files[$file] = $file;
            $files = json_encode($files);
        }

        $product = Product::create([
            'title' => $request->input('title'),
            'about' => $request->input('title'),
            'video' => $request->input('video'),
            'cover' => $imagePath,
            'status' => $request->input('status'),
            'category_id' => $request->input('category_id'),
            'designer_id' => $request->input('designer_id'),
            'material_id' => $request->input('material_id'),
            'color_id' => $request->input('color_id'),
            'occasion_id' => $request->input('occasion_id'),
            'size' => $request->input('size'),
            'market_price' => $request->input('market_price'),
            'price' => $request->input('price'),
            'sale_price' => $request->input('sale_price'),
            'files' => $files
        ]);
        return redirect()->route('products.index')->with('success', 'Product yaradıldı');
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
    public function edit(Product $product)
    {
        $categories = Category::where('status', 1)->get();
        $materials = Material::where('status', 1)->get();
        $occasions = Occasion::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();
        $designers = Designer::where('status', 1)->get();
        $pr_files = [];
        if ($product->files != null)
            $pr_files = json_decode($product->files, true);
        $files = [];
        foreach ($pr_files as $file){
            $files[] = [
                'name' => basename($file),
                'url' => asset('/storage/'.$file),
                'size' => 100,
                'file_url' => $file,
                'filename' => basename($file)
            ];
        }

        return view('admin.products.edit', compact('categories', 'colors', 'designers', 'materials','occasions', 'product', 'files'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {

        if ($request->hasFile('cover')) {
            if ($product->cover) {
                Storage::disk('public')->delete($product->cover);
            }
            $product->cover = $request->file('cover')->store('products', 'public');
        }
        $files = null;
        if ($request->input('files')) {
            $files = [];
            foreach ($request->input('files') as $file)
                $files[$file] = $file;
            $files = json_encode($files);
        }


        $product->title = $request->input('title');
        $product->video = $request->input('video');
        $product->about = $request->input('about');
        $product->status = $request->input('status');
        $product->category_id = $request->input('category_id');
        $product->designer_id = $request->input('designer_id');
        $product->material_id = $request->input('material_id');
        $product->color_id = $request->input('color_id');
        $product->occasion_id = $request->input('occasion_id');
        $product->size = $request->input('size');
        $product->market_price = $request->input('market_price');
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->files = $files;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product yeniləndi');
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
