<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    protected $table = 'events';
    // protected $category = 'category_article';

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
        $query->where('event_id',$id);

        $result = $query->first();        
        return $result;
    }
}