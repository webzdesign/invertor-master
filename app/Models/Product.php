<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = [];
    protected $casts = [
        'languages' => 'object',
    ];
    public function addedby()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    public function updatedby()
    {
        return $this->belongsTo(User::class, 'updated_by')->withDefault([
            'name' => '-',
        ]);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand_info()
    {
        return $this->belongsTo(Brands::class,'brand_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function stockin()
    {
        return $this->hasMany(Stock::class, 'product_id')->where('type', '0')->where('form', '1')->where('qty', '>', '0');
    }

    public function stockout()
    {
        return $this->hasMany(Stock::class, 'product_id')->where('type', '1')->where('form', '2')->where('qty', '>', '0');
    }

    public static function msp($id)
    {
        $q = \App\Models\ProcurementCost::select('min_sales_price')->whereIn('role_id', \App\Models\User::getUserRoles())
        ->where('product_id', $id);

        if ($q->exists()) {
            return $q->first()->min_sales_price;
        }

        return null;
    }
    public function getTnameAttribute() {
        $locale = app()->getLocale();

        if (isset($this->languages->{$locale}->name) && !empty($this->languages->{$locale}->name)) {
            return $this->languages->{$locale}->name;
        }

        return $this->name;
    }

    public function getTdescriptionAttribute() {
        $locale = app()->getLocale();

        // if (isset($this->languages->{$locale}->description) && !empty($this->languages->{$locale}->description)) {
        //     return $this->languages->{$locale}->description;
        // }

        return $this->description;
    }

    public function getTslidercontentAttribute() {
        $locale = app()->getLocale();

        if (isset($this->languages->{$locale}->slider_content) && !empty($this->languages->{$locale}->slider_content)) {
            return $this->languages->{$locale}->slider_content;
        }

        return $this->slider_content;
    }

}
