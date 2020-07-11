<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
			$table->increments('productId');
			$table->string('productName',30);
			$table->string('productTitle',30);
			$table->float('productPrice');
			$table->string('productCode',20);
			$table->string('productStock',1);
			$table->integer('productDiscount');
			$table->string('productSize',20);
			$table->longtext('productDescription');
			$table->string('productStatus',1);
			$table->string('pictureName',60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
