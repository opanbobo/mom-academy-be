<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\Api;

class IncomeController extends Controller
{    
    public function index()
    {                
        $data['titlepage'] = 'Get Income';
        return view('income.index',$data);
    }
}
