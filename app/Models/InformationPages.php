<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class InformationPages extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'information_pages';
    public $guarded = [];
}
