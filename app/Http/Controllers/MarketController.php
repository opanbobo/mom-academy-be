<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\MarketModel;

class MarketController extends Controller
{    
    public function index(MarketModel $model)
    {                
        $limit = 9;

        $param['limit'] = $limit;
        $product = $model->db_lists($param);
        // dd($product);
        $data['results'] = $product;
        $data['titlepage'] = 'Market Day';
        return view('market.index',$data);
    }
    public function detail(MarketModel $model, Request $request, $id)
    {                        
        $product = $model->db_detail($id);        
        $product_image = $model->db_get_image($id);                    
        $product_other = $model->db_list_other(['limit' => 6, 'id' => $id]);    
        
        $data['results'] = $product;
        $data['other'] = $product_other;
        $data['images'] = $product_image;
        $data['titlepage'] = 'Market Day';
        return view('market.detail',$data);
    }
}
