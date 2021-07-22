<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('layout.default.home.index');
    }

    function getchitiet(){
        return view('layout.default.product.index');
    }

    function getaffiliate(){
        return view('layout.default.page.affiliate');
    }

    function gethost(){
        return view('layout.default.page.host');
    }

    function getsharecode(){
        return view('layout.default.page.sharecode');
    }

    function gettoolfb(){
        return view('layout.default.page.toolfb');
    }
}

