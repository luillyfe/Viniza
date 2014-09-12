<?php

class ProductController extends \BaseController {

	/**
	 * the layout that should for responses
	 *
	 */
	//protected $layout = "layouts.master" ;

	/**
	 * Display all product in the shop
	 *
	 * @return Response
	 */
	public function index()
	{
		//get all the products
		$products = Product::all();

		//load the view and pass the products
		return View::make('products.index')->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//load the create form
		return View::make('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array(
			'name'       => 'required',
			'price'      => 'required|numeric',
			'image' 	 => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the store
		if ($validator->fails()) {
			return Redirect::to('products/create')
				->withErrors($validator);
		} else {
			// store
			$product = new Product;
			$product->productname 	= Input::get('name');
			$product->price      	= Input::get('price');
			// Size max for image = 524314 bits
			$product->image 	  	= Input::get('image');
			$product->save();

			// redirect
			Session::flash('message', 'Successfully created products!');
			return Redirect::to('products');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}