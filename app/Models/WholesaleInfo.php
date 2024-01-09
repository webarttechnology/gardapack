<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WholesaleInfo extends Model
{
    use HasFactory;

    protected $table = "wholesale_infos";
    protected $fillable = [
        'user_id',
        'phone',
        'company_name',
        'resellerId',
        'resellerFile',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'zip',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
