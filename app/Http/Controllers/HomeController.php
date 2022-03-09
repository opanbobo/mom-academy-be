<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\HomeModel;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{    
    protected $currentTime;

    public function __construct()
    {        
        $this->currentTime = Carbon::now()->toDateTimeString();
    }

    public function index(HomeModel $model)
    {
        // request()->session()->forget('user_login');

        // $data_session = AppHelper::getAuth();
        // dd($data_session);
                
        $course = $model->db_course_lists(['limit' => 3]);
        $module = $model->db_module_lists(['limit' => 3]);
        $expert = $model->db_expert_lists(['limit' => 6]);
        $moms   = $model->db_mom_lists(['limit' => 6]);
        $events = $model->db_events_lists(['limit' => 3]);
        $product = $model->db_product_lists(['limit' => 3]);        
        // $dt = Carbon::parse($this->currentTime)->timezone('Asia/Jakarta');
        // $toDay = $dt->format('d');
        // $toMonth = $dt->format('M');
        // $toYear = $dt->format('Y');                        
        $data['events'] = $events;
        $data['course'] = $course;
        $data['module'] = $module;
        $data['expert'] = $expert;
        $data['moms'] = $moms;
        $data['product'] = $product;
        $data['titlepage'] = 'home';
        return view('home.home',$data);
    }
}
