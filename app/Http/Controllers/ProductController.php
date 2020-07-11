<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
		return view ('admin.pages.view-product',compact('products'));
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
		$product->productName=$request->productName;
		$product->productTitle=$request->productTitle;
		$product->productPrice=$request->productPrice;
		$product->productCode=$request->productCode;
		$product->productStock=$request->productStock;
		$product->productDiscount=$request->productDiscount;
		$product->productSize=$request->productSize;
		$product->productDescription=$request->productDescription;
		$product->productStatus=$request->productStatus;
		if($request->hasFile('pictureName'))
		{
		$pictureName = '@'.time().'.'.$request->pictureName->getClientOriginalExtension();
        $request->pictureName->move(public_path('images/uploads'), $pictureName);
		$product->pictureName=$pictureName;
		}
		else
		{
			$product->pictureName='noimage';
		}
		$product->save();
		return back()->with('success','Product Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('pages.product-detail', ['product' => Product::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
		return view ('admin.pages.edit-product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
		//dd($request->all());
		$product = Product::FindOrFail($id);
		$product->productName=$request->productName;
		$product->productTitle=$request->productTitle;
		$product->productPrice=$request->productPrice;
		$product->productCode=$request->productCode;
		$product->productStock=$request->productStock;
		$product->productDiscount=$request->productDiscount;
		$product->productSize=$request->productSize;
		$product->productDescription=$request->productDescription;
        $product->productStatus=$request->productStatus;
        $oldpic=$product->pictureName;
		if($request->hasFile('pictureName'))
		{
		$pictureName = '@'.time().'.'.$request->pictureName->getClientOriginalExtension();
        $request->pictureName->move(public_path('images/uploads'), $pictureName);
		$product->pictureName=$pictureName;
		}
		else
		{
			$product->pictureName=$oldpic;
		}
			
		
		
		$product->save();
		return redirect('/view-products')->with('message','Product Successfully Update!');
		
    }

    
     /* Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::FindOrFail($id);
		$deleted = $product->delete();
		if($deleted){
			return redirect('/view-products')->with('message','Product Successfully Deleted!');
		}
		
    }
}
