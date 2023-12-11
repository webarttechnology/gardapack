<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = "notifications";
    protected $fillable = [
        'sub_admin_id',
        'action',
        'action_with',
        'action_with_id',
        'status'
    ];

    /* Setter Method */

    public static function setNotifications($sub_admin_id, $action, $action_with, $action_with_id)
    {
        Notification::create([
            'sub_admin_id' => $sub_admin_id,
            'action' => $action,
            'action_with' => $action_with,
            'action_with_id' => $action_with_id
       ]);

      return true;
    }
}