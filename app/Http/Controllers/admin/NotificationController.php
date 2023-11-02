<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
      public function mark_all()
      {
             Notification::whereStatus('unread')->update([
                   'status' => 'read',
             ]);

             return redirect()->back();
      }

     
}
