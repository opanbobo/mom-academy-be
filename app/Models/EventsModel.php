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
        $query = DB::table($this->table); 
        $result = $query->paginate($param['limit']);     
        return $result;
    }

    public function db_detail($id)
    {
        $query = DB::table($this->table);                        
        $query->where('event_id',$id);

        $result = $query->first();        
        return $result;
    }
}