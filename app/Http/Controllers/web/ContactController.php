<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Mail\ContactFormMessage;
use App\Notifications\MailReceived;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    //submit form
    public function submitContactForm(Request $request)
    {
        // catch mail failures and log them
        try {
            // validate form
            $data = $request->validate([
                'name' =>'required|string|max:255',
                'email' =>'required|string|email|max:255',
                'subject' =>'required|string|max:255',
                'message' =>'required|string']);

            // sendmail
            $mailSent = Mail::to('info@mycallup.com')->send(new ContactFormMessage($data));


            // if mail sent successfully reply user with notification
            if ($mailSent) {
                // send email to user
                $Notification = Notification::send($mailSent, new MailReceived($data));
                dd('Mail sent successfully');
                return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon');
            }


        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
    }

}
