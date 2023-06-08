<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'customer_name',
        'products',
        'total_invoice_amount'
    ];
}
