<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class RedisController extends Controller
{
    const STORE = 10;

    public function index()
    {
        Redis::set('inv:remain', self::STORE);

        for ($i = 1; $i <= 12; $i++) {

            if (Redis::get('inv:remain') <= 0) {
                dd('库存boom');
            }
            $now = Redis::incr('inv:remain');
            dump($now);
        }
        //dump($store);
    }
}