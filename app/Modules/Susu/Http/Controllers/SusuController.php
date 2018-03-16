<?php

namespace App\Modules\Susu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SusuController extends Controller
{
    public function index()
    {
        $a = request('name') ?: '苏苏';
        $b = request('age') ?: 18;
        $c = request('sex') ?: '你猜';

        return "我叫{$a},我今年{$b}岁了,我的性别是{$c}";
    }

}
