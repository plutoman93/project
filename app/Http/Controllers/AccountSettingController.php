<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountSettingController extends Controller
{
    public function index()
    {
        return view('account_setting');
    }
}
