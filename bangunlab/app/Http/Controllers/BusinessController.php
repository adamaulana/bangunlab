<?php

namespace App\Http\Controllers;
use App\Libraries\BaseService;
use App\Models\Business;
use App\Models\ReferencesBusinessType;
use Illuminate\Http\Request;
use DB;

class BusinessController extends Controller
{
    public function store(Request $req){
        DB::beginTransaction();
        try {
            $user = auth()->user();            
            $business_type = ReferencesBusinessType::where('id',$req->business_type_id)->first();
            $business = Business::create([
                'name'              => $req->name,
                'income'            => $req->income,
                'employee'          => $req->employee,
                'user_id'           => $user->id,
                'business_type_id'  => $business_type->id,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
        }
        
        return BaseService::sendSuccess($business,'Sukses Menambahkan Usaha');
    }


    public function add_type(Request $req){
        DB::beginTransaction();
        try {
            $business = ReferencesBusinessType::create([
                'name'              => $req->name
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
        }
        
        return BaseService::sendSuccess($business,'Sukses Menambahkan Usaha');
    }


    
}
