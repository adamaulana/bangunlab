<?php

namespace App\Http\Controllers;
use App\Libraries\BaseService;
use Illuminate\Http\Request;
use App\Models\Roadmap;
use App\Models\Courses;
use App\Models\StepRoadmap;
use DB;


class RoadmapController extends Controller
{
    public function store(Request $req){
        DB::beginTransaction();    
        try {

            $roadmap = Roadmap::create([
                'title'                 => $req->title,
                'level'                 => $req->level,
                'parameter_result_file' => $req->parameter_result_file
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
        }

        return BaseService::sendSuccess($roadmap,'Sukses Menampilkan Data');
    }

    public function get_step(Roadmap $roadmap){
        $result = Roadmap::where('id',$roadmap->id)->with('step')->first();
        return BaseService::sendSuccess($result,'Sukses Menampilkan Data'); 

    }
    public function store_step(Request $req){
        DB::beginTransaction();    
        try {
            $roadmap    = Roadmap::where('id',$req->roadmap_id)->first();
            $course     = Courses::where('id',$req->course_id)->first();    
            
            $step       = StepRoadmap::create([
                'title'         => $req->title,
                'step_number'   => $req->step_number,
                'course_id'     => $course->id,
                'roadmap_id'    => $roadmap->id
            ]);
            
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
        }

        return BaseService::sendSuccess($step,'Sukses Menambahkan Data');
    }
}
