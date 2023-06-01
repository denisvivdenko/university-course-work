<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_image',
		'product_price',
		'product_description',
		'product_characteristics',    
	];

    public $timestamps = false;


	public function suitsto(){
        return $this->hasMany(SuitsTo::class);
    }
}
