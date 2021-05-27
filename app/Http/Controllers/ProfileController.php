<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Hash;
use DB;
use Session;

use App\Mail\SendSignupMail;
use App\Mail\ContactUsMail;
use App\Mail\NotificationMail;
use App\Models\User;
use App\Models\Avatar;
use App\Models\Personal_avatar;
use App\Models\Company;
use App\Models\Banner;
use App\Models\Membership;
use Illuminate\Http\Response;
use App\Models\Personal_Membership;
use App\Models\Bbank;
use App\Models\Touristpass;
use App\Models\Document;
use App\Models\Trainer;
use App\Models\Bank;
use App\Models\Brandsocialdata;
use App\Models\Country;

class ProfileController extends Controller
{
    // public function __invoke(User $user)
    //     {
    //         dd("check log(arg)");
    //         return $user;
    //     }

    public static function getNotifications()
    {
        $notifications = DB::table('notifications')
            ->join('users', 'users.id', '=', 'notifications.user_id')
            ->select('notifications.*','users.name as username','users.external_id as ext_id','users.role')
            ->orderBy('notifications.id', 'DESC')
            ->where('notifications.show_to',auth()->user()->id)
            ->where('notifications.is_active',1)
            ->get();

            return $notifications;
    }

    public function contact_us()
    {
        return view('vendor.contact_us');
    }

    public function contact_us_mail(Request $request)
    {
        
        if($request->hasfile('file')) {
            
            $image = $request->file('file');
            // if(getImageSize($image)[0] != 1280 || getImageSize($image)[1] != 780)
            //     return response()->json(['error' => 'Error msg'], 404); // Status code here

                
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('upload'), $imageName);
    
            // $imageUpload = new Banner();
            // $imageUpload->image_path = $imageName;
            // $imageUpload->user_id = auth()->user()->id;
            // $imageUpload->save();
            $data["attachments"] = public_path('upload')."/".$imageName;
        } 
        // dd(public_path('upload')."/".$imageName);
        $data["to"]      = "vendors@gymscanner.com";
        $data["message"] = $request->message;
        $data["type"]    = $request->type;
        $data["subject"] = $request->subject;
        
