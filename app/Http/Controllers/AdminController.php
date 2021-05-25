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
        
        $countryArray = array(
            'AD'=>array('name'=>'ANDORRA','code'=>'376'),
            'AE'=>array('name'=>'UNITED ARAB EMIRATES','code'=>'971'),
            'AF'=>array('name'=>'AFGHANISTAN','code'=>'93'),
            'AG'=>array('name'=>'ANTIGUA AND BARBUDA','code'=>'1268'),
            'AI'=>array('name'=>'ANGUILLA','code'=>'1264'),
            'AL'=>array('name'=>'ALBANIA','code'=>'355'),
            'AM'=>array('name'=>'ARMENIA','code'=>'374'),
            'AN'=>array('name'=>'NETHERLANDS ANTILLES','code'=>'599'),
            'AO'=>array('name'=>'ANGOLA','code'=>'244'),
            'AQ'=>array('name'=>'ANTARCTICA','code'=>'672'),
            'AR'=>array('name'=>'ARGENTINA','code'=>'54'),
            'AS'=>array('name'=>'AMERICAN SAMOA','code'=>'1684'),
            'AT'=>array('name'=>'AUSTRIA','code'=>'43'),
            'AU'=>array('name'=>'AUSTRALIA','code'=>'61'),
            'AW'=>array('name'=>'ARUBA','code'=>'297'),
            'AZ'=>array('name'=>'AZERBAIJAN','code'=>'994'),
            'BA'=>array('name'=>'BOSNIA AND HERZEGOVINA','code'=>'387'),
            'BB'=>array('name'=>'BARBADOS','code'=>'1246'),
            'BD'=>array('name'=>'BANGLADESH','code'=>'880'),
            'BE'=>array('name'=>'BELGIUM','code'=>'32'),
            'BF'=>array('name'=>'BURKINA FASO','code'=>'226'),
            'BG'=>array('name'=>'BULGARIA','code'=>'359'),
            'BH'=>array('name'=>'BAHRAIN','code'=>'973'),
            'BI'=>array('name'=>'BURUNDI','code'=>'257'),
            'BJ'=>array('name'=>'BENIN','code'=>'229'),
            'BL'=>array('name'=>'SAINT BARTHELEMY','code'=>'590'),
            'BM'=>array('name'=>'BERMUDA','code'=>'1441'),
            'BN'=>array('name'=>'BRUNEI DARUSSALAM','code'=>'673'),
            'BO'=>array('name'=>'BOLIVIA','code'=>'591'),
            'BR'=>array('name'=>'BRAZIL','code'=>'55'),
            'BS'=>array('name'=>'BAHAMAS','code'=>'1242'),
            'BT'=>array('name'=>'BHUTAN','code'=>'975'),
            'BW'=>array('name'=>'BOTSWANA','code'=>'267'),
            'BY'=>array('name'=>'BELARUS','code'=>'375'),
            'BZ'=>array('name'=>'BELIZE','code'=>'501'),
            'CA'=>array('name'=>'CANADA','code'=>'1'),
            'CC'=>array('name'=>'COCOS (KEELING) ISLANDS','code'=>'61'),
            'CD'=>array('name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE','code'=>'243'),
            'CF'=>array('name'=>'CENTRAL AFRICAN REPUBLIC','code'=>'236'),
            'CG'=>array('name'=>'CONGO','code'=>'242'),
            'CH'=>array('name'=>'SWITZERLAND','code'=>'41'),
            'CI'=>array('name'=>'COTE D IVOIRE','code'=>'225'),
            'CK'=>array('name'=>'COOK ISLANDS','code'=>'682'),
            'CL'=>array('name'=>'CHILE','code'=>'56'),
            'CM'=>array('name'=>'CAMEROON','code'=>'237'),
            'CN'=>array('name'=>'CHINA','code'=>'86'),
            'CO'=>array('name'=>'COLOMBIA','code'=>'57'),
            'CR'=>array('name'=>'COSTA RICA','code'=>'506'),
            'CU'=>array('name'=>'CUBA','code'=>'53'),
            'CV'=>array('name'=>'CAPE VERDE','code'=>'238'),
            'CX'=>array('name'=>'CHRISTMAS ISLAND','code'=>'61'),
            'CY'=>array('name'=>'CYPRUS','code'=>'357'),
            'CZ'=>array('name'=>'CZECH REPUBLIC','code'=>'420'),
            'DE'=>array('name'=>'GERMANY','code'=>'49'),
            'DJ'=>array('name'=>'DJIBOUTI','code'=>'253'),
            'DK'=>array('name'=>'DENMARK','code'=>'45'),
            'DM'=>array('name'=>'DOMINICA','code'=>'1767'),
            'DO'=>array('name'=>'DOMINICAN REPUBLIC','code'=>'1809'),
            'DZ'=>array('name'=>'ALGERIA','code'=>'213'),
            'EC'=>array('name'=>'ECUADOR','code'=>'593'),
            'EE'=>array('name'=>'ESTONIA','code'=>'372'),
            'EG'=>array('name'=>'EGYPT','code'=>'20'),
            'ER'=>array('name'=>'ERITREA','code'=>'291'),
            'ES'=>array('name'=>'SPAIN','code'=>'34'),
            'ET'=>array('name'=>'ETHIOPIA','code'=>'251'),
            'FI'=>array('name'=>'FINLAND','code'=>'358'),
            'FJ'=>array('name'=>'FIJI','code'=>'679'),
            'FK'=>array('name'=>'FALKLAND ISLANDS (MALVINAS)','code'=>'500'),
            'FM'=>array('name'=>'MICRONESIA, FEDERATED STATES OF','code'=>'691'),
            'FO'=>array('name'=>'FAROE ISLANDS','code'=>'298'),
            'FR'=>array('name'=>'FRANCE','code'=>'33'),
            'GA'=>array('name'=>'GABON','code'=>'241'),
            'GB'=>array('name'=>'UNITED KINGDOM','code'=>'44'),
            'GD'=>array('name'=>'GRENADA','code'=>'1473'),
            'GE'=>array('name'=>'GEORGIA','code'=>'995'),
            'GH'=>array('name'=>'GHANA','code'=>'233'),
            'GI'=>array('name'=>'GIBRALTAR','code'=>'350'),
            'GL'=>array('name'=>'GREENLAND','code'=>'299'),
            'GM'=>array('name'=>'GAMBIA','code'=>'220'),
            'GN'=>array('name'=>'GUINEA','code'=>'224'),
            'GQ'=>array('name'=>'EQUATORIAL GUINEA','code'=>'240'),
            'GR'=>array('name'=>'GREECE','code'=>'30'),
            'GT'=>array('name'=>'GUATEMALA','code'=>'502'),
            'GU'=>array('name'=>'GUAM','code'=>'1671'),
            'GW'=>array('name'=>'GUINEA-BISSAU','code'=>'245'),
            'GY'=>array('name'=>'GUYANA','code'=>'592'),
            'HK'=>array('name'=>'HONG KONG','code'=>'852'),
            'HN'=>array('name'=>'HONDURAS','code'=>'504'),
            'HR'=>array('name'=>'CROATIA','code'=>'385'),
            'HT'=>array('name'=>'HAITI','code'=>'509'),
            'HU'=>array('name'=>'HUNGARY','code'=>'36'),
            'ID'=>array('name'=>'INDONESIA','code'=>'62'),
            'IE'=>array('name'=>'IRELAND','code'=>'353'),
            'IL'=>array('name'=>'ISRAEL','code'=>'972'),
            'IM'=>array('name'=>'ISLE OF MAN','code'=>'44'),
            'IN'=>array('name'=>'INDIA','code'=>'91'),
            'IQ'=>array('name'=>'IRAQ','code'=>'964'),
            'IR'=>array('name'=>'IRAN, ISLAMIC REPUBLIC OF','code'=>'98'),
            'IS'=>array('name'=>'ICELAND','code'=>'354'),
            'IT'=>array('name'=>'ITALY','code'=>'39'),
            'JM'=>array('name'=>'JAMAICA','code'=>'1876'),
            'JO'=>array('name'=>'JORDAN','code'=>'962'),
            'JP'=>array('name'=>'JAPAN','code'=>'81'),
            'KE'=>array('name'=>'KENYA','code'=>'254'),
            'KG'=>array('name'=>'KYRGYZSTAN','code'=>'996'),
            'KH'=>array('name'=>'CAMBODIA','code'=>'855'),
            'KI'=>array('name'=>'KIRIBATI','code'=>'686'),
            'KM'=>array('name'=>'COMOROS','code'=>'269'),
            'KN'=>array('name'=>'SAINT KITTS AND NEVIS','code'=>'1869'),
            'KP'=>array('name'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF','code'=>'850'),
            'KR'=>array('name'=>'KOREA REPUBLIC OF','code'=>'82'),
            'KW'=>array('name'=>'KUWAIT','code'=>'965'),
            'KY'=>array('name'=>'CAYMAN ISLANDS','code'=>'1345'),
            'KZ'=>array('name'=>'KAZAKSTAN','code'=>'7'),
            'LA'=>array('name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC','code'=>'856'),
            'LB'=>array('name'=>'LEBANON','code'=>'961'),
            'LC'=>array('name'=>'SAINT LUCIA','code'=>'1758'),
            'LI'=>array('name'=>'LIECHTENSTEIN','code'=>'423'),
            'LK'=>array('name'=>'SRI LANKA','code'=>'94'),
            'LR'=>array('name'=>'LIBERIA','code'=>'231'),
            'LS'=>array('name'=>'LESOTHO','code'=>'266'),
            'LT'=>array('name'=>'LITHUANIA','code'=>'370'),
            'LU'=>array('name'=>'LUXEMBOURG','code'=>'352'),
            'LV'=>array('name'=>'LATVIA','code'=>'371'),
            'LY'=>array('name'=>'LIBYAN ARAB JAMAHIRIYA','code'=>'218'),
            'MA'=>array('name'=>'MOROCCO','code'=>'212'),
            'MC'=>array('name'=>'MONACO','code'=>'377'),
            'MD'=>array('name'=>'MOLDOVA, REPUBLIC OF','code'=>'373'),
            'ME'=>array('name'=>'MONTENEGRO','code'=>'382'),
            'MF'=>array('name'=>'SAINT MARTIN','code'=>'1599'),
            'MG'=>array('name'=>'MADAGASCAR','code'=>'261'),
            'MH'=>array('name'=>'MARSHALL ISLANDS','code'=>'692'),
            'MK'=>array('name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','code'=>'389'),
            'ML'=>array('name'=>'MALI','code'=>'223'),
            'MM'=>array('name'=>'MYANMAR','code'=>'95'),
            'MN'=>array('name'=>'MONGOLIA','code'=>'976'),
            'MO'=>array('name'=>'MACAU','code'=>'853'),
            'MP'=>array('name'=>'NORTHERN MARIANA ISLANDS','code'=>'1670'),
            'MR'=>array('name'=>'MAURITANIA','code'=>'222'),
            'MS'=>array('name'=>'MONTSERRAT','code'=>'1664'),
            'MT'=>array('name'=>'MALTA','code'=>'356'),
            'MU'=>array('name'=>'MAURITIUS','code'=>'230'),
            'MV'=>array('name'=>'MALDIVES','code'=>'960'),
            'MW'=>array('name'=>'MALAWI','code'=>'265'),
            'MX'=>array('name'=>'MEXICO','code'=>'52'),
            'MY'=>array('name'=>'MALAYSIA','code'=>'60'),
            'MZ'=>array('name'=>'MOZAMBIQUE','code'=>'258'),
            'NA'=>array('name'=>'NAMIBIA','code'=>'264'),
            'NC'=>array('name'=>'NEW CALEDONIA','code'=>'687'),
            'NE'=>array('name'=>'NIGER','code'=>'227'),
            'NG'=>array('name'=>'NIGERIA','code'=>'234'),
            'NI'=>array('name'=>'NICARAGUA','code'=>'505'),
            'NL'=>array('name'=>'NETHERLANDS','code'=>'31'),
            'NO'=>array('name'=>'NORWAY','code'=>'47'),
            'NP'=>array('name'=>'NEPAL','code'=>'977'),
            'NR'=>array('name'=>'NAURU','code'=>'674'),
            'NU'=>array('name'=>'NIUE','code'=>'683'),
            'NZ'=>array('name'=>'NEW ZEALAND','code'=>'64'),
            'OM'=>array('name'=>'OMAN','code'=>'968'),
            'PA'=>array('name'=>'PANAMA','code'=>'507'),
            'PE'=>array('name'=>'PERU','code'=>'51'),
            'PF'=>array('name'=>'FRENCH POLYNESIA','code'=>'689'),
            'PG'=>array('name'=>'PAPUA NEW GUINEA','code'=>'675'),
            'PH'=>array('name'=>'PHILIPPINES','code'=>'63'),
            'PK'=>array('name'=>'PAKISTAN','code'=>'92'),
            'PL'=>array('name'=>'POLAND','code'=>'48'),
            'PM'=>array('name'=>'SAINT PIERRE AND MIQUELON','code'=>'508'),
            'PN'=>array('name'=>'PITCAIRN','code'=>'870'),
            'PR'=>array('name'=>'PUERTO RICO','code'=>'1'),
            'PT'=>array('name'=>'PORTUGAL','code'=>'351'),
            'PW'=>array('name'=>'PALAU','code'=>'680'),
            'PY'=>array('name'=>'PARAGUAY','code'=>'595'),
            'QA'=>array('name'=>'QATAR','code'=>'974'),
            'RO'=>array('name'=>'ROMANIA','code'=>'40'),
            'RS'=>array('name'=>'SERBIA','code'=>'381'),
            'RU'=>array('name'=>'RUSSIAN FEDERATION','code'=>'7'),
            'RW'=>array('name'=>'RWANDA','code'=>'250'),
            'SA'=>array('name'=>'SAUDI ARABIA','code'=>'966'),
            'SB'=>array('name'=>'SOLOMON ISLANDS','code'=>'677'),
            'SC'=>array('name'=>'SEYCHELLES','code'=>'248'),
            'SD'=>array('name'=>'SUDAN','code'=>'249'),
            'SE'=>array('name'=>'SWEDEN','code'=>'46'),
            'SG'=>array('name'=>'SINGAPORE','code'=>'65'),
            'SH'=>array('name'=>'SAINT HELENA','code'=>'290'),
            'SI'=>array('name'=>'SLOVENIA','code'=>'386'),
            'SK'=>array('name'=>'SLOVAKIA','code'=>'421'),
            'SL'=>array('name'=>'SIERRA LEONE','code'=>'232'),
            'SM'=>array('name'=>'SAN MARINO','code'=>'378'),
            'SN'=>array('name'=>'SENEGAL','code'=>'221'),
            'SO'=>array('name'=>'SOMALIA','code'=>'252'),
            'SR'=>array('name'=>'SURINAME','code'=>'597'),
            'ST'=>array('name'=>'SAO TOME AND PRINCIPE','code'=>'239'),
            'SV'=>array('name'=>'EL SALVADOR','code'=>'503'),
            'SY'=>array('name'=>'SYRIAN ARAB REPUBLIC','code'=>'963'),
            'SZ'=>array('name'=>'SWAZILAND','code'=>'268'),
            'TC'=>array('name'=>'TURKS AND CAICOS ISLANDS','code'=>'1649'),
            'TD'=>array('name'=>'CHAD','code'=>'235'),
            'TG'=>array('name'=>'TOGO','code'=>'228'),
            'TH'=>array('name'=>'THAILAND','code'=>'66'),
            'TJ'=>array('name'=>'TAJIKISTAN','code'=>'992'),
            'TK'=>array('name'=>'TOKELAU','code'=>'690'),
            'TL'=>array('name'=>'TIMOR-LESTE','code'=>'670'),
            'TM'=>array('name'=>'TURKMENISTAN','code'=>'993'),
            'TN'=>array('name'=>'TUNISIA','code'=>'216'),
            'TO'=>array('name'=>'TONGA','code'=>'676'),
            'TR'=>array('name'=>'TURKEY','code'=>'90'),
            'TT'=>array('name'=>'TRINIDAD AND TOBAGO','code'=>'1868'),
            'TV'=>array('name'=>'TUVALU','code'=>'688'),
            'TW'=>array('name'=>'TAIWAN, PROVINCE OF CHINA','code'=>'886'),
            'TZ'=>array('name'=>'TANZANIA, UNITED REPUBLIC OF','code'=>'255'),
            'UA'=>array('name'=>'UKRAINE','code'=>'380'),
            'UG'=>array('name'=>'UGANDA','code'=>'256'),
            'US'=>array('name'=>'UNITED STATES','code'=>'1'),
            'UY'=>array('name'=>'URUGUAY','code'=>'598'),
            'UZ'=>array('name'=>'UZBEKISTAN','code'=>'998'),
            'VA'=>array('name'=>'HOLY SEE (VATICAN CITY STATE)','code'=>'39'),
            'VC'=>array('name'=>'SAINT VINCENT AND THE GRENADINES','code'=>'1784'),
            'VE'=>array('name'=>'VENEZUELA','code'=>'58'),
            'VG'=>array('name'=>'VIRGIN ISLANDS, BRITISH','code'=>'1284'),
            'VI'=>array('name'=>'VIRGIN ISLANDS, U.S.','code'=>'1340'),
            'VN'=>array('name'=>'VIET NAM','code'=>'84'),
            'VU'=>array('name'=>'VANUATU','code'=>'678'),
            'WF'=>array('name'=>'WALLIS AND FUTUNA','code'=>'681'),
            'WS'=>array('name'=>'SAMOA','code'=>'685'),
            'XK'=>array('name'=>'KOSOVO','code'=>'381'),
            'YE'=>array('name'=>'YEMEN','code'=>'967'),
            'YT'=>array('name'=>'MAYOTTE','code'=>'262'),
            'ZA'=>array('name'=>'SOUTH AFRICA','code'=>'27'),
            'ZM'=>array('name'=>'ZAMBIA','code'=>'260'),
            'ZW'=>array('name'=>'ZIMBABWE','code'=>'263')
        );

        sort($countryArray);

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
