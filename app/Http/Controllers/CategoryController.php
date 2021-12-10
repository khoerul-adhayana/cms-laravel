<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function  __construct(){

        $this->middleware('auth');
    }
   
    public function index()
    {
        $categories = Category::all();
        return view('categories.v_category',compact ('categories'));
    }
   
    public function create()
    {
        return view('categories.v_create');
    }

    public function store(Request $request)
    {
       
        $input = $request->all();
        Category::create($input);
        return redirect()->route('categories')->with('pesan','data berhasil disimpan');

    }


   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
       

       $categories->Update([
        
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'slug' => $request->slug,
            'image' =>$filename,
            'price' => $request->price
            
    ]);

       return redirect()->route('products.v_product');

    }


    public function destroy($id)
    {
        //
    }
}
