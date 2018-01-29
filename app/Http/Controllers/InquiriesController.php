<?php

namespace App\Http\Controllers;

use App\Mail\Inquiry;
use App\Artwork;

use Illuminate\Http\Request;

class InquiriesController extends Controller
{

    public function send($id)
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

    public function confirm() {
      return view('inquiries.confirm', ['title' => 'Thank you for your interest']);
    }
}
