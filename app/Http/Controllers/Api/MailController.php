<?php

namespace App\Http\Controllers\Api;

use App\Models\Mail\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MailResource;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'sender' => 'required | string | email | max:255',
            'title' => 'required | string | max:511',
            'content' => 'string',
            'recipients' => 'required | array | min:1',
            'recipients.*.name' => 'string',
            'recipients.*.email' => 'required | string | email',
        ]);

        $mail = Mail::create($request->all());
        $mail->recipients()->createMany($request->input('recipients'));

        return MailResource::make($mail);
    }
}
