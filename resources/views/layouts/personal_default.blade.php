<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}"/>
    <link href="{{ asset('mytemp/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('mytemp/assets/js/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('mytemp/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('mytemp/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('mytemp/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('mytemp/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('mytemp/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('mytemp/plugins/font-icons/fontawesome/css/regular.css') }}">

    <!-- added by Nemanja -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ended -->
    
    <link rel="stylesheet" href="{{ asset('mytemp/plugins/font-icons/fontawesome/css/fontawesome.css') }}">
    <!-- <script src="{{ asset('mytemp/assets/js/libs/jquery-3.1.1.min.js') }}"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <link href="{{ asset('mytemp/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('mytemp/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
   
    <style>

        .navbar .theme-brand li.theme-logo img{
            min-width: 255px;
            height: 46px;
            border-radius: 6px;
        }

        .widget.box .widget-header {
            padding : 0px 21px;
        }

        #sidebar ul.menu-categories li.menu>.dropdown-toggle[data-active=true] {
                background: black;
                border-radius: 0px!important;
        }

        .sub-header-container .breadcrumb-one .breadcrumb-item a
        {
          color:#393939;
          font-weight:650!important;
        }

        #sidebar ul.menu-categories li.menu > a span:not(.badge) {
          color:#393939;
          font-weight:650!important;
        }

        .mysidebar{
            margin-left:15px!important;
        }

        
        #sidebar ul.menu-categories li.menu>.dropdown-toggle svg {
            margin-right:11px!important;
            margin-left:1px!important;
            width:19px!important;
        }
        .widget-header,.statbox.widget.box,.widget-content.widget-content-area{

            background:#fafafa!important;
            
        }
        
        h4{
            font-weight:600!important;
            color:#393939;
        }
        
        .form-group label,label
        {
            font-size: 15px;
            color: #393939;
            font-weight: 600;
            font-family: "Nunito";

        }

        .form-control
        {
            height: 46px;
            border-radius: 5px;
            filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));
            background-color: #ffffff;
            border: 1px solid #d8d8d8;
            
            font-size: 15px!important;
            color: #b7b7b7!important;
            font-weight: 300!important;
            font-style: italic!important;
            font-family: "Nunito";

        }

        ::-webkit-input-placeholder { /* Edge */
            font-size: 15px;
            color: #b7b7b7;
            font-weight: 300;
            font-style: italic;
            font-family: "Nunito";
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            font-size: 15px;
            color: #b7b7b7;
            font-weight: 300;
            font-style: italic;
            font-family: "Nunito";
        }

        ::placeholder {
            font-size: 15px;
            color: #b7b7b7;
            font-weight: 300;
            font-style: italic;
            font-family: "Nunito";
        }

        .btn-primary,.btn-danger{
            font-size: 15px!important;
            /* color: #fafafa; */
            font-weight: 600!important;
            font-family: "Nunito";
        }

        .footer-wrapper .footer-section p {
            font-size: 15px;
            color: #393939;
            font-weight: 600;
            font-family: "Nunito";
        }

        .footer-wrapper {
            padding: 14px 0px 0px 0px!important;
        }

                        
        
    </style>
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                     @if(auth()->user()->role==1)
                    <a href="{{ URL::to('admin') }}">
                     @elseif(auth()->user()->role==3)
                   
                        <a href="{{ route('personal_myprofile') }}">
                            
                    @else
                  
                        <a href="{{ URL::to('myprofile') }}">
                          
                    @endif
                        <img src="{{ asset('images/a_logo.png') }}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="javascript:void(0)" class="nav-link"></a>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                         <div class="search-bar">
                             <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                         </div>
                    </form> -->
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">

                <!-- <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('mytemp/assets/img/england2.png') }}" class="flag-width" alt="flag" style="width:25px;height:19px;">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{ asset('mytemp/assets/img/romanian.png') }}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Romanian</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{ asset('mytemp/assets/img/england2.png') }}" class="flag-width" alt="flag" style="width: 25px!important;> <span class="align-self-center">&nbsp;English</span></a>
                    </div>
                </li> -->

                <!--<li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">KY</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <img src="{{ asset('mytemp/assets/img/90x90.jpg') }}" class="img-fluid mr-2" alt="avatar">
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">OG</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </li>-->

                <?php $notifications = App\Http\Controllers\ProfileController::getNotifications();
                ?>
                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                         @if(count($notifications) > 0)
                        <span class="badge badge-success"></span>
                        @endif
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown" style="height: 350px;overflow: overlay;">>
                        <div class="notification-scroll">

                            @if(count($notifications) > 0)
                            @foreach($notifications as $key => $v)

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg> -->
                                    @if(auth()->user()->role==1)
                                    <i data-feather="user"></i>
                                    <div class="media-body">
                                        <div class="data-info">

                                                    @if($v->role == 3)
                                                    <span><a href="{{ url('admin/user_personal_view',$v->user_id) }}">{{ $v->username }}</a></span>
                                                    @else
                                                    <span><a href="{{ url('admin/user_view',$v->user_id) }}">{{ $v->username }}</a></span>

                                                    @endif
                                                    <span class="ml-4" style="font-size:11px;">{{ $v->ext_id }}</span>
                                                
                                                    <p class="">{{ $v->value }}@if($v->name == 'COMPLETE_PROFILE')<i data-feather="check-circle" style="width: 14px;" title="approve" class="app_live_acc" data-userid="{{ $v->user_id }}"></i>@endif</p>
                                                   

                                                    
                                        </div>
                                    </div>
                                    @else

                                    <i data-feather="check-circle"></i>                                    
                                    <div class="media-body">
                                        <div class="data-info">
                                                
                                            <p class="">{{ $v->value }}</p>

                                        </div>
                                    </div>
                                    
                                    @endif
                                </div>
                            </div>

                            @endforeach
                            @else
                            <p>No notification found</p>
                            @endif

                        </div>
                    </div>
                </li>
                
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         <?php 
                         $avatar = App\Http\Controllers\ProfileController::getAvatar();
                         if(!empty($avatar))
                         {
                             $avatar_path = $avatar->avatar;
                         }
                         else
                         {
                             $avatar_path = 'mytemp/assets/img/b_img.jpg';
                         }
                         ?>
                         
                        <img src="{{ asset($avatar_path) }}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="">{!! strtoupper($uuid) !!}</a>
                            </div>
                            <div class="dropdown-item">
                            
                                @if(auth()->user()->role==3)
                            
                                    <a href="{{ route('personal_profile.changepass') }}">
                                        
                                @else
                            
                                    <a href="{{ route('myprofile.changepass') }}">
                                    
                                @endif
                                
                                <i data-feather="rotate-cw"></i> Change Password</a>

                                
                            </div>

                            <div class="dropdown-item">
                                <a href="{{ route('myaccount.status') }}">
                                    <i data-feather="user"></i> My account
                                </a>
                            </div>
                            
                            <div class="dropdown-item">
                                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                   
                                    {{ __('Logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                    @csrf
                                </form>
                              
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
              <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
              </svg>-->
              <i data-feather="align-justify"></i>
            </a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">  @yield('title') </a></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-auto ">
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <!-- <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Settings</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Settings</a>
                            <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                            <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                            <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                        </div> -->
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme" style="left:0px!important;">
            
            <nav id="sidebar" style="width:105%;">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample" style="padding-right:0px !important">
                    @if(auth()->user()->role==1)
                    @else
                    <li class="menu mysidebar" {!! (Request::is('builder') ? 'class="active"' : '' ) !!}>
                        <a href="{{ route('personal_myprofile') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="far fa-user" style="font-size: 16px;margin-left: 4px;position: absolute;color:#444141db;"></i>
                                <span style="margin-left: 36px;">Profile </span>
                            </div>
                        </a>
                    </li>
                    @endif
                    <li class="menu mysidebar" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="{{ route('personal_myprofile.my_branding') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="box"></i>
                                <span>My Branding</span>
                            </div>
                        </a>
                    </li>

                    <!--<li class="menu" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="#" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="calendar"></i>
                                <span>My Schedule</span>
                            </div>
                        </a>
                    </li>-->
                    <li class="menu mysidebar" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="{{ route('personal_membership.index') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="layers"></i>
                                <span>Membership  Plans</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu mysidebar" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="{{ route('personal_profile.bank')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="credit-card"></i>
                                <span>Bank  Account </span>
                            </div>
                        </a>
                    </li>
                    <li class="menu mysidebar" {!! (Request::is('') ? 'class="active"' : '' ) !!}>
                        <a href="{{ route('myprofile.document') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="book"></i>
                                <span> Documents</span>
                            </div>
                        </a>
                    </li>
                    @if(auth()->user()->role==2)
                    <li class="menu mysidebar" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="{{ route('myprofile.touristpass') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="user"></i>
                                <span>Tourist  Pass</span>
                            </div>
                        </a>
                    </li>
                     @endif

                   @if(auth()->user()->role!=1)
                   
                    <li class="menu mysidebar" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="{{ route('myprofile.sumbit_admin') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="bell"></i>
                                <span>Notify Gymscanner</span>
                            </div>
                        </a>
                    </li>
                    @endif

                     <br/><br/>
                    <br/><br/>
                 
                    
                    

                    <li style="background-color: black;padding: 5px;" class="menu " {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                      <div style="border: 1px solid #4e4b4b;border-radius: 4px;margin-left: -3px;padding: 6px;">
                        <a href="{{ route('profile.contact_us') }}" data-active="true" aria-expanded="false" class="dropdown-toggle">
                            <div class="" style="padding-left: 59px!important;">
                                <i data-feather="mail" style="width: 20px;height: 18px;color: #d8d8d8"></i>
                                <span style="color: #e0dddd;font-size: 12px;font-weight: 600;">Contact Us</span>
                            </div>
                        </a>
                      </div>
                    </li>
                    <br>

                    <li class="menu mysidebar" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="http://www.gymscanner.com/terms" target="blank" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="book-open"></i>
                                <span>Terms of Use</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu mysidebar" {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
                        <a href="http://www.gymscanner.com/privacy" target="blank" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="shield"></i>
                                <span>Privacy</span>
                            </div>
                        </a>
                    </li>
                    
                                        
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div style="padding-right: 18px;padding-left: 62px;">

                @yield('content')
            
            </div>
                <div class="row footer-wrapper">
                  
                    <div class="col-9" style="padding-left:0px!important;;padding-right:0px!important;">
                        <div class="footer-section f-section-1">
                            <p class="">©Gymscanner 2021. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left:0px!important;;padding-right:0px!important;">
                    <div class="footer-section f-section-2 " style="text-align:right ">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                    </div>
                </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('mytemp/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('mytemp/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mytemp/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mytemp/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('mytemp/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('mytemp/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mytemp/assets/js/dashboard/dash_1.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="{{ asset('mytemp/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
    <script src="{{ asset('mytemp/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('mytemp/plugins/font-icons/feather/feather.min.js') }}"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
    <script>
        //avater upload
        $(document).ready(function(){
        // Prepare the preview for profile picture
            $("#wizard-picture").change(function(){
                readURL(this);
            });
        });
        function readURL(input) {
            var _URL = window.URL || window.webkitURL;
            if (input.files && input.files[0]) {
                img = new Image();
                var objectUrl = _URL.createObjectURL(input.files[0]);
                img.onload = function () {
                    if (img.width == 512 && img.height == 512) {
                        $('#wizardPicturePreview').attr('src', objectUrl).fadeIn('slow');
                        document.getElementById('avatar').click();
                    } else {
                        alert("Image size must be as like as 512px*512px");
                        $(input).val("");
                    }
                    _URL.revokeObjectURL(objectUrl);
                };
                img.src = objectUrl;
            }
        }

         $('.app_live_acc').click(function(){

             
            let user_id = $(this).attr('data-userid');

            // alert(user_id);
            

        })


        // $(document).on('change','select',function(){

        //     let val = $(this).val();

        //     if(val == 'not' || val == '')
        //     {
        //         alert('notand nul');
        //         $(this).addClass('selected_placeholder');

        //     }
        //     else
        //     {

        //         alert('fill');
        //         $(this).removeClass('selected_placeholder');

        //     }

        // })

    </script>
    @yield('footer_scripts')
</body>
</html>
