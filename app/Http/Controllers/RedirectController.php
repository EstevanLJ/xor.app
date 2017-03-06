<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\URL;

class RedirectController extends Controller
{
    public function redirectURL($short)
    {
        $url = URL::where('short', $short)->firstOrFail();
        $url->counter += 1;
        $url->save();

        //Publica o evento para o redis
        // $event = [
        //     'event' => 'access',
        //     'data' => [
        //         'url_id' => $url->id
        //     ]
        // ];
        // Redis::publish('xorApp', json_encode($event));


        return redirect($url['full']);
    }
}
