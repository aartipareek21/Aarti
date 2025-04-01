<?php

namespace App\Http\Controllers;


use App\Models\categorie;
use App\Models\product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data=product::where('cate_id',$id)->where('status','Instock')->get();
        return view('website.product_detail',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=categorie::all();
        return view('admin.add_products',['data'=>$data]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new product;
        $data->cate_id=$request->cate_id;
        $data->prod_name=$request->prod_name;
        $data->prod_price=$request->prod_price	;
        $data->qty=$request->qty;
        $data->description=$request->description;
    
        // img upload
        $file=$request->file('prod_img');		
        $filename=time().'_img.'.$request->file('prod_img')->getClientOriginalExtension();
        $file->move('admin/upload/product/',$filename);  // use move for move image in public/images
        $data->prod_img=$filename;

        $data->save();
        return redirect('/add_products');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $data=product::join('categories','products.cate_id','=','categories.id')->get(['products.*','categories.cate_name']);
        return view('admin.manage_products',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(product $product,$id)
    // {
    //     $data = product::find($id);
    // if (!$data) {
    //     return redirect('/manage_products')->with('error', 'product not found.');
    // }
    // return view('admin.edit_products', compact('data'));
    // }


    public function edit($id)
    {
        $product = product::where('id', $id)->first(); // This returns a single object
        $categories = categorie::all();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }
    
        return view('admin.edit_products', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, product $product,$id)
    // {
    //     $data = product::find($id);

    //     if (!$data) {
    //         return redirect()->back()->with('error', 'Product not found.');
    //     }
    
    //     $data->cate_id = $request->cate_id;
    //     $data->prod_name=$request->prod_name;
    //     $data->prod_price=$request->prod_price	;
    //     $data->qty=$request->qty;
    //     $data->description=$request->description;
    
    //     if ($request->hasFile('img')) {
    //         // Check if the file exists before deleting
    //         $imagePath = 'admin/upload/categories/' . $data->img;
    //         if (!empty($data->img) && file_exists($imagePath)) {
    //             unlink($imagePath);
    //         }
    
    //         $file = $request->file('img');
    //         $filename = time() . '_img.' . $file->getClientOriginalExtension();
    //         $file->move('admin/upload/categories/', $filename);
    //         $data->img = $filename;
    //     }
    
    //     $data->save(); // Use save() instead of update() to persist changes
    
    //     Alert::success('Update Success', "Category updated successfully");
    //     return redirect('/manage_products');
    // }

    public function update(Request $request, $id)
{
    $data = product::find($id);

    if (!$data) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $data->cate_id = $request->cate_id;
    $data->prod_name = $request->prod_name;
    $data->prod_price = $request->prod_price;
    $data->qty = $request->qty;
    $data->description = $request->description;

    // Image Upload Fix
    if ($request->hasFile('prod_img')) {
        $imagePath = 'admin/upload/product/' . $data->prod_img; // Correct image path
        if (!empty($data->prod_img) && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $file = $request->file('prod_img');
        $filename = time() . '_img.' . $file->getClientOriginalExtension();
        $file->move('admin/upload/product/', $filename);
        $data->prod_img = $filename; // Correct column name
    }

    $data->save();

    Alert::success('Update Success', "Product updated successfully");
    return redirect('/manage_products');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
        $data=product::find($id)->delete();
        Alert::success('Delete Success', "product Delete Successful");
        return redirect('/manage_products'); 
    }
}
