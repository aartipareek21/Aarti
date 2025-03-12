<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = categorie::all();
        return view('website.categories', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new categorie;
        $data->cate_name=$request->cate_name;
        $data->description = $request->description;

        // img upload
        $file=$request->file('img');		
        $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
        $file->move('admin/upload/categories/',$filename);  // use move for move image in public/images
        $data->img=$filename;

        $data->save();
        return redirect('/add_categories');

       
    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        $data=categorie::all();
        return view('admin.manage_categories',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categorie $categorie,$id)
    {
        $data = Categorie::find($id);
    if (!$data) {
        return redirect('/manage_categories')->with('error', 'Category not found.');
    }
    return view('admin.edit_categories', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorie $categorie,$id)
    {
        $data = categorie::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Category not found.');
        }
    
        $data->cate_name = $request->cate_name;
        $data->description = $request->description;
    
        if ($request->hasFile('img')) {
            // Check if the file exists before deleting
            $imagePath = 'admin/upload/categories/' . $data->img;
            if (!empty($data->img) && file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            $file = $request->file('img');
            $filename = time() . '_img.' . $file->getClientOriginalExtension();
            $file->move('admin/upload/categories/', $filename);
            $data->img = $filename;
        }
    
        $data->save(); // Use save() instead of update() to persist changes
    
        Alert::success('Update Success', "Category updated successfully");
        return redirect('/manage_categories');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categorie $categorie,$id)
    {
        $data=categorie::find($id)->delete();
        Alert::success('Delete Success', "categories Delete Successful");
        return redirect('/manage_categories');        
    }
}
