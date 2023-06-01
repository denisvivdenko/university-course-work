<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuitsTo extends Model
{
    protected $fillable = [
        'model_name',
        'model_logo',
		'product_id',
    ];

    public $timestamps = false;
}
