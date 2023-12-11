<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRequest extends Model
{
    use HasFactory;

    protected $table = "product_requests";
    protected $fillable = [
        'product_model_no',
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'purchased_from',
        'date_of_purchase',
        'delivery_date',
        'receive_emails_status'
    ];
}
