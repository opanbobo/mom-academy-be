<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\EventsModel;

class EventsController extends Controller
{
    public function index(EventsModel $model)
    {
        $limit = 9;

        $param['limit'] = $limit;
        $events = $model->db_lists($param);
        // dd($events);
        $data['results'] = $events;
        $data['titlepage'] = 'Events';
        return view('events.index',$data);
    }
    public function detail(EventsModel $model, Request $request, $id)
    {        
        
        $events = $model->db_detail($id);
        // dd($events);
        $data['results'] = $events;
        $data['titlepage'] = 'Class Detail';
        return view('events.detail',$data);
    }
}
