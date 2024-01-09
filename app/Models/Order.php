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
        
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'shipping_address1',
        'shipping_address2',
        'shipping_country',
        'shipping_town',
        'shipping_state',
        'shipping_zip',

        'order_notes',
        'billing_state',
        'ship_station_order_id',
        'ship_station_order_details',
        'billing_zip',
        'status',
        'order_status',
        'txn_id',
        'transaction_details',
        'total_amount',
        'carrier',
        'service_code',
        'shipping_cost',
        'other_cost',
        
        'shipping_option'
    ];
    
    public function orderProduct()
    {
            return $this->hasMany(OrderedProduct::class);
    }
}
