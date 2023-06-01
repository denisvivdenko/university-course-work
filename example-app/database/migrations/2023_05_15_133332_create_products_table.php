<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
			$table->string('product_name');
			$table->string('product_image');
			$table->float('product_price');
			$table->text('product_description');
			$table->text('product_characteristics');
		});

			DB::table('products')->insert([
				[
					'product_name' => 'Моторне масло',
					'product_image' => 'src/products/1.png',
					'product_price' => 1235,
					'product_description' => 'NO DATA',
					'product_characteristics' => 'NO DATA',
				],
				[
					'product_name' => 'Очищувач',
					'product_image' => 'src/products/6.png',
					'product_price' => 325,
					'product_description' => 'NO DATA',
					'product_characteristics' => 'NO DATA'
				],
				[
					'product_name' => 'Глушник',
					'product_image' => 'src/products/2.png',
					'product_price' => 12325,
					'product_description' => 'NO DATA',
					'product_characteristics' => 'NO DATA'
				],
				[
					'product_name' => 'Амортизатор',
					'product_image' => 'src/products/4.png',
					'product_price' => 12325,
					'product_description' => 'NO DATA',
					'product_characteristics' => 'NO DATA'
				],
				[
					'product_name' => 'Амортизуюча підвіска',
					'product_image' => 'src/products/5.png',
					'product_price' => 625,
					'product_description' => 'NO DATA',
					'product_characteristics' => 'NO DATA'
				],
			]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
