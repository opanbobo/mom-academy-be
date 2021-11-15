<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Api;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['css'] = 'home/style.css';
        $data['js'] = 'home/script.js';
        $data['titlepage'] = 'home';
        return view('home.home',$data);
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $checker = true;

        $status = 'Success';
        $code = '200';
        $error = array();
        $message = array();

        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );
        // $messages = array(
        //     'host_id.required' => 'Host id tidak tersedia hub. programmer',
        //     'member_id.required' => 'Member id tidak tersedia hub. programmer',
        // );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $checker = false;
            $status = 'Error';
            $code = 422;
            $error = 'Validation Error';
            $message = $validator->errors();
        }

        if ($checker) {
            $param['email'] = $email;
            $param['password'] = $password;

            $apiProcess = Api::login($param);
            
            if (!$apiProcess) {
                $status = 'error';
                $message[] = 'login failed';
                $data = null;
            } else {
                $status = 'success';
                $message[] = 'login failed';
                $data = [
                    'accessToken' => $apiProcess->access_token,
                    'result' => $apiProcess->data
                ];
            }
        }

        $response['status'] = $status;
        $response['data'] = $data;
        $response['message'] = $message;
        return response()->json($response);
    }
}
