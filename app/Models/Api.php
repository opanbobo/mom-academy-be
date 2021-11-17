<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\AppHelper;

class Api extends Model
{
    public static function login($param)
    {
        $data['method'] = 'POST';
        $data['url'] = 'https://zonderstudio.com/api/auth/login';
        $data['param'] = [
            // 'headers' => [
                // 'Content-Type' => 'application/json',
                // 'Content-Length' => '<calculated when request is sent>',
                // 'Host' => '<calculated when request is sent>',
                // 'Accept' => '*/*'
            // ],
            // ('Authorization' => config('custom.api_auth')),
            'form_params' => $param
        ];

        return json_decode(AppHelper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    }
    public static function event_with_limit($param)
    {
        $data['method'] = 'POST';
        $data['url'] = 'https://zonderstudio.com/api/v1/eventByLimit?limit='.$param['limit'];
        $data['param'] = [
            'headers' => ['Authorization' => 'Bearer '.$param['token']],
            // 'form_params' => $param
        ];

        return json_decode(AppHelper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    }
    public static function course_with_limit($param)
    {
        $data['method'] = 'POST';
        $data['url'] = 'https://zonderstudio.com/api/v1/courseByLimit?limit='.$param['limit'];
        $data['param'] = [
            'headers' => ['Authorization' => 'Bearer '.$param['token']],
            // 'form_params' => $param
        ];

        return json_decode(AppHelper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    }

    // public static function getLists($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/host/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getType()
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/property_type/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth'))
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getMembership($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/membership/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getFacility($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/facility/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getFacilityNear($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/near_facility/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getOccupant()
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/occupant/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth'))
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getOccupantMayor()
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/mayor_occupant/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth'))
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getProvinsi($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/provinsi/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getRoomFacility($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/facility/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getInfo($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/host/info';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getMembershipList($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/host/membership_list';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getKelurahan($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/kelurahan/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getAdsenseExpired($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/adsense_expired/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }
    
    // public static function getAdsenseExpiredInfo($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/adsense_expired/info';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function getAdsense($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = config('custom.api_url') . '/adsense/lists';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'query' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postCreate($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/store';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postUpdate($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/update';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postUpdateMembership($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/membership_update';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postHostChangeMember($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/change_member';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postHostChangeSlug($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/update_slug';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postDelete($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/delete';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postStatus($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/update_status';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postTransCreate($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/transaction_host/store';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postAdsenseUpdate($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/host/adsense_update';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function postAdsenseDelete($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/adsense_host/delete';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'form_params' => $param
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function upload_file($param)
    // {
    //     $data['method'] = 'POST';
    //     $data['url'] = config('custom.api_url') . '/upload_host/image';
    //     $data['param'] = array(
    //         'headers' => array('Authorization' => config('custom.api_auth')),
    //         'multipart' => [
    //             [
    //                 'name'     => $param['name'],
    //                 'contents' => $param['contents']
    //             ],
    //             [
    //                 'name' => 'path',
    //                 'contents' => $param['path']
    //             ]
    //         ]
    //     );

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }

    // public static function search_address($param)
    // {
    //     $data['method'] = 'GET';
    //     $data['url'] = 'http://www.mapquestapi.com/geocoding/v1/address?key=JIShKz6CrZfyXPA5wWR03XtAAbe8LuEg&location=' . $param;
    //     $data['param'] = array();

    //     return json_decode(Helper::guzzle($data), false, 512, JSON_BIGINT_AS_STRING);
    // }
}