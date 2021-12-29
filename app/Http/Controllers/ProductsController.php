<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all()->sortBy('product');
        return view('products.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction_date = $request->input('transaction_date');
        $product = $request->input('product');
        $mid = $request->input('mid');
        $high_price = $request->input('high_price');
        $midium_price = $request->input('midium_price');
        $low_price = $request->input('low_price');
        $average_price = $request->input('average_price');
        $trading_volume = $request->input('trading_volume');

        Product::create(
            [
                'transaction_date' => $transaction_date,
                'product' => $product,
                'mid' => $mid,
                'high_price' => $high_price,
                'midium_price' => $midium_price,
                'low_price' => $low_price,
                'average_price' => $average_price,
                'trading_volume' => $trading_volume
            ]
        );
        return redirect('products'); // 觸發 /players 路由(用 get 方法)

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
        $product = Product::findOrFail($id);
        return view('products.show')->with(['product'=>$product]);

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
        $product = Product::findOrFail($id);
        return view('products.edit')->with(['product'=>$product]);

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
        $product = Product::findOrFail($id);

        $product->transaction_date = $request->input('transaction_date');
        $product->product = $request->input('product');
        $product->mid = $request->input('mid');
        $product->high_price = $request->input('high_price');
        $product->midium_price = $request->input('midium_price');
        $product->low_price = $request->input('low_price');
        $product->average_price = $request->input('average_price');
        $product->trading_volume = $request->input('trading_volume');
        $product->save();

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('products');
    }

    public function senior()
    {
        $products = Product::senior()->get();
        return view('products.index', ['products'=>$products]);
    }
    public function banana()
    {
        $products = Product::product('香蕉')->get();
        return view('products.index', ['products'=>$products]);
    }
    public function apple()
    {
        $products = Product::product('蘋果')->get();
        return view('products.index', ['products'=>$products]);
    }
    public function sakyamuni()
    {
        $products = Product::product('釋迦')->get();
        return view('products.index', ['products'=>$products]);
    }
    public function kyohogrape()
    {
        $products = Product::product('巨峰葡萄')->get();
        return view('products.index', ['products'=>$products]);
    }
}
