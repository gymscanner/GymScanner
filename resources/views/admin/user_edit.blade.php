@extends('layouts.default')
{{-- Page title --}}
@section('title')
Users @parent
@stop

@section('content')
<style>
    .custom-control{
        padding-left: 0px!important;
    }
</style>
        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Profile Edit</h4>
                                </div>
                            </div>
                            @if (Session::get('danger'))
                  
                                <div class="row">
                                    <div class="col-md-12 mt-1">
                                        
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ Session::get('danger') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            
                                    </div>
                                </div>
                            
                                @endif
                                @if (Session::get('success_img'))
                  
                                <div class="row">
                                    <div class="col-md-12 mt-1">
                                        
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('success_img') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            
                                    </div>
                                </div>
                            
                                @endif
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('personal_avatar')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Logo ( 300px*300px )</label>
                                                <label class="custom-file-container__custom-file" >
                                                    <input type="file" id="rr" class="custom-file-container__custom-file__custom-file-input" name="avatar" accept="image/*">
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <button type="submit" class="btn btn-primary mt-5" id="avatar" >Upload Profile Image</button>
                                                <a href="javascript:void(0)"  class="custom-file-container__image-clear" title="Clear Image"><button type="button" class="btn btn-danger mt-5">Remove</button></a>
                                            </div>
                                            <div class="col-lg-6">
                                                @if($personal_avatar)
                                                <div class="row" id="ddd" style="margin-top:50px;margin-left:10px;">
                                                    <div class="col-sm-3"> 
                                                    </div>
                                                    <div class="col-sm-6">                
                                                    <img class="img-thumbnail" style="max-height: 125px;background-repeat: no-repeat;" src="{{ asset($personal_avatar->avatar) }}"  >
                                                    </div>
                                                    <div class="col-sm-3"> 
                                                    </div> 
                                                </div>    
                                                
                                                <div  class="custom-file-container__image-preview" id="hh" style="max-height: 125px;">
                                                    
                                                </div>
                                                @else
                                                <div class="custom-file-container__image-preview" style="max-height: 125px;">>
                                                    
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                      
                                    </div>                                        
                            </form>
                        </div>
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>General Information</h4>
                                </div>
                            </div>
                        </div>
                        <form  action="{{ route('admin.update_personal')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <input type="text" class="form-control" name="user_id" value="{{($users)?$users->id:''}}" hidden>
                            <div class="widget-content widget-content-area">
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">First Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name"  name="first_name" value="{{($users)?$users->name:''}}" required>
                                </div>
                                 <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Last Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name"  name="last_name" value="{{($users)?$users->last_name:''}}" required>
                                </div>
                                 <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Trainer Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username"  name="company_name" value="{{($trainer_data)?$trainer_data->company_name:''}}" required>
                                    <input type="hidden" id="country_code" value="{{@$trainer_data->country}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">Country</label>
                                    <select class="form-control" name="country"  id="exampleFormControlSelect1">
                                        <option value="not" class="hidden defaultText">Country</option>
                                            <option value="ax">    Aaland Islands                          </option>
                                            <option value="af">    Afghanistan                          </option>
                                            <option value="al">    Albania                          </option>
                                            <option value="dz">    Algeria                          </option>
                                            <option value="as">    American Samoa                          </option>
                                            <option value="ad">    Andorra                          </option>
                                            <option value="ao">    Angola                          </option>
                                            <option value="ai">    Anguilla                          </option>
                                            <option value="aq">    Antarctica                          </option>
                                            <option value="ag">    Antigua and Barbuda                          </option>
                                            <option value="ar">    Argentina                          </option>
                                            <option value="am">    Armenia                          </option>
                                            <option value="aw">    Aruba                          </option>
                                            <option value="au">    Australia                          </option>
                                            <option value="at">    Austria                          </option>
                                            <option value="az">    Azerbaijan                          </option>
                                            <option value="bs">    Bahamas, The                          </option>
                                            <option value="bh">    Bahrain                          </option>
                                            <option value="bd">    Bangladesh                          </option>
                                            <option value="bb">    Barbados                          </option>
                                            <option value="by">    Belarus                          </option>
                                            <option value="be">    Belgium                          </option>
                                            <option value="bz">    Belize                          </option>
                                            <option value="bj">    Benin                          </option>
                                            <option value="bm">    Bermuda                          </option>
                                            <option value="bt">    Bhutan                          </option>
                                            <option value="bo">    Bolivia                          </option>
                                            <option value="bq">    Bonaire, Sint Eustatius and Saba                          </option>
                                            <option value="ba">    Bosnia and Herzegovina                          </option>
                                            <option value="bw">    Botswana                          </option>
                                            <option value="bv">    Bouvet Island                          </option>
                                            <option value="br">    Brazil                          </option>
                                            <option value="io">    British Indian Ocean Territory                          </option>
                                            <option value="vg">    British Virgin Islands                          </option>
                                            <option value="bn">    Brunei                          </option>
                                            <option value="bg">    Bulgaria                          </option>
                                            <option value="bf">    Burkina Faso                          </option>
                                            <option value="bi">    Burundi                          </option>
                                            <option value="kh">    Cambodia                          </option>
                                            <option value="cm">    Cameroon                          </option>
                                            <option value="ca">    Canada                          </option>
                                            <option value="ic">    Canary Islands                          </option>
                                            <option value="cv">    Cape Verde                          </option>
                                            <option value="ky">    Cayman Islands                          </option>
                                            <option value="cf">    Central African Republic                          </option>
                                            <option value="td">    Chad                          </option>
                                            <option value="cl">    Chile                          </option>
                                            <option value="cn">    China                          </option>
                                            <option value="cx">    Christmas Island                          </option>
                                            <option value="cc">    Cocos (Keeling) Islands                          </option>
                                            <option value="co">    Colombia                          </option>
                                            <option value="km">    Comoros                          </option>
                                            <option value="cg">    Congo                          </option>
                                            <option value="ck">    Cook Islands                          </option>
                                            <option value="cr">    Costa Rica                          </option>
                                            <option value="hr">    Croatia                          </option>
                                            <option value="cw">    Cura�ao                          </option>
                                            <option value="cy">    Cyprus                          </option>
                                            <option value="cz">    Czech Republic                          </option>
                                            <option value="cd">    Democratic Republic of the Congo                          </option>
                                            <option value="dk">    Denmark                          </option>
                                            <option value="dj">    Djibouti                          </option>
                                            <option value="dm">    Dominica                          </option>
                                            <option value="do">    Dominican Republic                          </option>
                                            <option value="tl">    East Timor                          </option>
                                            <option value="ec">    Ecuador                          </option>
                                            <option value="eg">    Egypt                          </option>
                                            <option value="sv">    El Salvador                          </option>
                                            <option value="gq">    Equatorial Guinea                          </option>
                                            <option value="er">    Eritrea                          </option>
                                            <option value="ee">    Estonia                          </option>
                                            <option value="et">    Ethiopia                          </option>
                                            <option value="fk">    Falkland Islands (Malvinas)                          </option>
                                            <option value="fo">    Faroe Islands                          </option>
                                            <option value="fj">    Fiji                          </option>
                                            <option value="fi">    Finland                          </option>
                                            <option value="fr">    France                          </option>
                                            <option value="gf">    French Guiana                          </option>
                                            <option value="pf">    French Polynesia                          </option>
                                            <option value="tf">    French Southern/Antarctic Lands                          </option>
                                            <option value="ga">    Gabon                          </option>
                                            <option value="gm">    Gambia                          </option>
                                            <option value="ge">    Georgia                          </option>
                                            <option value="de">    Germany                          </option>
                                            <option value="gh">    Ghana                          </option>
                                            <option value="gi">    Gibraltar                          </option>
                                            <option value="gr">    Greece                          </option>
                                            <option value="gl">    Greenland                          </option>
                                            <option value="gd">    Grenada                          </option>
                                            <option value="gp">    Guadeloupe                          </option>
                                            <option value="gu">    Guam                          </option>
                                            <option value="gt">    Guatemala                          </option>
                                            <option value="gg">    Guernsey                          </option>
                                            <option value="gn">    Guinea                          </option>
                                            <option value="gw">    Guinea-Bissau                          </option>
                                            <option value="gy">    Guyana                          </option>
                                            <option value="ht">    Haiti                          </option>
                                            <option value="hm">    Heard and McDonald Islands                          </option>
                                            <option value="hn">    Honduras                          </option>
                                            <option value="hk">    Hong Kong                          </option>
                                            <option value="hu">    Hungary                          </option>
                                            <option value="is">    Iceland                          </option>
                                            <option value="in">    India                          </option>
                                            <option value="id">    Indonesia                          </option>
                                            <option value="iq">    Iraq                          </option>
                                            <option value="ie">    Ireland                          </option>
                                            <option value="il">    Israel                          </option>
                                            <option value="it">    Italy                          </option>
                                            <option value="ci">    Ivory Coast                          </option>
                                            <option value="jm">    Jamaica                          </option>
                                            <option value="jp">    Japan                          </option>
                                            <option value="je">    Jersey                          </option>
                                            <option value="jo">    Jordan                          </option>
                                            <option value="kz">    Kazakhstan                          </option>
                                            <option value="ke">    Kenya                          </option>
                                            <option value="ki">    Kiribati                          </option>
                                            <option value="kr">    Korea, South                          </option>
                                            <option value="xk">    Kosovo                          </option>
                                            <option value="kw">    Kuwait                               </option>
                                            <option value="kg">    Kyrgyzstan                           </option>
                                            <option value="la">    Lao Peoples Democratic Republic      </option>
                                            <option value="lv">    Latvia                          </option>
                                            <option value="lb">    Lebanon                          </option>
                                            <option value="ls">    Lesotho                          </option>
                                            <option value="lr">    Liberia                          </option>
                                            <option value="li">    Liechtenstein                          </option>
                                            <option value="lt">    Lithuania                          </option>
                                            <option value="lu">    Luxembourg                          </option>
                                            <option value="mo">    Macau                          </option>
                                            <option value="mk">    Macedonia                          </option>
                                            <option value="mg">    Madagascar                          </option>
                                            <option value="mw">    Malawi                          </option>
                                            <option value="my">    Malaysia                          </option>
                                            <option value="mv">    Maldives                          </option>
                                            <option value="ml">    Mali                          </option>
                                            <option value="mt">    Malta                          </option>
                                            <option value="im">    Man, Isle of                          </option>
                                            <option value="mh">    Marshall Islands                          </option>
                                            <option value="mq">    Martinique                          </option>
                                            <option value="mr">    Mauritania                          </option>
                                            <option value="mu">    Mauritius                          </option>
                                            <option value="yt">    Mayotte                          </option>
                                            <option value="mx">    Mexico                          </option>
                                            <option value="fm">    Micronesia                          </option>
                                            <option value="md">    Moldova, Republic of                          </option>
                                            <option value="mc">    Monaco                          </option>
                                            <option value="mn">    Mongolia                          </option>
                                            <option value="ms">    Monserrat                          </option>
                                            <option value="me">    Montenegro                          </option>
                                            <option value="ma">    Morocco                          </option>
                                            <option value="mz">    Mozambique                          </option>
                                            <option value="mm">    Myanmar (Burma)                          </option>
                                            <option value="na">    Namibia                          </option>
                                            <option value="nr">    Nauru                          </option>
                                            <option value="np">    Nepal                          </option>
                                            <option value="nl">    Netherlands                          </option>
                                            <option value="nc">    New Caledonia                          </option>
                                            <option value="nz">    New Zealand                          </option>
                                            <option value="ni">    Nicaragua                          </option>
                                            <option value="ne">    Niger                          </option>
                                            <option value="ng">    Nigeria                          </option>
                                            <option value="nu">    Niue                          </option>
                                            <option value="nf">    Norfolk Island                          </option>
                                            <option value="mp">    Northern Mariana Islands                          </option>
                                            <option value="no">    Norway                          </option>
                                            <option value="om">    Oman                          </option>
                                            <option value="pk">    Pakistan                          </option>
                                            <option value="pw">    Palau                          </option>
                                            <option value="ps">    Palestinian territory, ocupied                          </option>
                                            <option value="pa">    Panama                          </option>
                                            <option value="pg">    Papua New Guinea                          </option>
                                            <option value="py">    Paraguay                          </option>
                                            <option value="pe">    Peru                          </option>
                                            <option value="ph">    Philippines                          </option>
                                            <option value="pn">    Pitcairn                          </option>
                                            <option value="pl">    Poland                          </option>
                                            <option value="pt">    Portugal                          </option>
                                            <option value="pr">    Puerto Rico                          </option>
                                            <option value="qa">    Qatar                          </option>
                                            <option value="re">    Reunion                          </option>
                                            <option value="ro">    Romania                          </option>
                                            <option value="ru">    Russia                          </option>
                                            <option value="rw">    Rwanda                          </option>
                                            <option value="lc">    Saint Lucia                          </option>
                                            <option value="mf">    Saint Martin                          </option>
                                            <option value="ws">    Samoa                          </option>
                                            <option value="sm">    San Marino                          </option>
                                            <option value="st">    Sao Tome and Principe                          </option>
                                            <option value="sa">    Saudi Arabia                          </option>
                                            <option value="sn">    Senegal                          </option>
                                            <option value="rs">    Serbia                          </option>
                                            <option value="sc">    Seychelles                          </option>
                                            <option value="sl">    Sierra Leone                          </option>
                                            <option value="sg">    Singapore                          </option>
                                            <option value="sx">    Sint Maarten                          </option>
                                            <option value="sk">    Slovakia                          </option>
                                            <option value="si">    Slovenia                          </option>
                                            <option value="sb">    Solomon Islands                          </option>
                                            <option value="so">    Somalia                          </option>
                                            <option value="za">    South Africa                          </option>
                                            <option value="gs">    South Georgia/Sandwich Islands                          </option>
                                            <option value="es">    Spain                          </option>
                                            <option value="lk">    Sri Lanka                          </option>
                                            <option value="sh">    St. Helena                          </option>
                                            <option value="kn">    St. Kitts and Nevis                          </option>
                                            <option value="pm">    St. Pierre and Miquelon                          </option>
                                            <option value="vc">    St. Vincent and the Grenadines                          </option>
                                            <option value="sr">    Suriname                          </option>
                                            <option value="sj">    Svalbard/Jan Mayen Islands                          </option>
                                            <option value="sz">    Swaziland                          </option>
                                            <option value="se">    Sweden                          </option>
                                            <option value="ch">    Switzerland                          </option>
                                            <option value="tw">    Taiwan                          </option>
                                            <option value="tj">    Tajikistan                          </option>
                                            <option value="tz">    Tanzania, United Republic of                          </option>
                                            <option value="th">    Thailand                          </option>
                                            <option value="tg">    Togo                          </option>
                                            <option value="tk">    Tokelau                          </option>
                                            <option value="to">    Tonga                          </option>
                                            <option value="tt">    Trinidad and Tobago                          </option>
                                            <option value="tn">    Tunisia                          </option>
                                            <option value="tr">    Turkey                          </option>
                                            <option value="tm">    Turkmenistan                          </option>
                                            <option value="tc">    Turks and Caicos Islands                          </option>
                                            <option value="tv">    Tuvalu                          </option>
                                            <option value="um">    U.S. Minor Outlying Islands                          </option>
                                            <option value="ug">    Uganda                          </option>
                                            <option value="ua">    Ukraine                          </option>
                                            <option value="ae">    United Arab Emirates                          </option>
                                            <option value="gb">    United Kingdom                          </option>
                                            <option value="us">    United States of America                          </option>
                                            <option value="uy">    Uruguay                          </option>
                                            <option value="uz">    Uzbekistan                          </option>
                                            <option value="vu">    Vanuatu                          </option>
                                            <option value="va">    Vatican City State (Holy See)                          </option>
                                            <option value="ve">    Venezuela                          </option>
                                            <option value="vn">    Vietnam                          </option>
                                            <option value="vi">    Virgin Islands                          </option>
                                            <option value="wf">    Wallis and Futuna Islands                          </option>
                                            <option value="eh">    Western Sahara                          </option>
                                            <option value="ye">    Yemen                          </option>
                                            <option value="zm">    Zambia                          </option>
                                            <option value="zw">    Zimbabwe                          </option>
                                    </select>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Email</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"  placeholder=" Email" name="email" value="{{($trainer_data)?$trainer_data->email:''}}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Website</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"  placeholder="Website" name="website" value="{{($trainer_data)?$trainer_data->website:''}}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="exampleFormControlTextarea1">Gender</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    
                                    <div class="row">

                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="radio" class="new-control-input" name="gender" value="male"
                                            {{($trainer_data)?(($trainer_data->gender=="male")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Male
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="radio" class="new-control-input" name="gender" value="female"
                                            {{($trainer_data)?(($trainer_data->gender=="female")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Female
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group mb-4 mt-1">
                                    <label for="formGroupExampleInput">MOBILE NUMBER</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                             
                                             <input type="hidden" name="phone_number_country" value="{{(@$trainer_data)?$trainer_data->phone_number_country:''}}">
                                              <select class="form-control" name="phone_number_code" id="exampleFormControlSelect1" required>
                                                <option value="">select country code</option>
                                                @foreach($country_array as $code => $country):

                                                    <?php $countryName = ucwords(strtolower($country["name"])); ?>
		                                            
                                                    <option value="{{ $country['code'] }}" data="{{ $countryName }}" {{($trainer_data)?(($trainer_data->phone_number_country==$countryName)?'selected':''):''}}>{{ $countryName }} </option>
                                                
                                                @endforeach

                                              </select>
                                                
                                        </div>
                                        <div class="col-lg-9">
                                            
                                            <input type="text" class="form-control" id="formGroupExampleInput"   placeholder="Phone Number" name="phone_number" value="{{($trainer_data)?$trainer_data->phone_number:''}}" required>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">I can train in:</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    
                                    <div class="row">
                                       
                                        
                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="session" value="session"
                                            {{($trainer_data)?(($trainer_data->session=="session")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Live Session
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="personal_training" value="personal_training"
                                                {{($trainer_data)?(($trainer_data->personal_training=="personal_training")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Personal Training
                                            </label>
                                            
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="group_training" value="group_training" {{($trainer_data)?(($trainer_data->group_training=="group_training")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Group Training
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="nutrition" value="nutrition" {{($trainer_data)?(($trainer_data->nutrition=="nutrition")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Nutrition/Meal Plan
                                            </label>
                                            
                                            
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="one_training" value="one_training" {{($trainer_data)?(($trainer_data->one_training=="one_training")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>1/1 Training
                                            </label>
                                            
                                            
                                        </div>    
                                         <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="boxing" value="boxing" {{($trainer_data)?(($trainer_data->boxing=="boxing")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Boxing
                                            </label>
                                        </div>                                       
    
                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="yoga" value="yoga" {{($trainer_data)?(($trainer_data->yoga=="yoga")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Yoga
                                            </label>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="meditation" value="meditation" {{($trainer_data)?(($trainer_data->meditation=="meditation")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Meditation
                                            </label>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="pilates" value="pilates" {{($trainer_data)?(($trainer_data->pilates=="pilates")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Pilates
                                            </label>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="stretching" value="stretching" {{($trainer_data)?(($trainer_data->stretching=="stretching")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Stretching
                                            </label>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="ballet" value="ballet" {{($trainer_data)?(($trainer_data->ballet=="ballet")?'checked':''):''}}>
                                                <span class="new-control-indicator"></span>Ballet
                                            </label>
                                        </div>                                   
    
                                        
                                    </div>                                
                                    

                                </div>

                            </div>
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Network</h4>
                                        <h6>Account Link</h6>
                                    </div>
                                </div>
                            </div>
                             <div class="widget-content widget-content-area">
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Facebook </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Facebook"  name="facebook" value="{{($trainer_data)?$trainer_data->facebook:''}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Twitter </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Twitter" name="twitter" value="{{($trainer_data)?$trainer_data->twitter:''}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Instagram </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Instagram" name="instagram" value="{{($trainer_data)?$trainer_data->instagram:''}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Youtube Video Link </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="https://www.youtube.com/watch?v=" name="youtube" value="{{($trainer_data)?$trainer_data->youtube:''}}">
                                </div>
                                
                                <input type="submit" name="time" class="btn btn-primary" value="Save Changes">

                            </div>
                        </form>
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script src="{{ asset('vendors/toastr/js/toastr.js') }}" ></script>
<script src="{{ asset('js/pages/toastr.js') }}"></script>

<script src="{{ asset('mytemp/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

<script type="text/javascript">

        //First upload
    let firstUpload = new FileUploadWithPreview('myFirstImage');

    $("#hh").hide();
$("#exampleFormControlSelect1").val($("#country_code").val());
$("#rr").change(function(){

$("#hh").show();

$("#ddd").hide();

    
});
$('select[name=phone_number_code]').change(function(){
    
    let val = $('option:selected',this).attr('data');
    
    $('input[name=phone_number_country]').val(val);
    
})
</script>
@stop
