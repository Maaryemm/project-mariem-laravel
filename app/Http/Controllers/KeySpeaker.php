<?php

namespace App\Http\Controllers;

use App\Models\KeyNoteSpeaker;
use Illuminate\Http\Request;

class KeySpeaker extends Controller
{
    public function GetSpeaker()  {
        $SpeakerData = KeyNoteSpeaker::all();
        return view('pages.key_speaker',compact('SpeakerData'));
    }
}
