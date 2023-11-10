<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailManageController extends Controller
{
    //

    public static function mailSend($view, $arr, $subject, $email){
        Mail::send($view, $arr, function($message) use($email, $subject) {
            $message->to($email)->subject($subject);
        });

        return true;
    }
}
