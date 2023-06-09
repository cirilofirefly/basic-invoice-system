<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Invoice extends Model
{

    use Searchable;

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'customer_name',
        'products',
        'total_invoice_amount'
    ];


    public function toSearchableArray()
    {
        return [
            'invoice_number'    => $this->invoice_number,
            'invoice_date'      => $this->invoice_date,
            'customer_name'     => $this->customer_name,
        ];
    }
}
