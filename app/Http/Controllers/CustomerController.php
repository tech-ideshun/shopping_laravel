<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\UploadImage;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Product::all();
        // dd($articles[0]->images);
        return view('index', ['articles' => $articles]);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Product::find($id);
        $uploads = DB::table("images")->where("product_id",$id)->get();
        return view('shopshow', ['article' => $article, 'uploads' => $uploads]);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function item(Request $request)
    {
        // dd($request->query('fashion'));
        $articles = Product::where('category_id', '=', $request->query('fashion'))->get();
        return view('item', ['articles' => $articles]);
    }

    public function buy($id)
    {
        $article = Product::find($id);
        $uploads = DB::table("images")->where("product_id",$id)->get();
        return view('buy', ['article' => $article, 'uploads' => $uploads]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function access()
    {
        return view('access');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'tel' => 'required|numeric|digits_between:10,11',
            'contact' => 'required|max:1000'
            // 'acceptance-714' => 'required'
        ]);
        $input = $request->all();
        // dd($input);
        return view('confirm', ['input' => $input]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'tel' => 'required|numeric|digits_between:10,11',
            'contact' => 'required|max:1000'
        ]);
        // dd($request->all());

        // ?????????submit???action?????????
        // $action = $request->input('action');
        $action = request('action');
        // $action = $request->action;
        // ?????????action????????????input???????????????
        $input = $request->except('action');
        if($action !== 'submit'){
            return redirect()->route('shop.contact')->withInput($input);
        }
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->tel = $request->tel;
        $contact->contact = $request->contact;
        $contact->save();
        // dd($input);
        return view('completed');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function company()
    {
        return view('company');
    }
}

