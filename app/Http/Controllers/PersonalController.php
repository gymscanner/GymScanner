<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Personal_avatar;
use App\Models\Trainer;
use App\Models\Personal_Membership;
use App\Models\Bank;
use App\Models\Document;
use DB;
use App\Models\Country;

class PersonalController extends Controller
{
    // public function __invoke(User $user)
    //     {
    //         return $user;
    //     }
    public function index(){
        $countryArray = Country::all();

        $avatar = Personal_Avatar::where('user_id',auth()->user()->id)->first();
        $company = Trainer::where('user_id',auth()->user()->id)->first();
        $membership = Personal_Membership::where('user_id',auth()->user()->id)->get();
        $document = Document::where('user_id',auth()->user()->id)->first();

        return view('personal.personal_profile')
        ->with('document', $document)
        ->with('personal_avatar', $avatar)
        ->with('company_data', $company)
        ->with('membership', $membership)
        ->with('country_array',$countryArray);  
    }
    
    public function personal_membership_index(){
        //changed by Nemanja
        $membership = Personal_Membership::where('user_id',auth()->user()->id)->get();
        return view('personal.personal_membership', compact('membership'));
    }

    public function reset(Request $request) {
        $user_id = auth()->user()->id;

        Personal_Avatar::where('user_id',$user_id)->delete();
        Trainer::where('user_id',$user_id)->delete();
        Personal_Membership::where('user_id',$user_id)->delete();
        return back();
    }
    //avatar
    public function avatar(Request $request){

        if(!empty($request->avatar))
        {
            DB::beginTransaction();
        
            try {
                if(@getImageSize($request->avatar)[0] != 300 || @getImageSize($request->avatar)[1] != 300)
                    return back()->with('danger','Image must be in 300px*300px');
                    
                $imageName = time().'.'.$request->avatar->extension();  
                $request->avatar->move(public_path('upload/avatar'), $imageName);
                $path = "upload/avatar/".$imageName;
                $avatar = Personal_avatar::where('user_id',auth()->user()->id)->first();
                if($avatar){
                    $avatar->avatar = $path;
                    $avatar->user_id = auth()->user()->id;
                    $avatar->save();
                }else{
                    $avatar_data = new personal_avatar();
                    $avatar_data->avatar = $path;
                    $avatar_data->user_id = auth()->user()->id;
                    $avatar_data->save();
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();

                throw $e;
            }

            return back()->with('success_img','Profile image has updated');
        }
        else
        {
            return back()->with('danger','Please choose a profile image');
        }
    }
    //company
    public function personal_company(Request $request){
        DB::beginTransaction();
        
        try {
            if(auth()->user()->role!=1){

                $first_notification = DB::table('notifications')
                    ->where('user_id',auth()->user()->id)
                    ->where('name','COMPLETE_PROFILE')
                    ->get();
                    
                if(!empty($first_notification)){

                    $admins = DB::table('users')->where('role', 1)->get();
                    //save into db notifiactions

                    foreach($admins as $key => $v)
                    {

                        DB::table("notifications")->insert([
                        
                            'user_id' => auth()->user()->id,
                            'show_to' => $v->id,
                            'name' => 'UPDATE_PROFILE',
                            'value' => 'has updated profile'
                        
                        ]);

                    }
               
                }
            }

            $company = Trainer::where('user_id', auth()->user()->id)->first();
           
            if($company){
                $company->company_name      =   $request->company_name;
                $company->country           =   $request->country;
                $company->website           =   $request->website;
                $company->email             =   $request->email;
                $company->phone_number_code      =   $request->phone_number_code;
                $company->phone_number_country      =   $request->phone_number_country;
                $company->phone_number      =   $request->phone_number;
                $company->gender            =   $request->gender;
                $company->session           =   $request->session;
                $company->personal_training =   $request->personal_training;
                $company->group_training    =   $request->group_training;
                $company->nutrition         =   $request->nutrition;
                $company->boxing            =   $request->boxing;
                $company->yoga              =   $request->yoga;
                $company->meditation        =   $request->meditation;
                $company->pilates           =   $request->pilates;
                $company->stretching        =   $request->stretching;
                $company->ballet            =   $request->ballet;
                $company->one_training      =   $request->one_training;
                $company->facebook          =   $request->facebook;
                $company->instagram         =   $request->instagram;
                $company->twitter           =   $request->twitter;
                $company->youtube_link      =   $request->youtube_link;
                $company->user_id           =   auth()->user()->id;
                $company->save();
            }else{
                $company_data = new Trainer();
                $company_data->company_name      =   $request->company_name;
                $company_data->country           =   $request->country;
                $company_data->website           =   $request->website;
                $company_data->email             =   $request->email;
                $company_data->phone_number_code      =   $request->phone_number_code;
                $company_data->phone_number_country      =   $request->phone_number_country;            
                $company_data->phone_number      =   $request->phone_number;            
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
                $company_data->user_id           =   auth()->user()->id;
                $company_data->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
	    
        return back()->with('success','Changes saved successfully');
    }
    //membership
    public function personal_membership(Request $request){
        DB::beginTransaction();
        
        try {
            if(auth()->user()->role!=1){

                $first_notification = DB::table('notifications')
                ->where('user_id',auth()->user()->id)
                ->where('name','COMPLETE_PROFILE')
                ->get();

                if(!empty($first_notification)){

                    $admins = DB::table('users')->where('role', 1)->get();
                    //save into db notifiactions

                    // added by Nemanja
                    foreach($admins as $key => $v)
                    {
                        if (@$request->membership_plan_id) {
                            DB::table("notifications")->insert([
                        
                                'user_id' => auth()->user()->id,
                                'show_to' => $v->id,
                                'name' => 'UPDATE_MEMBERSHIP',
                                'value' => 'has updated a membership plan'
                            
                            ]);
                        }else{
                            DB::table("notifications")->insert([
                            
                                'user_id' => auth()->user()->id,
                                'show_to' => $v->id,
                                'name' => 'NEW_MEMBERSHIP',
                                'value' => 'has submitted new membership plan'
                            
                            ]);
                        }
                    }
                }

            }

            $perk = explode(PHP_EOL, $request->perk);
            // added by Nemanja
            if (@$request->membership_plan_id) {
                $membership = Personal_Membership::find($request->membership_plan_id);

                $membership->price      =   $request->price;
                $membership->currency      =   $request->currency;
                $membership->duration   =   $request->duration;
                $membership->service    =   $request->service;
                $membership->perk       =   @json_encode($perk);
                $membership->discount       =   $request->discount;
                if($request->featured == "featured"){
                    $membership->featured    =   $request->featured;
                }else{
                    $membership->featured    = "none";
                }
                if($request->app == "app"){
                    $membership->app    =   $request->app;
                }else{
                    $membership->app    = "computer";
                }
                $membership->user_id    =   auth()->user()->id;

                $membership->update();
            }else{
                $membership = new Personal_Membership;    

                $membership->price      =   $request->price;
                $membership->currency      =   $request->currency;
                $membership->duration   =   $request->duration;
                $membership->service    =   $request->service;
                $membership->perk       =   @json_encode($perk);
                $membership->discount       =   $request->discount;
                if($request->featured == "featured"){
                    $membership->featured    =   $request->featured;
                }else{
                    $membership->featured    = "none";
                }
                if($request->app == "app"){
                    $membership->app    =   $request->app;
                }else{
                    $membership->app    = "computer";
                }
                $membership->user_id    =   auth()->user()->id;

                $membership->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }  

        return back()->with('success','Changes saved successfully');
    }


     public function personal_membership_edit($id){

        $data['membership'] = Personal_Membership::find($id);
        
        return view('personal.personal_membership_edit',$data);
        
    }

    /**
    * get membership plan information
    * @author Nemanja
    * @param membership plan id
    * @since 2021-04-28
    * @return membership plan informations
    */
    public function getPersonal_membership(Request $request)
    {
        $data['membership'] = Personal_Membership::find($request->id);
        $data['plan_id'] = $request->id;

        return response()->json(['status' => "success", 'data' => $data]);
    }

    public function update_personal_membership (Request $request){
        DB::beginTransaction();
        
        try {
            if(auth()->user()->role!=1){

                $first_notification = DB::table('notifications')
                ->where('user_id',auth()->user()->id)
                ->where('name','COMPLETE_PROFILE')
                ->get();

                if(!empty($first_notification)){

                     $admins = DB::table('users')->where('role', 1)->get();
                    //save into db notifiactions

                    foreach($admins as $key => $v)
                    {

                        DB::table("notifications")->insert([
                        
                        'user_id' => auth()->user()->id,
                        'show_to' => $v->id,
                        'name' => 'UPDATE_MEMBERSHIP',
                        'value' => 'has updated a membership plan'
                        
                        ]);

                    }
                    
                }
            
            }

            $perk = explode(PHP_EOL, $request->perk);

            $membership = Personal_Membership::find($request->id);

            $membership->price      =   $request->price;
            $membership->currency   =   $request->currency;
            $membership->duration   =   $request->duration;
            $membership->service    =   $request->service;
            $membership->perk       =   @json_encode($perk);
            $membership->discount   =   $request->discount;
            if($request->featured == "featured"){
                $membership->featured    =   $request->featured;
            }else{
                $membership->featured    = "none";
            }
            if($request->app == "app") {
                $membership->app    =   $request->app;
            }else{
                $membership->app    = "computer";
            }
            $membership->user_id    =   auth()->user()->id;
            $membership->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }  

        return redirect('personal_membership')->with('success','Changes saved successfully');
    }

    public function personal_membership_del($id){
        $membership = Personal_Membership::find($id);
        $membership->delete();
        return back()->with('success','Membership plan has deleted successfully');
    }
    public function bank(){

        $bank = Bank::where('user_id', auth()->user()->id)->get();
        return view('personal.bank')->with('bank', $bank);
    }
    public function bank_update(Request $request){
        DB::beginTransaction();
        
        try {
            $bank = new Bank();
            $bank->bank_name = $request->bank_name;
            $bank->bank_number = $request->bank_number;
            $bank->swift_code = $request->swift_code;
            $bank->holder_name = $request->holder_name;
            $bank->iban = $request->iban;
            $bank->user_id = auth()->user()->id;
            $bank->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
        
        return back()->with('success','Changes saved successfully');
    }
    public function bank_delete($id){

        $bank = Bank::find($id);
        $bank->delete();
        return back()->with('success','Bank account has deleted successfully');
        
    }

    public function change_pass(Request $request) {
        return view('personal.change_password');
    }

    public function my_branding()
    {
        $countryArray = Country::all();

        $data = [

            'youtube' =>  DB::table('brands_social_data')
            ->where('user_id', auth()->user()->id)
            ->where('type','youtube')
            ->get(),

            'certificates' => DB::table('brands_social_data')
            ->where('user_id', auth()->user()->id)
            ->where('type','certificate')
            ->get(),

            'name' => DB::table('brands_social_data')
            ->where('user_id', auth()->user()->id)
            ->where('type','name')
            ->first(),

            'about' => DB::table('brands_info')
            ->where('user_id', auth()->user()->id)
            ->first(),

            'countries' => $countryArray
            
        ];

        return view('vendor.my_branding',$data);
        
    }
}
