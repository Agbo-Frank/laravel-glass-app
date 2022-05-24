<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Instantiate a controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $products_images = array();

        foreach($products as $product){
            $images = $product->images;

            $images_paths = array();
            foreach($images as $image){
                $path = $image["path"];
                array_push($images_paths, $path);
            }

            $product['images'] = $images_paths;

            array_push($products_images, $product);
        };

        return view('products', ["products" => $products_images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'images' => 'required'
        ]);

        $product = new Product;
 
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
 
        $product->save();
        $images = $request->file('images');
        foreach($images as $image){
            $path = cloudinary()->upload($image->getRealPath())->getSecurePath();

            $new_image = new Image;

            $new_image->product_id = $product->id;
            $new_image->path = $path;

            $new_image->save();
        }
        return redirect('/product/create')->with('status', 'Product uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
