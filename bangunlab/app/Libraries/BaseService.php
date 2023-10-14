<?php
namespace App\Libraries;
use Illuminate\Http\Response;

class BaseService{
    
    public static function generate_number($length) {
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle($chars), 0, $length);
    }

    public static function sendSuccess($data,$msg){
        return response()->json([
            'status' => true,
            'message'=> $msg,
            'data'   => $data   
        ]);
    }

    public static function sendError($msg){
        return response()->json([
            'status' => false,
            'message'=> $msg,  
        ]);
    }


}