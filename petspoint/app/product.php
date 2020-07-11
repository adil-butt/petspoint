<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey   = 'productId';
    protected $fillable = [
			'productName','productTitle','productPrice','productCode',
			'productStock','productDiscount','productSize','productDescription',
			'productStatus','pictureName',
	];
}
