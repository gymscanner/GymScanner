<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Models\Company;
use App\Models\User;
use App\Models\Description;
use App\Models\Avatar;
use App\Models\Banner;
use App\Models\Membership;
use App\Models\Trainer;
use App\Models\Document;
use App\Models\Touristpass;
use App\Models\Bbank;
use App\Models\Personal_avatar;

use Hash;
use App\Models\Country;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard() {
        $users = DB::table('users')->orderBy('users.created_at', 'desc')
            ->leftJoin('avatars', 'users.id', '=', 'avatars.user_id')
            ->select('users.id', 'users.name','users.email','users.website','users.role', 'avatars.avatar')
            ->take(3)->get();
        $gym_num = DB::table('users')->where('role', '2')->get();
        $tra_num = DB::table('users')->where('role', '3')->get();
        $touri_num = DB::table('touristpasses')->get();
        $memship_num = DB::table('memberships')->get();

        return view('admin.dash')
            ->with('users', $users)
            ->with('num_tra', count($tra_num))
            ->with('num_touri', count($touri_num))
            ->with('num_memship', count($memship_num))
            ->with('num_gym', count($gym_num));
    }

    public function verify() {
        return view('auth.admin_verify');
    }

    public function send_verification_code() {
        $rand_no = rand(100000, 999999);
        
        // Mail::send([], [], function($message) use($rand_no) {
        //     $message->from('vendors@gymscanner.com', 'GYMSCANNER');
        //     $message->to(auth()->user()->email, auth()->user()->name)->subject('verification code')
		// 	->setBody("<head><meta http-equiv='Content-Language' content='en-us'>
        //            <meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
        //            </head>".$rand_no, 'text/html');;
        // });

        $admin = User::where('id',auth()->user()->id)->first();
        
        $admin->verify_code = $rand_no;
        $admin->save(); 
    }

    public function confirm(Request $request) {
        $inputVal = $request->all();
        $this->validate($request, [
            'verify_code' => 'required',
        ]);

        $admin = User::where('id',auth()->user()->id)->first();

        if($admin->verify_code == $inputVal['verify_code']) {
            // Session::put('admin_verify', $admin->verify_code);
            Session::put('admin_verify', true);
            return redirect()->route('admin');
        } else{
            return redirect()->route('login')
                ->with('message','Verification code are incorrect.');
        }    

    }

    public function users() {
        $users = User::all();
        return view('admin.user_table')
        ->with('users', $users);
    }

    public function change_pass($id) {
        return view('admin.change_password')
        ->with('user_id', $id);
    }

    public function save_pass(Request $request) {
        $user = User::where('id',$request["id"])->first();
        $data = $request->all();
        
        $user->fill([
            'password' => Hash::make($request["newPass"])
            ])->save();

        $sen['res'] = true;
        return json_encode( $sen );
    }

    public function handleAdmin(){
        
        $company = Company::all();
        // $description = Description::all();
        
        return view('admin.index')
        ->with('company', $company);
        // ->with('description', $description);
    }

    public function edit($id) {
        $countryArray = Country::all();

        $users = User::where('id',$id)->first();
        if($users->role==2) {
            $avatar = Avatar::where('user_id', $id)->first();
        }else{
            $avatar = Personal_avatar::where('user_id', $id)->first();
        }
        
        $company = Company::where('user_id',$id)->first();
        $trainer = Trainer::where('user_id',$id)->first();
        $document = Document::where('user_id',$id)->first();
        $membership = Membership::where('user_id',$id)->get();
        $banner = Banner::where('user_id',$id)->get();

        if($users->role==2) {
            return view('admin.gym_edit')
            ->with('users', $users)
            ->with('document', $document)
            ->with('company_data', $company)
            ->with('membership', $membership)
            ->with('banner', $banner)
            ->with('avatar', $avatar)
            ->with('country_array',$countryArray);
        } else {
            return view('admin.user_edit')
            ->with('users', $users)
            ->with('personal_avatar', $avatar)
            ->with('trainer_data', $trainer)
            ->with('membership', $membership)
            ->with('country_array',$countryArray); 
        }
    }

    public function gym_destroy($id) {
        $company = Company::where('user_id', $id)->first();
        $user = User::find($id);
        if($company!=null)$company->delete();
        $user->delete();
        return back();
    }

    public function destroy($id) {
        $trainer = Trainer::where('user_id', $id)->first();
        $user = User::find($id);
        if($trainer!=null)$trainer->delete();
        $user->delete();
        return back();
    }

    public function update_personal(Request $request){
        DB::beginTransaction();

        try {
            $user = User::find($request->user_id);
            $company = Trainer::where('user_id', $request->user_id)->first();
            
            $user->name      = $request->first_name;
            $user->last_name = $request->last_name;
            $user->save();

            if($company) {
                $company->company_name      =   $request->company_name;
                $company->country           =   $request->country;
                $company->website           =   $request->website;
                $company->email             =   $request->email;
                $company->phone_number_code  =   $request->phone_number_code;
                $company->phone_number_country      =   $request->phone_number_country;            
                $company->phone_number  =   $request->phone_number;
                $company->gender            =   $request->gender;
                $company->session           =   $request->session;
                $company->personal_training =   $request->personal_training;
                $company->group_training    =   $request->group_training;
                $company->nutrition         =   $request->nutrition;
                $company->one_training      =   $request->one_training;
                $company->boxing            =   $request->boxing;
                $company->yoga              =   $request->yoga;
                $company->meditation        =   $request->meditation;
                $company->pilates           =   $request->pilates;
                $company->stretching        =   $request->stretching;
                $company->ballet            =   $request->ballet;
                $company->facebook          =   $request->facebook;
                $company->instagram         =   $request->instagram;
                $company->twitter           =   $request->twitter;
                $company->youtube_link      =   $request->youtube_link;
                $company->user_id           =   $request->user_id;
                $company->save();
            }else{
                $company_data = new Trainer();
                $company_data->company_name      =   $request->company_name;
                $company_data->country           =   $request->country;
                $company_data->website           =   $request->website;
                $company_data->email             =   $request->email;
                $company_data->phone_number_code  =   $request->phone_number_code;
                $company_data->phone_number_country      =   $request->phone_number_country;            
                $company_data->phone_number  =   $request->phone_number;
                $company_data->gender            =   $request->gender;
                $company_data->session           =  $request->session;
                $company_data->personal_training =  $request->personal_training;
                $company_data->group_training    =  $request->group_training;
                $company_data->nutrition         =  $request->nutrition;
                $company_data->one_training      =  $request->one_training;
                $company_data->boxing            =   $request->boxing;
                $company_data->yoga              =   $request->yoga;
                $company_data->meditation        =   $request->meditation;
                $company_data->pilates           =   $request->pilates;
                $company_data->stretching        =   $request->stretching;
                $company_data->ballet            =   $request->ballet;
                $company_data->facebook          =  $request->facebook;
                $company_data->instagram         =  $request->instagram;
                $company_data->twitter           =  $request->twitter;
                $company_data->youtube_link      =   $request->youtube_link;
                $company_data->user_id           =   $request->user_id;
                $company_data->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }

        return back()->with('success','Changes saved successfully');
    }

    public function update_gym(Request $request) {
        DB::beginTransaction();

        try {
            if($request->hasfile('file')) {
                
                $image = $request->file('file');
                if(getImageSize($image)[0] != 1280 || getImageSize($image)[1] != 780)
                    return response()->json(['error' => 'Error msg'], 404); // Status code here

                    
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('upload'), $imageName);
        
                $imageUpload = new Banner();
                $imageUpload->image_path = $imageName;
                $imageUpload->user_id = $request->user_id;
                $imageUpload->save();
            } 

            $company = Company::where('user_id', $request->user_id)->first();
            $user = User::find($request->user_id);

            $user->name      = $request->first_name;
            $user->last_name = $request->last_name;
            $user->save();
            
            if($request->all_check =="all") {

                    $mon_from   =   "0";
                    $mon_to     =   "24";

                    $tue_from   =   "0";
                    $tue_to     =   "24";
               
                    $wed_from   =   "0";
                    $wed_to     =   "24";
                
                    $thu_from   =   "0";
                    $thu_to     =   "24";
                
                    $fri_from   =   "0";
                    $fri_to     =   "24";
                
                    $sat_from   =   "0";
                    $sat_to     =   "24";
                
                    $sun_from   =   "0";
                    $sun_to     =   "24";

                    $week_date   =   array("Monday","Tuesday","Wednesday", "Thursday","Friday","Saturday","Sunday");
            }else if($request->has('week_date')){
                if(in_array('Monday',$request->week_date)){
                    $mon_from = $request->mon_from;
                    $mon_to =   $request->mon_to;
                }else{
                    $mon_from   =   "from";
                    $mon_to     =   "to";
                }
                if(in_array('Tuesday',$request->week_date)){
                    $tue_from = $request->tue_from;
                    $tue_to =   $request->tue_to;
                }else{
                    $tue_from   =   "from";
                    $tue_to     =   "to";
                }
                if(in_array('Wednesday',$request->week_date)){
                    $wed_from = $request->wed_from;
                    $wed_to =   $request->wed_to;
                }else{
                    $wed_from   =   "from";
                    $wed_to     =   "to";
                }
                if(in_array('Thursday',$request->week_date)){
                    $thu_from = $request->thu_from;
                    $thu_to =   $request->thu_to;
                }else{
                    $thu_from   =   "from";
                    $thu_to     =   "to";
                }
                if(in_array('Friday',$request->week_date)){
                    $fri_from = $request->fri_from;
                    $fri_to =   $request->fri_to;
                }else{
                    $fri_from   =   "from";
                    $fri_to     =   "to";
                }
                if(in_array('Saturday',$request->week_date)){
                    $sat_from = $request->sat_from;
                    $sat_to =   $request->sat_to;
                }else{
                    $sat_from   =   "from";
                    $sat_to     =   "to";
                }
                if(in_array('Sunday',$request->week_date)){
                    $sun_from = $request->sun_from;
                    $sun_to =   $request->sun_to;
                }else{
                    $sun_from   =   "from";
                    $sun_to     =   "to";
                }
            } else {
                
                $mon_from   =   "from";
                $mon_to     =   "to";

                $tue_from   =   "from";
                $tue_to     =   "to";
           
                $wed_from   =   "from";
                $wed_to     =   "to";
            
                $thu_from   =   "from";
                $thu_to     =   "to";
            
                $fri_from   =   "from";
                $fri_to     =   "to";
            
                $sat_from   =   "from";
                $sat_to     =   "to";
            
                $sun_from   =   "from";
                $sun_to     =   "to";
            }
            if($company){
                $company->company_name  =   $request->company_name;
                $company->address       =   $request->address;
                $company->country       =   $request->country;
                $company->website       =   $request->website;
                $company->email         =   $request->email;
                $company_data->phone_number_code  =   $request->phone_number_code;
                $company_data->phone_number_country      =   $request->phone_number_country;            
                $company_data->phone_number  =   $request->phone_number;
                $company->contact       =   $request->about;
                $company->message       =   $request->message;
                $company->Bodybuilding  = $request->Bodybuilding;
                $company->Bootcamp      = $request->Bootcamp;
                $company->EMS           = $request->EMS;
                $company->Gym           = $request->Gym;
                $company->Gymnastics    = $request->Gymnastics;
                $company->KickBoxing    = $request->KickBoxing;
                $company->MartialArts   = $request->MartialArts;
                $company->PersonalFitness    = $request->PersonalFitness;
                $company->Spinning      =   $request->Spinning;
                $company->weightlift    =   $request->weightlift;
                $company->yoga          =   $request->yoga;
                $company->pilates       =   $request->pilates;
                $company->mma           =   $request->mma;
                $company->boxing        =   $request->boxing;
                $company->karate        =   $request->karate;
                $company->crosstraing   =   $request->crosstraing;
                
                if($request->all_check){
                    $company->week_date     =   json_encode($week_date);
                }else if($request->has('week_date')){
                    $company->week_date     =   json_encode($request->week_date);
                } else {    
                   @$company->week_date     =    json_encode([""]);
                }
                $company->mon_from      =   $mon_from;
                $company->mon_to        =   $mon_to;
                $company->tue_from      =   $tue_from;
                $company->tue_to        =   $tue_to;
                $company->wed_from      =   $wed_from;
                $company->wed_to        =   $wed_to;
                $company->thu_from      =   $thu_from;
                $company->thu_to        =   $thu_to;
                $company->fri_from      =   $fri_from;
                $company->fri_to        =   $fri_to;
                $company->sat_from      =   $sat_from;
                $company->sat_to        =   $sat_to;
                $company->sun_from      =   $sun_from;
                $company->sun_to        =   $sun_to;
                $company->youtube       =   $request->youtube;
                $company->all_check     =   $request->all_check;
                $company->user_id       =   $request->user_id;
                $company->save();
            }else{
                $company_data = new Company();
                $company_data->company_name  = $request->company_name;
                $company_data->address       = $request->address;
                $company_data->country       = $request->country;
                $company_data->website       = $request->website;
                $company_data->email         = $request->email;
                $company_data->phone_number_code  =   $request->phone_number_code;
                $company_data->phone_number_country      =   $request->phone_number_country;            
                $company_data->phone_number  =   $request->phone_number;
                $company_data->contact       = $request->about;
                $company_data->message       = $request->message;
                $company_data->Bodybuilding  = $request->Bodybuilding;
                $company_data->Bootcamp      = $request->Bootcamp;
                $company_data->EMS           = $request->EMS;
                $company_data->Gym           = $request->Gym;
                $company_data->Gymnastics    = $request->Gymnastics;
                $company_data->KickBoxing    = $request->KickBoxing;
                $company_data->MartialArts   = $request->MartialArts;
                $company_data->PersonalFitness    = $request->PersonalFitness;
                $company_data->Spinning      =   $request->Spinning;
                $company_data->weightlift    =   $request->weightlift;
                $company_data->yoga          =   $request->yoga;
                $company_data->pilates       =   $request->pilates;
                $company_data->mma           =   $request->mma;
                $company_data->boxing        =   $request->boxing;
                $company_data->karate        =   $request->karate;
                $company_data->crosstraing   =   $request->crosstraing;
                if($request->all_check){
                    $company_data->week_date     =   json_encode($week_date);
                }else if($request->has('week_date')){
                    $company->week_date     =   json_encode($request->week_date);
                } else {    
                    @$company->week_date     =    json_encode([""]);
                }
                $company_data->mon_from      =   $mon_from;
                $company_data->mon_to        =   $mon_to;
                $company_data->tue_from      =   $tue_from;
                $company_data->tue_to        =   $tue_to;
                $company_data->wed_from      =   $wed_from;
                $company_data->wed_to        =   $wed_to;
                $company_data->thu_from      =   $thu_from;
                $company_data->thu_to        =   $thu_to;
                $company_data->fri_from      =   $fri_from;
                $company_data->fri_to        =   $fri_to;
                $company_data->sat_from      =   $sat_from;
                $company_data->sat_to        =   $sat_to;
                $company_data->sun_from      =   $sun_from;
                $company_data->sun_to        =   $sun_to;
                $company_data->youtube       =   $request->youtube;
                $company_data->all_check     =   $request->all_check;
                $company_data->user_id       = $request->user_id;
                $company_data->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }  
            
        return back()->with('success','Changes saved successfully');
    }

    public function membership() {
        $users = User::all();
        return view('admin.membership.membership_table')
            ->with('users', $users);
    }

    public function membership_edit($id){
        $membership = Membership::where('user_id',$id)->get();
        return view('admin.membership.membership_edit', ['membership'=>$membership, 'id'=>$id]);
    }

    public function update_membership(Request $request) {
        DB::beginTransaction();
        try {
            $membership = new Membership;
            
            $membership->user_id    =   $request->userid;
            $membership->price      =   $request->price;
            $membership->duration   =   $request->duration;
            $membership->service    =   $request->service;
            $membership->perk       =   $request->perk;
            if($request->app == "app") {
                $membership->app    =   $request->app;
            }else{
                $membership->app    = "computer";
            }
            $membership->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
            
        return back();
    }

    public function membership_delete($id){
        $membership = Membership::find($id);
        $membership->delete();
        return back();
    }

    public function document() {
        $users = User::all();
        return view('admin.document.document_table')
        ->with('users', $users);
    }

    public function document_edit($id) {
        return view('admin.document.document_edit')->with('id', $id);
    }

    
    public function update_document(Request $request) {
        DB::beginTransaction();

        try {
            if($request->hasfile('file')) {
                
                $document = $request->file('file');
                    
                $documentName = $document->getClientOriginalName();
                $document->move(public_path('upload/documents'), $documentName);
                $doc = Document::where('user_id', $request->userid);
                $doc->delete();
                
                $document_data = new Document();
                $document_data->user_id = $request->userid;
                $document_data->document_path = $documentName;
                $document_data->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }

        return back();
    }

    public function tourist() {
        $users = User::where('role','2')->get();
        return view('admin.tourist.tourist_table')
        ->with('users', $users);
    }

    public function tourist_edit($id) {
        $touristpass = Touristpass::where('user_id',$id)->get();
        return view('admin.tourist.tourist_edit', ['touristpass'=>$touristpass, 'id'=>$id]);
    }

    public function update_tourist(Request $request){
        DB::beginTransaction();

        try {
            $membership = new Touristpass;
            $membership->price      =   $request->price;
            $membership->duration   =   $request->duration;
            $membership->facility    =   $request->facility;
            $membership->user_id    =   $request->userid;
            $membership->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
            
        return back();
    }

    public function tourist_delete($id) {
        $tourstpass = Touristpass::find($id);
        $tourstpass->delete();
        return back();
    }

    public function bank() {
        $users = User::all();
        return view('admin.bank.bank_table')
        ->with('users', $users);
    }

    public function bank_edit($id) {
        $bank = Bbank::where('user_id', $id)->get();
        return view('admin.bank.bank_edit', ['bank' => $bank, 'id'=>$id]);
    }

    public function update_bank(Request $request){
        DB::beginTransaction();

        try {
            $bank = new Bbank();
            $bank->bank_name = $request->bank_name;
            $bank->bank_number = $request->bank_number;
            $bank->swift_code = $request->swift_code;
            $bank->holder_name = $request->holder_name;
            $bank->iban = $request->iban;
            $bank->user_id = $request->userid;
            $bank->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
            
        return back();
    }

    public function bank_delete($id){
        $bank = Bbank::find($id);
        $bank->delete();
        return back();
    }


    public function user_view($id) {

        $users = User::where('id',$id)->first();
        $avatar = Avatar::where('user_id',$id)->first();
        $company = Company::where('user_id',$id)->first();
        $membership = Membership::where('user_id',$id)->get();
        $banner = Banner::where('user_id',$id)->get();
        $document = Document::where('user_id',$id)->first();

        return view('admin.user_view')
        ->with('avatar', $avatar)
        ->with('document', $document)
        ->with('company_data', $company)
        ->with('membership', $membership)
        ->with('banner', $banner)
        ->with('users', $users);

    }



    public function user_personal_view($id) {


        $users = User::where('id',$id)->first();
        $avatar = Personal_Avatar::where('user_id',$id)->first();
        $company = Trainer::where('user_id',$id)->first();
        $membership = Membership::where('user_id',$id)->get();
        $banner = Banner::where('user_id',$id)->get();
        $document = Document::where('user_id',$id)->first();

        return view('admin.user_view')
        ->with('avatar', $avatar)
        ->with('document', $document)
        ->with('company_data', $company)
        ->with('membership', $membership)
        ->with('banner', $banner)
        ->with('users', $users);        


    }



}
