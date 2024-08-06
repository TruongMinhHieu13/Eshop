<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        return view('admin.product.add');
    }
    
    public function store(Request $request)
    {   
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
        //    ]);
    
        //    $name = $request->file('image')->getClientOriginalName();
    
        //    $path = $request->file('image')->store('public/images');
    
    
        //    $save = new Photo;
    
        //    $save->name = $name;
        //    $save->path = $path;
    
        //    $save->save();

        // $product = $request->all();
        // $image = $request->file();
        // var_dump($image);
        // $data['name'] = $product['name'];
        // $data['description'] = $product['description'];
        // $fileName = time() . '.' . $image;
        // $request->image->storeAs('public/images', $fileName);
        // $newProduct = Product::create($data);
        // if (!empty($newProduct)) {
        //     Alert::success('Thêm sản phẩm thành công', ''); // hoặc có thể dùng alert('Post Created','Successfully', 'success');
        // } else {
        //     Alert::error('Thêm sản phẩm thất bại', 'Error Message'); // hoặc có thể dùng alert('Post Created','Something went wrong!', 'error');
        // }
        // return redirect('/dashboard/san-pham');
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
