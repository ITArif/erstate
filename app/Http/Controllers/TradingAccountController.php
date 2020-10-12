<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradingAccountController extends Controller
{
    public function index(){
        return view('report.trading_account');
    }
}
