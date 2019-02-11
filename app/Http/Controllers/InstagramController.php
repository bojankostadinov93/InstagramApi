<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use Vinkla\Instagram\Instagram;

class InstagramController extends Controller
{
    //
    public function instagramFeed(){
        $instagram= new Instagram('2088497833.1677ed0.b324d678976b49c38498e59da7f74085');
        $instagrams=$instagram->media();

        return view('instagram', compact('instagrams'));

    }
}
