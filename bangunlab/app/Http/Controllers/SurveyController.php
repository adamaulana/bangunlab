<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ReferencesSurvey;
use App\Models\SurveyCode;
use App\Libraries\BaseService;
use Carbon\Carbon;
use DB;

class SurveyController extends Controller
{
    public function store(Request $req){
        DB::beginTransaction();
        try {
            $survey = ReferencesSurvey::create([
                'title'     => $req->title,
                'link_form' => $req->form_link,
                'type'      => $req->type,
            ]);
            
            DB::commit();
        } catch (\Exception $e) {
            return BaseService::sendError($e);
            DB::rollback();
        }
        
        return BaseService::sendSuccess($survey,'Sukses Input Data Survey');
    }

    public function submit(Request $req, $unique_code){
        DB::beginTransaction();
        try {
            $survey = SurveyCode::where('unique_code',$unique_code)->first();
            $survey->submitted = Carbon::now();
            $survey->save();
            DB::commit();
        } catch (\Exception $e) {
            return BaseService::sendError($e);
            DB::rollback();
        }

        return BaseService::sendSuccess($survey,'Sukses Submit Data Survey');
    }
}
