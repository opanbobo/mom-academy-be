<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
class ClassModel extends Model
{
    protected $table = 'course';    
    protected $module = 'module_ebook';
    protected $expert = 'expert';

    public function db_lists_class($param)
    {
        $query = DB::table($this->table . ' as prim');        
        $query->select('prim.*','ex.expert_name');
        $query->leftJoin('expert as ex','prim.speaker', '=', 'ex.expert_id');   
        $count = $query->count();             
        $query->offset($param['offset'])->limit($param['limit']);        
        $result = $query->get();
        $response = array(
            'count' => $count,            
            'data' => $result,
        );
        return $response;
    }    
    public function db_lists_module($param)
    {
        $query = DB::table($this->module);                
        $count = $query->count();
        $result = $query->offset($param['offset'])->limit($param['limit'])->get(); 
        $response = array(
            'count' => $count,            
            'data' => $result,
        );
        return $response;
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
    public function db_expert_lists($param)
    {
        $query = DB::table($this->expert);                
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }
}