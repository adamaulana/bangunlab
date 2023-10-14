<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\SurveyCode;
use App\Libraries\BaseService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use DB;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $req->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ]);

        $user = User::where('email',$req->email)->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return response([                
                'message' => 'incorrect username or password'
            ], 401);
        }

        $token = $user->createToken('apiToken')->plainTextToken;
    
        $res = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json([
            'message'   => 'Login Sukses',
            'data'      => $res
        ]);

    }

    public function register(Request $req){
        $data = $req->validate([
            'email'     => 'required|email:rfc,dns|unique:users,email',
            'name'      => 'required',
            'password'  => 'required|min:8',
            'nik'       => 'required|min:16',
            'address'   => 'required',            
            'level'     => 'required',  
            'phone'     => 'required|min:11',  
        ]);


        DB::beginTransaction();
        try {
            
            $user = User::create([
                'name'      => $data['name'],
                'email'     => $data['email'],
                'password'  => bcrypt($data['password']),
                'nik'       => $data['nik'],
                'address'   => $data['address'],            
                'phone'     => $data['phone'],            
                'level'     => 1,            
                'status'        => 0,
                'verify_code'   => BaseService::generate_number(8)    
            ]);

            $data_email = [
                'user_email' => $user->email, 
                'verif_code' => $user->verify_code, 
            ];

            $survey_code = SurveyCode::create([
                'user_id'       => $user->id,
                'unique_code'   => BaseService::generate_number(5)

            ]);

            $mail = Mail::to($data_email['user_email'])->send(new VerifyEmail($data_email));

            $data = [
                'user'          => $user,
                'survey_code'   => $survey_code,
            ];

            // return "Berhasil kirim email";
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
        
        
        return response()->json([
            'status'  => true,  
            'message' => 'Register Berhasil',
            'data'    => $data
        ]);
    }
    
    public function sendEmail(){
        $mail = Mail::to('almaulanadz@gmail.com')->send(new VerifyEmail());
        return "Berhasil kirim email";
    }

    public function logout(Request $req){
        auth()->user()->tokens()->delete();
        return [
            'message' => 'Berhasil Logout'
        ];
    }

    public function verify(Request $req){
        DB::beginTransaction();
        try {
            $user = auth()->user();
            if($user->verify_code == $req->verif_code){
                $user->verifed_at = Carbon::now();
                $user->save();
            }else{
                return response()->json([
                    'status'    => false,
                    'message'   => 'Code tidak sesuai',                     
                ]);     
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status'    => false,
                'message'   => 'Gagal Memverifikasi Data',
                'error'     => $e                        
            ]);            
        }


        return response()->json([
            'status'    => true,
            'message'   => 'Sukses memverifikasi akun',
            'data'      => $user             
        ]);
    }
}
