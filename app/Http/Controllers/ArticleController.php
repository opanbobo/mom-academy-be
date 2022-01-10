<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Support\Carbon;

class ArticleController extends Controller
{    
    protected $currentTime;

    public function __construct()
    {        
        $this->currentTime = Carbon::now()->toDateTimeString();
    }
    
    public function index(ArticleModel $model)
    {                
        $param =  [
            'limit' => 12
        ];

        $articles = $model->db_lists($param); 
        // dd($articles);
        // $dt = date('d F Y', strtotime($articles[0]->created_at));
        // dd($dt);
        $data['results'] = $articles;
        $data['titlepage'] = 'Article';
        return view('article.index',$data);
    }
    public function detail(ArticleModel $model, Request $request, $article_id)
    {                        
        $articles = $model->db_detail($article_id);
        // dd($articles);
        $data['results'] = $articles;
        $data['titlepage'] = 'Article';
        return view('article.detail',$data);
    }
}
