<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }


    public function index()
    {
        $products = Product::with('category')->paginate(5);
        return view('products.v_product',compact ('products'));
    }

    public function export_excel(Request $request)
    {
        return Excel::download(new ProductExport,'product.xlsx'); 
    }

    public function import_excel(Request $request)
    {
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move('file_product',$nama_file);

        Excel::import(new ProductImport,public_path('/file_product/'.$nama_file));

        return redirect()->route('products')->with('pesan','data berhasil diimport');

    }

    public function show(Product $product)
    {
        return view('products.v_detail',['product' => $product]);
    }


    public function create()
    {
        $categories = Category::all();
        return view('products.v_create',compact('categories'));
    }

    public function store(Request $request)
    {
        Request()->validate([
        'name' => 'required',
        'category_id' =>'required', 
        'description' => 'required',
        'image' => 'required',    
        'price' =>'required'
       ]);  

        $input = $request->all();

        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $input['image'] = $image_name;

        }

        Product::create($input);      
        return redirect()->route('products')->with('pesan','data berhasil disimpan');

    }

    public function edit($product)
    {
        $categories = Category::all();
        $product = Product::find($product);
        return view ('products.v_edit',compact('product','categories'));
    }

    
    public function update(Request $request, $product)
    {
    
      
       $input = $request->all();

       $product = Product::find($product);
       $product->name = $input['name'];
       $product->category_id = $input['category_id'];
       $product->description = $input['description'];
       $product->image = $input['image'];
       $product->price = $input['price'];

       $product->save();
         
       return redirect()->route('products')->with('pesan','data berhasil diupdate');

    }

    public function destroy($product)
    {
        
        Product::find($product)->delete();
        return redirect()->back()->with('pesan','data berhasil di hapus');   
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $products = Product::where('name','LIKE','%'.$search_text.'%')
                            ->orWhere('category_id','LIKE','%'.$search_text.'%')
                            ->join('categories', 'categories.id', '=', 'category_id')
                            ->orWhere('slug','LIKE','%'.$search_text.'%')
                            ->with('category')->get();

        return view('products.search',compact('products'));

    }
    
}
