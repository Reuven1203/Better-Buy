<?php

namespace App\Http\Controllers\Sellers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('seller.products.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::insert('insert into products (price,name,image,brand,stock) values (?,?,?,?,?)', [8, 'mac', 'p', 'apple', 6]);
        return view('seller.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required',
        ]);
        if (request('image') != null) {
            $imagePath = request('image')->store('uploads', 'public');
        } else {
            $imagePath = '/uploads/BetterBuy_logo2.png';
        }

        auth()->user()->products()->create([
            'name' => $data['name'],
            'brand' => $data['brand'],
            'price' => $data['price'],
            'image' => $imagePath,
            'stock' => $data['stock'],
            'category' => $data['category'],

        ]);

        $user = auth()->user();
        return view('seller.products.index', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('seller.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->category = $request->input('category');
        // $product->image = $request->input('image');
        $product->update();

        return redirect()->route('seller.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('seller.products.index');
    }
}
