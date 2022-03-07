<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MarketModel extends Model
{
    protected $table = 'products';
    protected $subtable = 'product_image';

    public function db_lists($param)
    {
        $query = DB::table($this->table); 
        $result = $query->paginate($param['limit']);     
        return $result;
    }

    public function db_detail($id)
    {
        $query = DB::table($this->table .' as p')
        ->leftJoin('brand as b','b.brand_id', '=', 'p.brand_id')
        ->leftJoin('category_market as c','c.category_market_id', '=', 'p.category_market_id');         
        $query->where('product_id',$id);

        $result = $query->first();        
        return $result;
    }
    public function db_get_image($id)
    {
        $query = DB::table($this->subtable);                        
        $query->where('product_id',$id);

        $result = $query->get();        
        return $result;
    }
    public function db_list_other($param)
    {
        $query = DB::table($this->table); 
        $query->where('product_id','!=',$param['id']);
        $result = $query->paginate($param['limit']);     
        return $result;
    }       
}