        Mail::to($data['to'])->send(new ContactUsMail($data));
        Session::put('success',"Email sent successfully.");
        return redirect()->route('profile.contact_us');
    }

    public static function getAvatar()
    {
        if(auth()->user()->role==3)
        {
            
            $avatar = Personal_Avatar::where('user_id',auth()->user()->id)->first();

        }
        elseif(auth()->user()->role==2)
        {

            $avatar = Avatar::where('user_id',auth()->user()->id)->first();

        }
        else
        {
            $avatar = '';
        }

            return $avatar;
    }

    public function index() {
        $data = array('name'=>"Virat Gandhi");
        
        $countryArray = Country::all();

        $avatar = Avatar::where('user_id',auth()->user()->id)->first();
        $company = Company::where('user_id',auth()->user()->id)->first();
        $membership = Membership::where('user_id',auth()->user()->id)->get();
        $banner = Banner::where('user_id',auth()->user()->id)->get();
        $document = Document::where('user_id',auth()->user()->id)->first();

        return view('user.myprofile')
        ->with('avatar', $avatar)
        ->with('document', $document)
        ->with('company_data', $company)
        ->with('membership', $membership)
        ->with('banner', $banner)
        ->with('country_array',$countryArray);
    }

    public function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function membership_index(){
        $membership = Membership::where('user_id',auth()->user()->id)->get();

        return view('user.membership')->with('membership', $membership);
    }

    public function send_email( $text, $subject ) {

        Mail::send([], [], function($message) use($text, $subject) {
            $message->from('vendors@gymscanner.com', 'GYMSCANNER');
            $message->to(auth()->user()->email,auth()->user()->name)->subject($subject)
			->setBody("<head><meta http-equiv='Content-Language' content='en-us'>
                   <meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
                   </head>".$text, 'text/html');;
        });
    }
    //avatar
    public function avatar(Request $request){

        if(!empty($request->avatar))
        {
            DB::beginTransaction();
        
            try {
                if(getImageSize($request->avatar)[0] != 300 || getImageSize($request->avatar)[1] != 300)
                    return back()->with('danger','Image must be in 300px*300px');

                $imageName = time().'.'.$request->avatar->extension();
                $request->avatar->move(public_path('upload/avatar'), $imageName);
                $path = "upload/avatar/".$imageName;
                $avatar = Avatar::where('user_id',auth()->user()->id)->first();
                if($avatar){
                    $avatar->avatar = $path;
                    $avatar->user_id = auth()->user()->id;
                    $avatar->save();
                }else{
                    $avatar_data = new Avatar();
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
    public function reset(Request $request) {
        $user_id = auth()->user()->id;
        
        Avatar::where('user_id',$user_id)->delete();
        Company::where('user_id',$user_id)->delete();
        Membership::where('user_id',$user_id)->delete();
        Banner::where('user_id',$user_id)->delete();
        return back();

    }

    //company
    public function company(Request $request) {
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

            if($request->hasfile('file')) {
                
                $image = $request->file('file');
                if(getImageSize($image)[0] != 1280 || getImageSize($image)[1] != 780)
                    return response()->json(['error' => 'Error msg'], 404); // Status code here

                    
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('upload'), $imageName);
        
                $imageUpload = new Banner();
                $imageUpload->image_path = $imageName;
                $imageUpload->user_id = auth()->user()->id;
                $imageUpload->save();
            } 

            $company = Company::where('user_id', auth()->user()->id)->first();

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
            }
            else {
                
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
                $company->phone_number_code  =   $request->phone_number_code;
                $company->phone_number_country      =   $request->phone_number_country;            
                $company->phone_number  =   $request->phone_number;
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
                    @$company->week_date     =   json_encode($week_date);
                }else if($request->has('week_date')){
                    @$company->week_date     =   json_encode($request->week_date);
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
                $company->facebook      =   $request->facebook;
                $company->twitter       =   $request->twitter;
                $company->instagram     =   $request->instagram;
                $company->youtube       =   $request->youtube;
                $company->all_check     =   $request->all_check;
                $company->user_id       =   auth()->user()->id;
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
                $company_data->phone_number  = $request->phone_number;            
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
                    @$company_data->week_date     =   json_encode($week_date);
                }else if($request->has('week_date')){
                    @$company->week_date     =   json_encode($request->week_date);
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
                $company_data->facebook      =   $request->facebook;
                $company_data->twitter       =   $request->twitter;
                $company_data->instagram     =   $request->instagram;
                $company_data->youtube       =   $request->youtube;
                $company_data->all_check     =   $request->all_check;
                $company_data->user_id       =   auth()->user()->id;
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
    public function membership(Request $request){
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
                $membership = Membership::find($request->membership_plan_id);

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
                $membership = new Membership;    

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

        return back()->with('success','Changes saved successfully');;
    }

    public function membership_edit($id){

        $data['membership'] = Membership::find($id);
        
        return view('user.membership_edit',$data);
        
    }

    /**
    * get membership plan information
    * @author Nemanja
    * @param membership plan id
    * @since 2021-05-04
    * @return membership plan informations
    */
    public function getGym_membership(Request $request)
    {
        $data['membership'] = Membership::find($request->id);
        $data['plan_id'] = $request->id;

        return response()->json(['status' => "success", 'data' => $data]);
    }

    public function membership_update(Request $request){
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

            $membership = Membership::find($request->id);

            $membership->price      =   $request->price;
            $membership->duration   =   $request->duration;
            $membership->service    =   $request->service;
            $membership->perk       =   $request->perk;
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

        return redirect('profile/membership_update')->with('success','Changes saved successfully');
    }

    public function membership_del($id){
        $membership = Membership::find($id);
        $membership->delete();
        return back()->with('success','Membership plan has deleted successfully');
    }

    public function touristpass_save(Request $request){
        DB::beginTransaction();
        
        try {
            $membership = new Touristpass;
            $membership->price      =   $request->price . $request->currency;
            $membership->duration   =   $request->duration;
            $membership->facility    =   $request->facility;
            $membership->user_id    =   auth()->user()->id;
            $membership->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }

        return back()->with('success','Changes saved successfully');
    }
    
    public function touristpass() {
        $touristpass = Touristpass::where('user_id',auth()->user()->id)->get();
        return view('user.touristpass')->with('touristpass', $touristpass);
    }



    public function touristpass_delete($id) {
        $tourstpass = Touristpass::find($id);
        $tourstpass->delete();
        return back()->with('success','Tourist pass has deleted successfully');
    }

    public function upload_document(Request $request) {
        DB::beginTransaction();
        
        try {
            if($request->hasfile('file')) {
                
                $document = $request->file('file');
                    
                $documentName = $document->getClientOriginalName();
                $document->move(public_path('upload/documents'), $documentName);
                $doc = Document::where('user_id', auth()->user()->id);
                $doc->delete();
                
                $document_data = new Document();
                $document_data->user_id = auth()->user()->id;
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

    public function document_delete(Request $request)
    {
        $filename = $request->get('filename');
        Document::where('document_path', $filename)->delete();
        $path = public_path() . '/upload/documents/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }

    public function document() {
    	$document = Document::where('user_id', auth()->user()->id)->first();
   
        return view('user.document')->with('document', $document);
    }

    //image banner
    public function banner(Request $request){
        DB::beginTransaction();
        
        try {
            $imageName = time().'.'.$request->image_name->extension();  
            $request->image_name->move(public_path('upload/banner'), $imageName);
            $path = "upload/banner/".$imageName;

            $banner_data = new Banner();
            $banner_data->user_id = auth()->user()->id;
            $banner_data->image_path  =     $path;
            $banner_data->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }

        return back();
    }

    public function banner_del($id){
        $banner = Banner::find($id);
        $banner->delete();
        return back();
    }
    //bank
    public function bank(){
        $bank = Bbank::where('user_id', auth()->user()->id)->get();
        return view('user.bank')->with('bank', $bank);
    }

    public function bank_update(Request $request){
        DB::beginTransaction();
        
        try {
            $bank = new Bbank();
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
        $bank = Bbank::find($id);
        $bank->delete();
        return back()->with('success','Bank has deleted successfully');
    }
    
    public function change_pass(Request $request) {
        return view('user.change_password');
    }

    public function save_pass(Request $request) {
        $user = User::where('id',auth()->user()->id)->first();
        $data = $request->all();
        
        if (Hash::check($request["currentPass"], $user->password)) { 
            $user->fill([
             'password' => Hash::make($request["newPass"])
             ])->save();

            $sen['res'] = true;
            $this->send_email("<h4>Dear Vendor,<br/><br/>
            You have successfully changed your password on your Gymscanner vendor dashboard on ".date("Y-m-d").".<br/><br/>
            No further action is required on your behalf.<br/><br/>
            If you believe you have not authorized this change, please contact us at admin@gymscanner.com<br/><br/>
            With best regards,<br/><br/>
            Gymscanner.com</h4>", "Password changed!");
         } else {
            $sen['res'] = false;
         }
         return json_encode( $sen );
    }

    public function submit_admin() {
        if (auth()->user()->role == 2) {
            $membership = Membership::where('user_id',auth()->user()->id)->get();
            $touristpass = Touristpass::where('user_id',auth()->user()->id)->get();
            $document = Document::where('user_id',auth()->user()->id)->get();
            $bank = Bbank::where('user_id',auth()->user()->id)->get();
            $company = Company::where('user_id',auth()->user()->id)->get();
            
            return view('user.submit_admin', ['membership' => count($membership), 
                                              'touristpass'=>count($touristpass), 
                                              'document'=>count($document),
                                              'bank'=>count($bank),
                                              'profile'=>count($company)
                                              ]);
        }
        elseif (auth()->user()->role = 3) {
            $membership = Personal_membership::where('user_id',auth()->user()->id)->get();
            $bank = Bank::where('user_id',auth()->user()->id)->get();
            $document = Document::where('user_id',auth()->user()->id)->get();
            $trainer = Trainer::where('user_id',auth()->user()->id)->get();
            
            return view('user.submit_admin',   ['membership' => count($membership),
                                                'document'=>count($document),
                                                'bank'=>count($bank),
                                                'profile'=>count($trainer)
                                                ]);
        }
    }

    public function send_notification_admin() {
        DB::beginTransaction();
        
        try {
            $admins = DB::table('users')->where('role', 1)->get();
            //save into db notifiactions

            foreach($admins as $key => $v)
            {
                DB::table("notifications")->insert([
                    'user_id' => auth()->user()->id,
                    'show_to' => $v->id,
                    'name' => 'COMPLETE_PROFILE',
                    'value' => 'has completed profile'
                ]);
            }

            DB::table("notifications")->insert([
                'user_id' => auth()->user()->id,
                'show_to' => auth()->user()->id,
                'name' => 'COMPLETE_PROFILE',
                'value' => 'Your request was successfully submitted'
            ]);

            $countr = [
                
                'ax' => 'Aaland Islands',
                'af' => 'Afghanistan',
                'al' => 'Albania',
                'dz' => 'Algeria',
                'as' => 'American Samoa',
                'ad' => 'Andorra',
                'ao' => 'Angola',
                'ai'=> 'Anguilla',                       
                'aq'=> 'Antarctica',                         
                'ag'=> 'Antigua and Barbuda',
                'ar'=> 'Argentina',                         
                'am'=> 'Armenia',                      
                'aw'=> 'Aruba',                      
                'au'=> 'Australia',
                'at'=> 'Austria',                      
                'az'=> 'Azerbaijan',
                'bs'=> 'Bahamas, The',
                'bh'=> 'Bahrain',  
                'bd'=> 'Bangladesh',                         
                'bb'=> 'Barbados',                         
                'by'=> 'Belarus',                         
                'be'=> 'Belgium',                         
                'bz'=> 'Belize',                         
                'bj'=> 'Benin',                         
                'bm'=> 'Bermuda',                         
                'bt'=> 'Bhutan',                         
                'bo'=> 'Bolivia',                         
                'bq'=> 'Bonaire, Sint Eustatius and Saba',                         
                'ba'=> 'Bosnia and Herzegovina',                         
                'bw'=> 'Botswana',                         
                'bv'=> 'Bouvet Island ',                        
                'br'=> 'Brazil',                         
                'io'=> 'British Indian Ocean Territory',                         
                'vg'=> 'British Virgin Islands',                         
                'bn'=> 'Brunei',                         
                'bg'=> 'Bulgaria',                         
                'bf'=> 'Burkina Faso',                       
                'bi'=> 'Burundi',                         
                'kh'=> 'Cambodia',                         
                'cm'=> 'Cameroon',                         
                'ca'=> 'Canada',                         
                'ic'=> 'Canary Islands',                         
                'cv'=> 'Cape Verde',                         
                'ky'=> 'Cayman Islands',                         
                'cf'=> 'Central African Republic',                         
                'td'=> 'Chad',                         
                'cl'=> 'Chile',                         
                'cn'=> 'China',                         
                'cx'=> 'Christmas Island',                         
                'cc'=> 'Cocos (Keeling) Islands',                         
                'co'=> 'Colombia',                         
                'km'=> 'Comoros',                         
                'cg'=> 'Congo',                         
                'ck'=> 'Cook Islands',                         
                'cr'=> 'Costa Rica',                         
                'hr'=> 'Croatia',                         
                'cw'=> 'Cura�ao',                         
                'cy'=> 'Cyprus',                         
                'cz'=> 'Czech Republic',                         
                'cd'=> 'Democratic Republic of the Congo',                         
                'dk'=> 'Denmark',                         
                'dj'=> 'Djibouti',                         
                'dm'=> 'Dominica',                         
                'do'=> 'Dominican Republi',                  
                'tl'=> 'East Timor',                         
                'ec'=> 'Ecuador',                         
                'eg'=> 'Egypt',                         
                'sv'=> 'El Salvador',                         
                'gq'=> 'Equatorial Guinea',                         
                'er'=> 'Eritrea',                         
                'ee'=> 'Estonia',                         
                'et'=> 'Ethiopia',                         
                'fk'=> 'Falkland Islands (Malvinas)',                         
                'fo'=> 'Faroe Islands',                         
                'fj'=> 'Fiji',                         
                'fi'=> 'Finland',                         
                'fr'=> 'France',                         
                'gf'=> 'French Guiana',                         
                'pf'=> 'French Polynesia',                     
                'tf'=> 'French Southern/Antarctic Lands',                         
                'ga'=> 'Gabon',                         
                'gm'=> 'Gambia',                         
                'ge'=> 'Georgia',                         
                'de'=> 'Germany',                         
                'gh'=> 'Ghana',                         
                'gi'=> 'Gibraltar',                         
                'gr'=> 'Greece',                         
                'gl'=> 'Greenland',                         
                'gd'=> 'Grenada',                         
                'gp'=> 'Guadeloupe',                         
                'gu'=> 'Guam',                         
                'gt'=> 'Guatemala',                         
                'gg'=> 'Guernsey',                         
                'gn'=> 'Guinea',                         
                'gw'=> 'Guinea-Bissau',
                'gy'=> 'Guyana',                         
                'ht'=> 'Haiti',                         
                'hm'=> 'Heard and McDonald Islands',                         
                'hn'=> 'Honduras',                         
                'hk'=> 'Hong Kong',                         
                'hu'=> 'Hungary',                         
                'is'=> 'Iceland',                         
                'in'=> 'India',                         
                'id'=> 'Indonesia',                         
                'iq'=> 'Iraq',                         
                'ie'=> 'Ireland',                         
                'il'=> 'Israel',                         
                'it'=> 'Italy',                         
                'ci'=> 'Ivory Coast',                        
                'jm'=> 'Jamaica',                         
                'jp'=> 'Japan',                         
                'je'=> 'Jersey',                         
                'jo'=> 'Jordan',                         
                'kz'=> 'Kazakhstan',                         
                'ke'=> 'Kenya',                         
                'ki'=> 'Kiribati',                         
                'kr'=> 'Korea, South',                         
                'xk'=> 'Kosovo',                         
                'kw'=> 'Kuwait',                              
                'kg'=> 'Kyrgyzstan',                          
                'la'=> 'Lao Peoples Democratic Republic',     
                'lv'=> 'Latvia',                         
                'lb'=> 'Lebanon',                         
                'ls'=> 'Lesotho',                         
                'lr'=> 'Liberia',                         
                'li'=> 'Liechtenstein',                         
                'lt'=> 'Lithuania',                         
                'lu'=> 'Luxembourg',                         
                'mo'=> 'Macau',                         
                'mk'=> 'Macedonia',                         
                'mg'=> 'Madagascar',                         
                'mw'=> 'Malawi',                         
                'my'=> 'Malaysia',                         
                'mv'=> 'Maldives',                         
                'ml'=> 'Mali',                         
                'mt'=> 'Malta',                         
                'im'=> 'Man, Isle of',                         
                'mh'=> 'Marshall Islands',                         
                'mq'=> 'Martinique',                         
                'mr'=> 'Mauritania',                         
                'mu'=> 'Mauritius',                         
                'yt'=> 'Mayotte',                         
                'mx'=> 'Mexico',                         
                'fm'=> 'Micronesia',                         
                'md'=> 'Moldova, Republic of',                         
                'mc'=> 'Monaco',                         
                'mn'=> 'Mongolia',                         
                'ms'=> 'Monserrat',                         
                'me'=> 'Montenegro',                         
                'ma'=> 'Morocco',                         
                'mz'=> 'Mozambique',                         
                'mm'=> 'Myanmar (Burma)',                      
                'na'=> 'Namibia',                         
                'nr'=> 'Nauru',                         
                'np'=> 'Nepal',                         
                'nl'=> 'Netherlands',                         
                'nc'=> 'New Caledonia',                         
                'nz'=> 'New Zealand',                         
                'ni'=> 'Nicaragua',                         
                'ne'=> 'Niger',                         
                'ng'=> 'Nigeria',                         
                'nu'=> 'Niue',                         
                'nf'=> 'Norfolk Island',                         
                'mp'=> 'Northern Mariana Islands',                         
                'no'=> 'Norway',                         
                'om'=> 'Oman',                         
                'pk'=> 'Pakistan',                         
                'pw'=> 'Palau',                         
                'ps'=> 'Palestinian territory, ocupied',                         
                'pa'=> 'Panama',                         
                'pg'=> 'Papua New Guinea',                         
                'py'=> 'Paraguay',                         
                'pe'=> 'Peru',                         
                'ph'=> 'Philippines',                         
                'pn'=> 'Pitcairn',                         
                'pl'=> 'Poland',                         
                'pt'=> 'Portugal',                         
                'pr'=> 'Puerto Rico',                         
                'qa'=> 'Qatar',
                're'=> 'Reunion',                         
                'ro'=> 'Romania',                         
                'ru'=> 'Russia',                         
                'rw'=> 'Rwanda',                         
                'lc'=> 'Saint Lucia',                         
                'mf'=> 'Saint Martin',                         
                'ws'=> 'Samoa',                         
                'sm'=> 'San Marino',                         
                'st'=> 'Sao Tome and Principe',                         
                'sa'=> 'Saudi Arabia',                         
                'sn'=> 'Senegal',                         
                'rs'=> 'Serbia',                         
                'sc'=> 'Seychelles',                         
                'sl'=> 'Sierra Leone',
                'sg'=> 'Singapore',                         
                'sx'=> 'Sint Maarten',                         
                'sk'=> 'Slovakia',                         
                'si'=> 'Slovenia',                         
                'sb'=> 'Solomon Islands',                         
                'so'=> 'Somalia',                         
                'za'=> 'South Africa ',                        
                'gs'=> 'South Georgia/Sandwich Islands',                         
                'es'=> 'Spain',                         
                'lk'=> 'Sri Lanka',                         
                'sh'=> 'St. Helena',                         
                'kn'=> 'St. Kitts and Nevis',                         
                'pm'=> 'St. Pierre and Miquelon',                         
                'vc'=> 'St. Vincent and the Grenadines',                         
                'sr'=> 'Suriname',                         
                'sj'=> 'Svalbard/Jan Mayen Islands',
                'sz'=> 'Swaziland',                         
                'se'=> 'Sweden',                         
                'ch'=> 'Switzerland',                         
                'tw'=> 'Taiwan',                         
                'tj'=> 'Tajikistan',                         
                'tz'=> 'Tanzania, United Republic of',
                'th'=> 'Thailand',                         
                'tg'=> 'Togo',                         
                'tk'=> 'Tokelau',                         
                'to'=> 'Tonga',                         
                'tt'=> 'Trinidad and Tobago',
                'tn'=> 'Tunisia',                         
                'tr'=> 'Turkey',                         
                'tm'=> 'Turkmenistan',                         
                'tc'=> 'Turks and Caicos Islands',
                'tv'=> 'Tuvalu',                         
                'um'=> 'U.S. Minor Outlying Islands',                         
                'ug'=> 'Uganda',                         
                'ua'=> 'Ukraine',                         
                'ae'=> 'United Arab Emirates',                         
                'gb'=> 'United Kingdom',                         
                'us'=> 'United States of America',                         
                'uy'=> 'Uruguay',                  
                'uz'=> 'Uzbekistan',                         
                'vu'=> 'Vanuatu',                         
                'va'=> 'Vatican City State (Holy See)',
                've'=> 'Venezuela',                         
                'vn'=> 'Vietnam',                         
                'vi'=> 'Virgin Islands',                         
                'wf'=> 'Wallis and Futuna Islands',                         
                'eh'=> 'Western Sahara',                         
                'ye'=> 'Yemen',                
                'zm'=> 'Zambia',                         
                'zw'=> 'Zimbabwe'                    
            ];

            foreach($countr as $key => $v)
            {
                if($key == auth()->user()->country)
                {
                    auth()->user()->country = $v;
                    break;
                }
            }

            $data["type"] = (auth()->user()->role == 2) ? "Gym" : "Trainer";
            
             
            Mail::to('vendors@gymscanner.com')->send(new NotificationMail($data));
            //send mail to admin

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
        
        return back();

    }
	
	public function thankyou()
	{
	
	    return view('thanks');
	}
	
	public function verify_email()
	{
        $role_name = Session::get('myregrole');
        if($role_name == 2)
        {
            $role_name = 'Gym';
        }else
        {

            $role_name = 'Trainer';
        }
        $first_name = Session::get('myregname');
        $last_name = Session::get('myreglname');
        $email = Session::get('myregemail');
        $external_id = Session::get('myregexternal');

        $details = [
            'role' => $role_name,
            'name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'external_id' => $external_id
        ];
       
        Mail::to('vendors@gymscanner.com')->send(new SendSignupMail($details));

	    return view('auth.verify');

	}
	
	
	public function login_view()
	{
	    return view('auth.login');
	}
	
	public function view_dashboard()
	{
	
	   return view('home');
	
	}
	
    public function logout()
	{
	   auth()->logout();
	   return redirect('/login');
	
	}

    public function approve_complete_profile(Request $req)
    {
        DB::beginTransaction();
        
        try {
            DB::table('notifications')
                    ->where('user_id', $req->user_id)
                    ->where('name', 'COMPLETE_PROFILE')
                    ->update(['is_active' => 0]);

            //save into db notifiactions
            DB::table("notifications")->insert([
                'user_id' => auth()->user()->id,
                'show_to' => $req->user_id,
                'name' => 'APPROVED_PROFILE',
                'value' => 'Your account is live'
            ]); 

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }            
    }

    public function mybrand()
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

    public function branding(){
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

        return view('user/branding', $data);
    }

    public function upload_brand_photos(Request $request) {
        DB::beginTransaction();
        
        try {
            if($request->hasfile('file')) {
                
                $document = $request->file('file');
                    
                $documentName = $document->getClientOriginalName();
                $document->move(public_path('upload/brands'), $documentName);
                
               
                DB::table('brands_images')->insert([

                    'user_id' => auth()->user()->id,
                    
                    'image_path' => $documentName,

                    'created_at' => date('Y-m-d h:i:s')

                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
        
        return back();
    }

    public function brand_photos_delete(Request $request)
    {
        $filename = $request->get('filename');
        DB::table('brands_images')->where('image_path', $filename)->delete();
        $path = public_path() . '/upload/brands/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;

    }

    public function submit_brand_links(Request $request) {
        DB::beginTransaction();
        
        try {
            DB::table('brands_social_data')->insert([

                'user_id' => auth()->user()->id,
                
                'name' => $request->link,

                'type' => 'youtube',

                'created_at' => date('Y-m-d h:i:s')

            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
        
        return back();
    }

    public function submit_brand_certificates(Request $request) {
        DB::beginTransaction();
        
        try {
            DB::table('brands_social_data')->insert([
                'user_id' => auth()->user()->id,
                
                'name' => $request->name,

                'certificate_date' => $request->certificate_date,

                'type' => 'certificate',

                'created_at' => date('Y-m-d h:i:s')
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
        
        return back();
    }

    public function update_brand_certificates(Request $request) {
        $model = Brandsocialdata::where('id', $request->brand_link_id)->first();
        if (@$model) {
            $model->name = $request->link;
            $model->update();
        }
        
        return back();
    }

    public function delete_brand_certificates(Request $request) {
        $model = Brandsocialdata::where('id', $request->brand_link_id)->first();
        if (@$model) {
            $model->delete();
        }
        
        return back();
    }

    public function getBrandingData()
    {

        // $images = DB::table('brands_images')->get();
        $images = DB::table('brands_images')->where('user_id',auth()->user()->id)->get();
        $avatar = DB::table('brands_social_data')->where('user_id',auth()->user()->id)->where('type','image')->first();

        $output = [
            'images' => $images,
            'avatar' => $avatar
        ];
        
        echo json_encode($output);
        
    }

    public function delete_brand_photos(Request $req)
    {

       
        foreach($req->id as $v){

            $filename = $v;
            DB::table('brands_images')->where('image_path', $filename)->delete();
            $path = public_path() . '/upload/brands/' . $filename;
            if (file_exists($path)) {
                unlink($path);
            }
            // return $filename;

        }

        return true;


    }

    public function submit_brand_name(Request $request)
    {
        DB::beginTransaction();
        
        try {
            DB::table('brands_social_data')
                ->where('user_id',auth()->user()->id)
                ->where('type','name')->delete();

            DB::table('brands_social_data')->insert([
                'user_id' => auth()->user()->id,
                'name' => $request->brand_name,
                'type' => 'name',
                'created_at' => date('Y-m-d h:i:s')
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
        
        return back();
    }

    public function save_brand_info(Request $request)
    {
        
        $row = DB::table('brands_info')->where('user_id',auth()->user()->id)->first();
        DB::beginTransaction();
        
        try {
            if(!empty($row)){


                DB::table('brands_info')->where('user_id',auth()->user()->id)->update([
                    
                    'about' => @$request->about,

                    'select_country' => @$request->select_country_type,

                    'countries' => @json_encode(@$request->selected_counrties),

                    'google_location' => @$request->google_location,

                    'updated_at' => date('Y-m-d h:i:s')

                ]);

            }
            else
            {
                DB::table('brands_info')->insert([

                    'user_id' => auth()->user()->id,
                    
                    'about' => @$request->about,

                    'select_country' => @$request->select_country_type,
                    
                    'countries' => @json_encode(@$request->selected_counrties),

                    'google_location' => @$request->google_location,

                    'created_at' => date('Y-m-d h:i:s')

                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
        
        return back();
    }

    public function submit_brand_image(Request $request)
    {
        DB::beginTransaction();
        
        try {
            if($request->hasfile('file')) {
                
                $document = $request->file('file');
                    
                $documentName = $document->getClientOriginalName();
                $document->move(public_path('upload/brands'), $documentName);
                
                DB::table('brands_social_data')
                    ->where('user_id',auth()->user()->id)
                    ->where('type','image')->delete();

                DB::table('brands_social_data')->insert([

                    'user_id' => auth()->user()->id,
                    
                    'name' => $documentName,

                    'type' => 'image',

                    'created_at' => date('Y-m-d h:i:s')

                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }

        return true;
    }

    /**
     * render the status page for deactivate account
     *
     * @since 2021-05-18
     * @author Nemanja
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function status()
    {
        $userid = auth()->user()->id;
        if (@$userid) {
            $loggedin_user = User::where('id', $userid)->first();
        }else{
            $loggedin_user = [];
        }

        return view('user/status', compact('loggedin_user'));
    }

    /**
     * update account status.
     *
     * @since 2021-05-18
     * @author Nemanja
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function change_myaccount_status(Request $request)
    {
        if (@$request->userid) {
            $userRecord = User::where('id', $request->userid)->first();
            if (@$userRecord) {
                if (@$request->status == 1) {
                    $userRecord->active = 1;
                    $userRecord->update();

                    return response()->json(['msg' => 'Your Account is activated now.']);
                }else{
                    $userRecord->active = 2;
                    $userRecord->update();

                    return response()->json(['msg' => 'Your Account is Deactivated now.']);
                }
            }else{
                return response()->json(['msg' => 'Not found user account.']);
            }
        }
    }
}
