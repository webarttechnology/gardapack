<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Newsletter};

class AdminNewsletterMAnageController extends Controller
{
    //

    public function newsletter_lists() {
         $lists = Newsletter::orderBy('id', 'desc')->get();
         return view('admin.newsletter.lists', compact('lists'));
    }
}