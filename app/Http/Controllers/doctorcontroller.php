<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
class doctorcontroller extends Controller
{
    

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function store(Request $request){
        
        $name=$request->input('name');
        $email=$request->input('email');
        $mobile=$request->input('mobile');
        $password=$request->input('password');     
        DB::unprepared("insert into users (email, mobile,name, password) values
         ('$email','$mobile','$name','$password')");  
         return redirect('/login');
               }

    public function login(Request $request){
        $email=$request->input('email');
        $password=$request->input('password');
        $records = DB::select('select * from users where email = ?',[$email]);
        foreach($records as $record){
            if(($record->password)==$password){
                Session::put('user',$record->email);
                return redirect('/doctor_list');
            }
            else{
                
            return redirect('/login');
            }
          
        }

    }
    public function register(Request $request){
        
        $name=$request->input('name');
        $email=$request->input('email');
        $mobile=$request->input('mobile');
        $degree=$request->input('degree'); 
        $field=$request->input('specilization');     
        DB::unprepared("insert into doctor (degree,email,field, mobile,name) values
         ('$degree','$email','$field','$mobile','$name')");  
         return redirect('/AdminDashboard');
               }
               public function contact(Request $request){
                $name=$request->input('name');
                $email=$request->input('email');
                $message=$request->input('message');
                DB::unprepared("insert into contact (email, message,name) values
                ('$email','$message','$name')");
                return redirect('/Contact');
            }

            public function reshedule(){
                if(Session::has('user')){     
                    return view("/reschedule");
                }
                else{
                    return view("/login");
                }
            }
            public function doctor_list(){
                if(Session::has('user')){     
                    return view("/doctor_list");
                }
                else{
                    return view("/login");
                }
            }


            public function appointment(Request $request){
                $name=$request->input('name');
                $email=$request->input('email');
                $mobile=$request->input('mobile');
                $date=$request->input('date');
                $time=$request->input('time');
                $price=$request->input('price');
                $appfor=$request->input('appointmentfor');
                DB::unprepared("insert into appointment (appfor, date,email, mobile ,name,price,time) values
                ('$appfor','$date','$email','$mobile','$name','$price','$time')");
                return redirect('/make_appointments');
            }
            public function destroy($id){
                DB::unprepared("delete from appointment where id = '$id'");
                return redirect('/reschedule');
            }
            
            public function destroy_doc($id){
                DB::unprepared("delete from doctor where id = '$id'");
                return redirect('/del_doc');
            }           
            public function update($id){
                $appointment=DB::select("select  * from appointment where id=?",[$id]);
                return view('Update_appointments',['appointment'=>$appointment]);
            }
            public function read(Request $request){
                $appointments = DB::select("select * from appointment");
             return view('Update_appointments', ['appointments' => $appointments]);
            }
            public function update1(Request $request, $id){
                $name=$request->input('name');
                $email=$request->input('email');
                $mobile=$request->input('mobile');
                $date=$request->input('date');
                $time=$request->input('time');
                $price=$request->input('price');
                $appfor=$request->input('appointmentfor');
                DB::unprepared("update appointment set appfor='$appfor',date='$date',email='$email', 
                mobile='$mobile' ,name='$name',price='$price',time='$time' where id='$id'"); 
                return redirect('/reschedule');                   
            }
            public function update2($id){
                $doctor=DB::select("select  * from doctor where id=?",[$id]);
                return view('doc_update',['doctor'=>$doctor]);
            }
            public function read1(Request $request){
                $doctor = DB::select("select * from doctor");
             return view('doc_update', ['doctor' => $doctor]);
            }
            public function doctor_update(Request $request, $id){
                $name=$request->input('name');
                $email=$request->input('email');
                $mobile=$request->input('mobile');
                $degree=$request->input('degree'); 
                $field=$request->input('specilization');     
                DB::unprepared("update doctor set name='$name',email='$email', mobile='$mobile' ,
                degree='$degree',field='$field' where id='$id'"); 
                return redirect('/del_doc');                   
            }
            public function xmlhttprequest(){
                $searchTerm = request('search'); 
                if (strlen($searchTerm) > 0){
                    $searchResults = DB::select(DB::raw("select name from doctor where name like '$searchTerm%'")
                ); 
                return response($searchResults); 
          }
        }
        function logout(){
            if(Session::has('user')){
                Session::flush();
            }
            return redirect('/homepage');
        }
}