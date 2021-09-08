<?php

namespace App\Http\Controllers\Cdn;

use App\Models\Mail\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PixelController extends Controller
{
    public function show(Request $request, string $mailId)
    {
        $mail = Mail::findOrFail($mailId);
        $mail->openings()->create([
            'user_agent' => substr($request->userAgent(), 0, 511),
        ]);

        $pixel = storage_path('app/public/pixel.png');

        return response()->file($pixel);
    }
}
