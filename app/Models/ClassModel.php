<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'course';
    protected $moms = 'moms';

    public function db_lists($param)
    {
        $query = DB::table($this->table . ' as prim');        
        $query->select('prim.*','ex.expert_name');
        $query->leftJoin('expert as ex','prim.speaker', '=', 'ex.expert_id');                
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }

    public function db_detail($id)
    {
        $query = DB::table($this->table . ' as prim');      
        $query->select('prim.*','ex.expert_name');
        $query->leftJoin('expert as ex','prim.speaker', '=', 'ex.expert_id');            
        $query->where('course_id',$id);

        $result = $query->first();        
        return $result;
    }
    public function db_mom_lists($param)
    {
        $query = DB::table($this->moms);                
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }
}