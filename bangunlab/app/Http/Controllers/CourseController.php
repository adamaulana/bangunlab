<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\ReferenceCourseTypes;
use App\Models\Mentor;
use App\Models\CourseMaterials;
use App\Models\Courses;
use App\Models\VideoCourse;
use App\Models\OfflineCourse;
use App\Libraries\BaseService;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{

    public function get_offline_material(CourseMaterials $material){
        $result =  CourseMaterials::where('id',$material->id)->with('offline')->first();
        return BaseService::sendSuccess($result,'Sukses Menampilkan Data');
    }

    public function add_type(Request $req){

        DB::beginTransaction();
        try {
            $course_type = ReferenceCourseTypes::create([
                'name'  => $req->name
            ]);
            
            if($req->has('images')){
                $images = $req->images;

                foreach ($images as $key => $value) {
                    $code = BaseService::generate_number(8);
                    $date = Carbon::now();
                    $remove = array("-", ":"," ");
                    $name = str_replace($remove,'',$date->toDateTimeString()).$code.$key.'.'.$value->getClientOriginalExtension();                                                            
                    $path = public_path('IconKategoriKursus');
                    $value->move($path,$name);                    
              
                    $course_type->icon = $name;
                    $course_type->save();
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
        }

        return BaseService::sendSuccess('Sukses','Gambar Sukses Di Upload');
    }

    public function store(Request $req){

        DB::beginTransaction();
        try {
            $mentor = Mentor::where('id',$req->mentor_id)->first();
            $type   = ReferenceCourseTypes::where('id',$req->course_type)->first();
            

            $course = Courses::create([
                'course_title'  => $req->course_title,
                'mentor_id'     => $mentor->id,
                'description'   => $req->description,
                'course_type'   => $type->id,
            ]);

            if($req->has('cover')){                
                $images = $req->cover;                
                foreach ($images as $key => $value) {
                    $code = BaseService::generate_number(8);
                    $date = Carbon::now();
                    $remove = array("-", ":"," ");
                    $name = 'COVER_'.str_replace($remove,'',$date->toDateTimeString()).$code.$key.'.'.$value->getClientOriginalExtension();                                                            
                    $path = public_path('CourseCover/'.$course->id);
                    $value->move($path,$name);                    
                    $course->cover = $name;
                    $course->save();
                }
            }else{
                return BaseService::sendError('Cover tidak ada');
            }
            DB::commit();
            $result = Courses::where('id',$course->id)->with('type')->first();
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
        }

        return BaseService::sendSuccess($result,'Sukses Menambahkan Course');
    }

    public function store_material(Request $req){
        DB::beginTransaction();
        try {
            $course = Courses::where('id',$req->course_id)->first();

            $material = CourseMaterials::create([
                'course_id'             => $course->id,
                'material_title'        => $req->material_title,
                'material_description'  => $req->material_description,
                // 'cover'             => $req->material_description,
                'technical'             => $req->technical,
                'link_conf'             => $req->link_conf
            ]); 
            
            if($req->has('cover')){                
                $images = $req->cover;                
                $code = BaseService::generate_number(8);
                $date = Carbon::now();
                $remove = array("-", ":"," ");
                $name = 'COVER_'.str_replace($remove,'',$date->toDateTimeString()).$code.'.'.$images->getClientOriginalExtension();                                                            
                $path = public_path('MaterialCover/'.$material->id);
                $images->move($path,$name);                    
                $material->cover = $name;
                $material->save();
            }else{
                return BaseService::sendError('Cover tidak ada');
            }
            
            DB::commit();
            $result = CourseMaterials::where('id',$material->id)->with('course')->first(); 
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
            
        }
        return BaseService::sendSuccess($result,'Sukses Menambahkan Materi');
    }

    public function store_video(Request $req){
        DB::beginTransaction();
        try {
            $material = CourseMaterials::where('id',$req->material_id)->first();
            $video = VideoCourse::create([
                'title'             => $req->title,
                'caption'           => $req->caption,
                'link'              => $req->link,
                'material_id'       => $material->id,

            ]);
            DB::commit();
        } catch (\Exception $th) {
            DB::rollback();
            return BaseService::sendError($e);
        }
        $result = VideoCourse::where('id',$video->id)->with('material')->first();
        
        return BaseService::sendSuccess($result,'Sukses Menambahkan Video');
    }

    public function store_offline(Request $req){
        DB::beginTransaction();
        try {
            $material = CourseMaterials::where('id',$req->material_id)->first();
            
            $offline = OfflineCourse::create([
                'schedule'          => Carbon::createFromFormat('Y-m-d H:i:s', $req->schedule),
                'location'          => $req->location,
                'material_id'       => $material->id,
                
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return BaseService::sendError($e);
        }
        $result = OfflineCourse::where('id',$offline->id)->with('material')->first();
        return BaseService::sendSuccess($result,'Sukses Menambahkan Jadwal Offline');
    }

}
