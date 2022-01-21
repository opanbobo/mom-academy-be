<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function index(ClassModel $model)
    {
        $class = $model->db_lists_class(['limit' => 6]);
        $module = $model->db_lists_module(['limit' => 6]);
        $moms   = $model->db_mom_lists(['limit' => 6]);
        $moms   = $model->db_mom_lists(['limit' => 6]);
                        
        $data['moms'] = $moms;
        $data['module'] = $module;
        $data['results'] = $class;
        $data['titlepage'] = 'Class';
        return view('class.index',$data);
    }
    public function detail(ClassModel $model, Request $request, $id)
    {        
        
        $class = $model->db_detail($id);
        
        $data['results'] = $class;
        $data['titlepage'] = 'Class Detail';
        return view('class.detail',$data);
    }
}
