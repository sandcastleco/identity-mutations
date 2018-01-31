<?php

namespace App\Http\Controllers;

use App\Mail\Inquiry;
use App\Mail\Message;
use App\Artwork;

use Illuminate\Http\Request;

class InquiriesController extends Controller
{

    public function sendInquiry($id)
    {
      $email = config('mail.admin');
      $artwork = Artwork::find($id);

      $attributes = [
        'replyTo' => request('email'),
        'replyName' => request('name'),
        'message' => request('message'),
        'artwork' => $artwork
      ];

      \Mail::to($email)->send(new Inquiry($attributes));

      return redirect('/thank-you');
    }

    public function sendMessage() {
      $email = config('mail.admin');

      $attributes = [
        'replyTo' => request('email'),
        'replyName' => request('name'),
        'message' => request('message')
      ];

      \Mail::to($email)->send(new Message($attributes));

      return redirect('/thank-you');
    }

    public function confirm() {
      return view('inquiries.confirm', ['title' => 'Thank you for your message.']);
    }
}
