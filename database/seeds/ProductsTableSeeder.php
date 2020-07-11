<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=array(
			array(
				'productName'=>'Cat-Bed-20',
				'productTitle'=>'Cat Bed',
				'productPrice'=>'1300',
				'productCode'=>'CB201',
				'productStock'=>'Y',
				'productDiscount'=>'100',
				'productSize'=>'Small,large',
				'productDescription'=>'that is red and Blue and White Color Bed if you are purchase then contact us',
				'productStatus'=>'Y',
				'pictureName'=>'DUMYDUMYDUMY'
			)			
		);
		DB::table('products')->insert($products);
    }
}
