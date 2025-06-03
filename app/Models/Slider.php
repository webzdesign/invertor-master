<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'sliders';
    protected $guarded = [];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id','id');
    }
}
