<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsOptions extends Model
{
    use HasFactory;

    protected $table = "settings_options";
    protected $fillable = [
        'name',
        'settings_key'
    ];
}
