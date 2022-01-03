<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    protected $table = 'course';
    protected $module = 'module_ebook';

    public function db_course_lists($param)
    {
        $query = DB::table($this->table . ' as prim');        
        $query->select('prim.*','ex.expert_name');
        $query->leftJoin('expert as ex','prim.speaker', '=', 'ex.expert_id');                
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }

    public function db_module_lists($param)
    {
        $query = DB::table($this->module);                
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }
}