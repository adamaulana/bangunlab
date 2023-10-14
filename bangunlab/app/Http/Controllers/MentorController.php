<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use App\Models\User;
use App\Models\ReferenceMentorType;
use Illuminate\Http\Request;
use App\Libraries\BaseService;
use Carbon\Carbon;
use DB;

class MentorController extends Controller
{
    public function add_type(Request $req){    
        DB::beginTransaction();
        try {
            $mentor = ReferenceMentorType::create([
                'category' => $req->category]);
            DB::commit();
        } catch (\Esxeption $e) {
            DB::rollback();
            return BaseService::sendError($e);

        }

        return BaseService::sendSuccess($mentor,'Sukses Menambahkan Usaha');
    }

    public function store(Request $req){
        DB::beginTransaction();
        try {
            $type = ReferenceMentorType::where('id',$req->mentor_category_id)->first();
            $user = User::where('id',$req->user_id)->first();
            
            $mentor = Mentor::create([
                'user_id'            => $user->id,
                'mentor_category_id' => $type->id
            ]);
            DB::commit();
        } catch (\Esxeption $e) {
            DB::rollback();
            return BaseService::sendError($e);

        }
        return BaseService::sendSuccess($mentor,'Sukses Menambahkan Usaha');
    }
}
