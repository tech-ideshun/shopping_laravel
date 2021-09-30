<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('manage', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('new', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request,Product $product, UploadImage $UploadImage)
    {
        $product = new Product;
        
        $request->validate([
            'image' => 'required|file|image|mimes:png,jpeg'
        ]);
        $upload_image = $request->file('image');

        if ($upload_image) {
            $path = $upload_image->store('uploads',"public");
        }

        if ($path) {
        $product->name = request('name');
        $product->price = request('price');
        $product->introduction = request('introduction');
        $product->category_id = request('category_id');
        $product->save();

        $UploadImage->file_name = $upload_image->getClientOriginalName();
        $UploadImage->file_path = $path;
        $UploadImage->product_id = $product->id;
        $UploadImage->save();
        return redirect()->route('product.detail', ['id' => $product->id])->with('flash_message', '投稿が完了しました。');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        // $uploads = UploadImage::find($id);
        $uploads = DB::table("images")->where("product_id",$id)->get();
        // dd($uploads);
        return view('show', ['product' => $product, 'uploads' => $uploads]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $product = Product::find($id);
        $categories = Category::all()->pluck('name', 'id');
        // dd($categories);
        $uploads = DB::table("images")->where("product_id",$id)->get();
        return view('edit',['product' => $product, 'categories' => $categories, 'uploads' => $uploads]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Product $product, UploadImage $UploadImage)
    {
        $request->validate([
            'image' => 'required|file|image|mimes:png,jpeg'
        ]);
        $upload_image = $request->file('image');

        if ($upload_image) {
            $path = $upload_image->store('uploads',"public");
        }

        $product = Product::find($id);
        $product->name = request('name');
        $product->price = request('price');
        $product->introduction = request('introduction');
        $product->category_id = request('category_id');
        $product->save();

        if ($path) {
        // $uploads = DB::table("images")->where("product_id",$id)->get();
        $uploads = UploadImage::where("product_id",$id)->get();
        foreach ($uploads as $UploadImage) {
            $UploadImage->file_name = $upload_image->getClientOriginalName();
            $UploadImage->file_path = $path;
            $UploadImage->product_id = $product->id;
            $UploadImage->save();
        }
        }
        return redirect()->route('product.detail', ['id' => $product->id]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        $uploads = UploadImage::where("product_id",$id)->get();
        foreach ($uploads as $UploadImage) {
            $UploadImage->delete();
        }
        return redirect('/managetop');
    }


    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    // public function item(Request $request)
    // {
    //     // dd($request->query('fashion'));
    //     $products = Product::where('category_id', '=', $request->query('fashion'))->get();
    //     return view('item', ['products' => $products]);
    // }
}
