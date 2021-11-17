<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Api;

class LoginController extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $checker = true;

        $status = 'Success';
        $code = '200';
        $error = array();
        $message = array();
        $data = [];

        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );
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
            
            if (!isset($apiProcess->access_token)) {
                $status = false;
                $message[] = 'invalid username or password';
                $data = null;
                $code = 401;
            } else {
                $result = $apiProcess;
                $user_session = array(
                    'user_id' => $result->data->user_id,
                    'user_email' => $result->data->email,
                    'user_role' => $result->data->role_name,
                    'user_name' => $result->data->name,
                    'user_login' => true,
                    'accessToken' => $result->access_token,
                );
    
                // ** Create New Session 
                request()->session()->put('user_login', json_encode($user_session));

                $status = true;
                $message[] = 'login success';
                $data = [
                    'result' => $user_session
                ];
            }
        }

        $response['status'] = $status;
        $response['code'] = $code;
        $response['error'] = $error;
        $response['message'] = $message;
        $response['data'] = $data;
        return response()->json($response);
    }
}
