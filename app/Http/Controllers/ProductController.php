<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Events\NewProduct;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|max:255',
            'price'      => 'required|numeric',
            'content'    => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('createProduct')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Lưu thông tin vào database
            $active = $request->has('active')? 1 : 0;
            $product_id = new Product();
            $product_id->name = $request->input('name');
            $product_id->price = $request->input('price');
            $product_id->content = $request->input('content');
            $product_id->active = $active;
            $product_id->save();
        $product = Product::find($product_id->id);
        event(new NewProduct($product));
        return redirect('createProduct')
            ->with('message', 'Sản phẩm được tạo thành công với ID: ' . $product_id);
        }
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
