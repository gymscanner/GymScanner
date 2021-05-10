<html>

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
    <link href='captcha/custom.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://edge.avangate.net/static/css-cpanel4avangate-c1213e0d984916369196eb6c2b0d6ed4-V104/20201126143128.css">
    <link rel="stylesheet" href="{{ asset('mytemp/plugins/font-icons/fontawesome/css/fontawesome.css') }}">
    <style>
        .field-icon {
            float: right;
            
            margin-left: -25px;
            margin-top: 12px;
            position: relative;
            z-index: 2;
            }
    </style>
</head>

<body style="background: url({{ asset('img/images/register_back3.jpg')}}); background-size: 100% 100%;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-1">
                <fieldset style="padding:15px;">
                    <a href="/">
                        <img alt="2checkout" style="width:65%;" src="{{ asset('./images/gymscanner logo.png')}}" border="0">
                    </a>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-1" style="background-color:#f2f2f2;">
                <!-- <form id="contact-form" method="post" action="contact.php" role="form"> -->
                <form action="{{url('register')}}" id="authentication" method="post"class="sign_validator" style="border-color: #e4e7e7;">
                     @csrf
                    <fieldset style="padding:15px;">
                    <h3 class="formTitle text-center buffer0">Sign Up for Free</h3>
                    <p class="formSubtitle text-center top-buffer0 bottom-buffer20">You're on your way to sell online globally</p>
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="first_name" type="text" name="name" class="form-control" placeholder="First Name" required="required"
                                        data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Last Name" required="required"
                                        data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required"
                                        data-error="Valid email is required.">

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="input-group mt-1">
                        <!--<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="changetype()"></span>-->
                            <input type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password" required style="padding-right:20px;!important"/>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon6" style="cursor:pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="#password"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                </span>
                            </div>
                        
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>
			<!--<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="changetype1()"></span>-->
                        <div class="form-group">
                            <div class="input-group mt-1">
                            <input type="password" class="form-control"
                                id="confirm-password" name="password_confirmation"
                                placeholder="Confirm Password" required style="padding-right:20px;!important">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon6" style="cursor:pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="#confirm-password"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text"
                                class="form-control @error('website') is-invalid @enderror"
                                id="website" name="website" placeholder="Website"/>

                            @error('website')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>                
                            <select class="browser-default custom-select" name="country" style="height:40px;">
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
                                    <option value="cw">    Curaçao                          </option>
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
                        <br>
                        <div>                
                            <select class="browser-default custom-select" name="role" style="height:40px;">
                                    <option value="2">I am a GYM</option>
                                    <option value="3" style="height:40px;">I am a Personal Trainer</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin:20px;">
                            <div id = "sell">
                            <div class="g-recaptcha" data-sitekey="6LdZ5wcaAAAAAOrSi3zsrgtiyFT38MGSUmGl20FG" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div> 
                            {{-- <div class="g-recaptcha" data-sitekey="6LdZ5wcaAAAAAOrSi3zsrgtiyFT38MGSUmGl20FG" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>--}}
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

                      

                        <div class="form-group" style="margin:20px;">
                            <input type="submit" value="GET STARTED" class="btn btn-success btn-block" style="width:150px; margin:auto;"/>
                        </div>
                        <div style="text-align:center" style="padding;20px;">
                            Already have an Account? 
                            <a href="{{ route('login')}}">
                                <strong>Sign in</strong>
                            </a>
                        </div>
                        <br>
                        <div class="showFirstStep text-center">
                                By clicking "GET STARTED" I agree to Gymscanner's
                                <a href="https://www.gymscanner.com/terms" target="_blank">Terms of Service</a>, <a href="https://www.gymscanner.com/privacy/" target="_blank">Privacy Policy</a>
                                .
                        </div>
                    </div>
                    </fieldset>
                </form>
                
            </div>
            <!-- /.8 -->
            
        </div>
        <div class="row">
            <div class="col-md-8" style="text-align:center;">
                        © Gymscanner 2021. All rights reserved.
            </div>
        </div>
        <!-- /.row-->
    </div>
    
    <!-- /.container-->
    <script>
        function changetype(){
            var pass = document.getElementById("password");
            var pass_type = pass.getAttribute("type");
            if(pass_type == "password"){
                pass.setAttribute("type", "text");
            }else{
                pass.setAttribute("type", "password");
            }
        }
	function changetype1(){
            var pass = document.getElementById("confirm-password");
            var pass_type = pass.getAttribute("type");
            if(pass_type == "password"){
                pass.setAttribute("type", "text");
            }else{
                pass.setAttribute("type", "password");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="captcha/validator.js"></script>
    <script src="captcha/contact.js"></script>

    <!-- import -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/register.js')}}"></script>
     <script src="{{ asset('mytemp/plugins/font-icons/feather/feather.min.js') }}"></script>
    <script type="text/javascript">
    
        feather.replace();

        $(document).on('click','.toggle-password',function() {

        let input = $($(this).attr("toggle"));

        let input_id = $(this).attr("toggle");

        let icon_html = '';

        if (input.attr("type") == "password") {
            input.attr("type", "text");
            input.attr("data", "eye");
            icon_html = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye toggle-password" toggle="'+input_id+'"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
        } else {
            input.attr("type", "password");
            input.attr("data", "eye-off");
            icon_html ='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="'+input_id+'"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>';
        }

        $(input).next('div').find('span').find('svg').remove();

        $(input).next('div').find('span').html(icon_html);
        
    });

    </script>
</body>

</html>