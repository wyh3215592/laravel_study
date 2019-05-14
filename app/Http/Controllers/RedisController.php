<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class RedisController extends Controller
{
    public function index()
    {
    
    	$redis = app('redis');
    	return $redis->hset('test','1','1');
    }
}
