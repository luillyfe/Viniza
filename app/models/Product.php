<?php

Class Product extends Eloquent {

	/*
	 *	Table products
	 *	
	 */

	protected $fillable = array('productname', 'price', 'image');

}