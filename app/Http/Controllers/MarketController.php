<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\Api;

class MarketController extends Controller
{    
    public function index()
    {                
        $data['titlepage'] = 'Market Day';
        return view('market.index',$data);
    }
}
