<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $fillable = [
        'user_id',
        'order_id',
        'billing_name',
        'billing_username',
        'billing_email',
        'billing_phone',
        'billing_address1',
        'billing_address2',
        'billing_country',
        'billing_town',
        'order_notes',
        'billing_state',
        'billing_zip',
        'status',
        'order_status',
        'txn_id',
        'transaction_details',
        'total_amount'
    ];
}
