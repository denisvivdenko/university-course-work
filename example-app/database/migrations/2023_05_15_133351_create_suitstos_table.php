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
        Schema::create('suits_tos', function (Blueprint $table) {
            $table->id();
			$table->string('model_name');
			$table->string('model_logo');
			$table->BigInteger('product_id');
		});

			DB::table('suits_tos')->insert([
				[
					'model_name' => 'BMW',
					'model_logo' => 'src\company-logos\BMW.png',
					'product_id' => 1,
				],
				[
					'model_name' => 'Volkswagen',
					'model_logo' => 'src\company-logos\Volkswagen.png',
					'product_id' => 1,
				],


				[
					'model_name' => 'BMW',
					'model_logo' => 'src\company-logos\BMW.png',
					'product_id' => 2,
				],
				[
					'model_name' => 'Audi',
					'model_logo' => 'src\company-logos\Audi.png',
					'product_id' => 2,
				],


				[
					'model_name' => 'BMW',
					'model_logo' => 'src\company-logos\BMW.png',
					'product_id' => 3,
				],
				[
					'model_name' => 'Porsche',
					'model_logo' => 'src\company-logos\Porsche.png',
					'product_id' => 3,
				],


				[
					'model_name' => 'BMW',
					'model_logo' => 'src\company-logos\BMW.png',
					'product_id' => 4,
				],
				[
					'model_name' => 'Mini',
					'model_logo' => 'src\company-logos\Mini.png',
					'product_id' => 4,
				],


				[
					'model_name' => 'Volkswagen',
					'model_logo' => 'src\company-logos\Volkswagen.png',
					'product_id' => 5,
				],
				[
					'model_name' => 'BMW',
					'model_logo' => 'src\company-logos\BMW.png',
					'product_id' => 5,
				],
			]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suitstos');
    }
};
