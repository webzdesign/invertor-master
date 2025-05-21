<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotation extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(QuotationItem::class,"quotation_id");
    }

    public static function updateQuotationNumber($quotationID)
    {
        $quotationNo = 'QU-'.date('Y').'-'.sprintf('%05d', $quotationID);
        Quotation::find($quotationID)->update(['quotation_no' => $quotationNo]);
    }
}
