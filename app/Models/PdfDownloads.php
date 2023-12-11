<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfDownloads extends Model
{
    use HasFactory;

    protected $table = "pdf_downloads";
    protected $fillable = [
         'title',
         'pdf',
    ];
}
