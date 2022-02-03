<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function index(ClassModel $model, Request $request)
    {
        $academyType = $request->input('category');

        //paging
        $limit = 9;        
        $page = $request->input('page') ?: 1;        
        $offset = $limit * ($page - 1);
        $custompath = '/class';
        $param['offset'] = $offset;
        $param['limit'] = $limit;
                
        if ($academyType) {
            if ($academyType == 'class') {
                $data['title'] = 'Class';
                $result = $model->db_lists_class($param);
                $custompath = '/class?category=class';
            }else{
                $data['title'] = 'Module';
                $result = $model->db_lists_module($param);
                $custompath = '/class?category=module';
            }                    
        }else{
            $data['title'] = 'Class';
            $result = $model->db_lists_class($param);
        }        
        
        // dd($result);
        $path = url('/') . $custompath;
        $paginator = new \Illuminate\Pagination\LengthAwarePaginator($result['data'], $result['count'], $limit, $page);
        $paginator = $paginator->withPath($path);
        // dd($paginator);
        $moms   = $model->db_expert_lists(['limit' => 6]);
        // dd($moms);
        $data['moms'] = $moms;
        // $data['module'] = $module;
        $data['results'] = $result['data'];     
        $data['paginator'] = $paginator;   
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
