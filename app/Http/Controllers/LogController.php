<?php

namespace App\Http\Controllers;

use Airtable;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function logSms(Request $request)
    {
        $airtable = Airtable::table('twilio_sms_logs')->create([
            'Message_Sid' => $request->input('MessageSid'),
            'From' => $request->input('From'),
            'To' => $request->input('To'),
            'Message' => $request->input('Body')
        ]);

        return;
    }
}
