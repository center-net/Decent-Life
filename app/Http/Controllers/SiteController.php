<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Initiative;
use App\Models\Backend\Target;
use App\Models\Backend\Serve;

class SiteController extends Controller
{
    public function home()
    {
        $serves = Serve::All();
        $targets = Target::All();
        return view('site.home', ['title' => trans('main_trans.Home')],compact('targets','serves'));
    }
    public function donte()
    {

        return view('site.donte');
    }
    public function blog()
    {
        $initiatives = Initiative::All();
        return view('site.blog', ['title' => trans('initiatives_tran.initiatives')],compact('initiatives'));
    }
}
