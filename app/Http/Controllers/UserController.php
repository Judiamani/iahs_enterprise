<?php

	namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\Reminder;

class UserController extends Controller
{
    /**
     * Send Reminder E-mail Example
     *
     * @return void
     */
    public function sendMail()
    {
        $to_email = 'info@larashout.com';

        Mail::to($to_email)->send(new Reminder);
        return "E-mail has been sent Successfully";
    }
}


?>