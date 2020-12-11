<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view("products.index", ["products"=>Product::get()]);
    }

    public function create()
    {
    	return view("products.create");
    }

    public function store(Request $req)
    {
    	Product::create([
    		"title"=>$req->input("title"),
    		"user_id"=>Auth::user()->id,
    		"description"=>$req->input("description")

    	]);
    	return redirect()->route("productsindex");
    }
    public function show(Request $req)
    {
    	$productshow=Product::where("id", $req["id"])->firstOrFail();
    	return view("products.edit", ["data"=>$productshow]);

    }

    public function destroy(Request $req)
    {
    	Product::where("id", $req->input("id"))->delete();
        return redirect()->back();
    }

    public function update(Request $req)
    {
    	Product::where("id", $req->input("id"))->update([
    		"title"=>$req->input("title"),
    		"description"=>$req->input("description")

    	]);
    	return redirect()->route("productsindex");

    }


}
