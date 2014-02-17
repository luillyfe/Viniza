<?php

class ProductController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Product Controller
	|--------------------------------------------------------------------------
	|
	| This Controller handle all request about products. 
	|
	|	Route::get('products/new', 'ProductController@newProduct');
	|
	*/

	public function newProduct() {
		return View::make('products.new');
	}

	public function create() {
		$product 	= 	new Product;
		$data 		= 	Input::all();
		$product 	->	fill($data);
		$product 	->	admon_id = 1;
		$product 	->	category_id = 1;
		
		$image		=	Input::file('image');
		$product 	->  image = '../images/products/'.
									$image->getClientOriginalName();
		$image		->  move('images/products', $image->getClientOriginalName());
		$product 	->	save();

		#return "<img src='".$product->image."'>";
		return Redirect::to('products/index');
	}

	public function index() {
		$products = Product::all();

		return View::make('products.index')
					->with('products', $products); 		
	}

	public function show($id) {
		$product = Product::find($id);
		
		return View::make('products.show')
					->with('product', $product);
	}

	public function edit($id) {
		$product = Product::find($id);

		return View::make('products.edit')
					->with('product', $product);
	}

	public function update($id) {
		$product = Product::find($id);
		$product->productname = Input::get('productname');
		$product->price = Input::get('price');
		
		/** If form field image is not null then assig the
		 *  form field image to product attribute image
		 *  othersiwe product attribute image not change  
		**/
		if(Input::get('image') != null)
			$product->image = Input::get('image');
		
		$product->save(); 

		return View::make('products.show')
					->with('product', $product);
	}

	public function delete($id) {
		$product = Product::find($id);
		$product->delete();

		return Redirect::to('products/index');
	}

}