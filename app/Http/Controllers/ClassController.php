<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Validator;
use Illuminate\Http\Request;
use App\Models\Api;

class ClassController extends Controller
{
    public function index()
    {
        # code...
    }
    public function detail($id)
    {        
        $data_session = AppHelper::getAuth();
        // dd($data_session);

        //temporary token
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImMxNGZkZDIxMjRiNTJkNzhmM2Y2N2Y3ODhkNWM5MDlmOWNhODNmOGRjYjRiMDNlNmVmZjYxOWFkNDZkMzZkMzM2NzY3OWQ2YTcwMDNjYjJlIn0.eyJhdWQiOiIxIiwianRpIjoiYzE0ZmRkMjEyNGI1MmQ3OGYzZjY3Zjc4OGQ1YzkwOWY5Y2E4M2Y4ZGNiNGIwM2U2ZWZmNjE5YWQ0NmQzNmQzMzY3Njc5ZDZhNzAwM2NiMmUiLCJpYXQiOjE2MzcxNTkwNTIsIm5iZiI6MTYzNzE1OTA1MiwiZXhwIjoxNjY4Njk1MDUyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.ljgDrWm_BowRadM7ydQbIzqoqETiEPbGnpSOseRRI7s30Toq-xhwNg3rbrWs5m5mchxbo1W1ESxKfSQX6YGPxmaMpJMcPNwuoPhD7QyCsnyXwkueVvU6OpvQDxXo688IsltmiLYDenj8y6vPprK865RQS-NuZNCikiIxipvQgwxRIoT8teQ-mQRl1QfbWwLN75Lb6W-D2fYM4bi5eE098s76yT_UIK_uVije5hl6u56oEcbVyTHUI424A-tzg8FkyB6lodv6L-Ni9hPCFO5nV-_5C164Td0VuXkKAcyEGiQCNm3zVNMoy82R0HANEzbTOTUV92Pl9kDlQNHsFPnwVBTMo0R7Avc53yoLu3iul0n7mIjJEsCbg5B-SUP2yMaBnoNBgZWQmRg71zBhwTOgCHqlg0XUgYofg7VhGdeQjFArPfbG_8FNdU5_r69BqCCnixceJYVjJefl8NSvx_lSyOeDTafxR0RW01MqUsmlVJXcSV96gC4wRwxbQmp6iMEGVtmAwFlu_djm2VY9RC6Haf5hX6LyIU02iD-wogPD9YL_XQPTxA9dVxJZr4dGdkBKobaAcV9--8Nx7wOVlgID1KaB9C7X4qOReP8_LWrvQLt20enEkTRPPusPQuCCOl_EdzlLG_3PXhiMvhhZEOBwsutdfUtXO9vWeE7PGjTbOWw';
        $data_course = Api::course_with_id([
            'id' => $id,
            // 'token' => $data_session->accessToken
            'token' => $token
        ]);
        // dd($data_course);
        $data['course'] = $data_course->data[0];
        $data['titlepage'] = 'class';
        return view('class.detail',$data);
    }
}
