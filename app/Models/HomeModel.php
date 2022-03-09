<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    protected $table = 'course';
    protected $module = 'module_ebook';
    protected $expert = 'expert';
    protected $moms = 'moms';
    protected $events = 'events';
    protected $table_product = 'products';

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
    public function db_events_lists($param)
    {
        $query = DB::table($this->events);                     
        $query->where('is_publish',1);
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }
    public function db_expert_lists($param)
    {
        $query = DB::table($this->expert);                
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }
    public function db_mom_lists($param)
    {
        $query = DB::table($this->moms);                
        $query->limit($param['limit']);
        $result = $query->get();        
        return $result;
    }
    public function db_product_lists($param)
    {
        $query = DB::table($this->table_product); 
        $query->limit($param['limit']);
        $result = $query->get();    
        return $result;
    }
}