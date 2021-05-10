<div id="menu" role="navigation">
    <ul class="navigation list-unstyled" id="demo">
        <li>
            <br>
            <img src="{{ asset('./images/logo_white.png')}}" alt="image missing" style="width:100%;">
            <br>
            <br>
            <br>
        </li>
        @if(auth()->user()->role==1)
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('admin') }}">
                <span class="mm-text ">DASHBOARD</span>
                <span class="menu-icon"><i class="im im-icon-Home"></i></span>
            </a>
        </li>
        @endif
        @if(auth()->user()->role==1)
        <li {!! (Request::is('builder') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('admin/users') }}">
                <span class="mm-text ">USERS PROFILES</span>
                <span class="menu-icon"><span class="im  im-icon-Profile fs-20"></span></span>
            </a>
        </li>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('admin/membership') }}">
                <span class="mm-text ">MEMBERSHIP MANAGER</span>
                <span class="menu-icon"><i class="im im-icon-Money-2"></i></span>
            </a>
        </li>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('admin/tourist') }}">
                <span class="mm-text ">TOURIST PASS MANAGER</span>
                <span class="menu-icon"><i class="im im-icon-Compass-Rose"></i></span>
            </a>
        </li>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('admin/bank') }}">
                <span class="mm-text ">BANK MANGER</span>
                <span class="menu-icon"><i class="im im-icon-Books"></i></span>
            </a>
        </li>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('admin/document') }}">
                <span class="mm-text ">DOCUMENT MANAGER</span>
                <span class="menu-icon"><i class="im im-icon-File-Upload"></i></span>
            </a>
        </li>
        @elseif(auth()->user()->role==3)
        <li {!! (Request::is('builder') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('personal_myprofile') }}">
                <span class="mm-text ">PROFILE</span>
                <span class="menu-icon"><span class="im  im-icon-Profile fs-20"></span></span>
            </a>
        </li>   
        @else
        <li {!! (Request::is('builder') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('myprofile') }}">
                <span class="mm-text ">PROFILE</span>
                <span class="menu-icon"><span class="im  im-icon-Profile fs-20"></span></span>
            </a>
        </li>
        @endif
        @if(auth()->user()->role==2)
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('membership') }}">
                <span class="mm-text ">MEMBERSHIP PLANS</span>
                <span class="menu-icon"><i class="im im-icon-Money-2"></i></span>
            </a>
        </li>
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('myprofile.touristpass') }}">
                <span class="mm-text ">TOURIST PASS</span>
                <span class="menu-icon"><i class="im im-icon-Compass-Rose"></i></span>
            </a>
        </li>
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('myprofile.bank') }}">
                <span class="mm-text ">BANK ACCOUNT</span>
                <span class="menu-icon"><i class="im im-icon-Bank"></i></span>
            </a>
        </li>
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('myprofile.document') }}">
                <span class="mm-text ">DOCUMENTS</span>
                <span class="menu-icon"><i class="im im-icon-File-Upload"></i></span>
            </a>
        </li>
        @endif
        @if(auth()->user()->role==3)
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('personal_myprofile') }}">
                <span class="mm-text ">MEMBERSHIP PLANS</span>
                <span class="menu-icon"><i class="im im-icon-Money-2"></i></span>
            </a>
        </li>
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('personal_profile.bank') }}">
                <span class="mm-text ">BANK ACCOUNT</span>
                <span class="menu-icon"><i class="im im-icon-Bank"></i></span>
            </a>
        </li>
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('myprofile.document') }}">
                <span class="mm-text ">DOCUMENTS</span>
                <span class="menu-icon"><i class="im im-icon-File-Upload"></i></span>
            </a>
        </li>
        @endif
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('myprofile.changepass') }}">
                <span class="mm-text ">CHANGE PASSWORD</span>
                <span class="menu-icon"><i class="fas fa-key"></i></span>
            </a>
        </li>
        @if(auth()->user()->role!=1)
        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ route('myprofile.sumbit_admin') }}">
                <span class="mm-text ">NOTIFY GYMSCANNER</span>
                <span class="menu-icon"><i class="im im-icon-Bell"></i></span>
                {{-- <span class="menu-icon"><i class="im im-icon-Close"></i></span> --}}
            </a>
        </li>
        @endif
        <!-- <li {!! (Request::is('buttons') || Request::is('alerts') || Request::is('dropdown') || Request::is('cards') ||
            Request::is('forms') || Request::is('form_layout')|| Request::is('form_examples') ||
            Request::is('accordion') || Request::is('progress_bar') || Request::is('pagination') || Request::is('icons')
            || Request::is('tabs') || Request::is('modals') ? 'class="menu-dropdown active"' : "class='menu-dropdown'" )
            !!}>
            <a href="#">
                <span class="mm-text ">Content</span>
                <span class="menu-icon "> <i class="im im-icon-Pen-4"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled"> -->


                <!-- <li {!! (Request::is('alerts') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('alerts') }}">
                        Alerts
                    </a>
                </li>
                <li {!! (Request::is('buttons') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('buttons') }}">
                        Buttons
                    </a>
                </li>
                <li {!! (Request::is('cards') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('cards') }}">
                        <span class="mm-text ">Cards</span>
                    </a>
                </li>
                <li {!! (Request::is('dropdown') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('dropdown') }}">

                        <span class="mm-text ">Dropdown</span>
                    </a>
                </li>
                <li {!! (Request::is('forms') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('forms') }}">

                        <span class="mm-text ">Forms</span>
                    </a>
                </li>
                <li {!! (Request::is('form_layout') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('form_layout') }}">

                        <span class="mm-text ">Form Layouts</span>
                    </a>
                </li>
                <li {!! (Request::is('form_examples') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('form_examples') }}">

                        <span class="mm-text ">Form Examples</span>
                    </a>
                </li>
                <li {!! (Request::is('accordion') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('accordion') }}">

                        <span class="mm-text ">Accordion</span>
                    </a>
                </li>
                <li {!! (Request::is('progress_bar') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('progress_bar') }}">
                        <span class="mm-text ">Progressbar</span>
                    </a>
                </li>
                <li {!! (Request::is('pagination') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('pagination') }}">
                        <span class="mm-text ">Pagination</span>
                    </a>
                </li> -->

                <!-- <li {!! (Request::is('icons') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('icons') }}">
                        <span class="mm-text ">Icons</span>
                    </a>
                </li> -->
                
                <!-- <li {!! (Request::is('tabs') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('tabs') }}">
                        <span class="mm-text ">Tabs</span>
                    </a>
                </li>
                <li {!! (Request::is('modals') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('modals') }}">
                        <span class="mm-text ">Modals</span>
                    </a>
                </li> -->
            </ul>
        </li>

        <!-- <li {!! (Request::is('table') || Request::is('data_table') ? 'class="menu-dropdown active"'
            : "class='menu-dropdown'" ) !!}>
            <a href="#">
                <span class="mm-text ">Tables</span>
                <span class="menu-icon "> <i class="im im-icon-Window-2"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('table') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('table') }}">
                        <span class="mm-text ">Table</span>
                    </a>
                </li>
                <li {!! (Request::is('data_table') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('data_table') }}">
                        Advanced Data Table
                    </a>
                </li>
            </ul>
        </li>

        <li {!! (Request::is('advanced_select') || Request::is('toastr') ? 'class="menu-dropdown active"'
            : "class='menu-dropdown'" ) !!}>
            <a href="#">
                <span class="mm-text ">Pages</span>
                <span class="menu-icon "> <i class="im im-icon-Books"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('advanced_select') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('advanced_select') }}">
                        Advanced Form Elements
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('toastr') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('toastr') }}">
                        Toastr Notification
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('sweetalert') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('sweetalert') }}">
                        Advanced Alerts
                    </a>
                </li>
            </ul>
        </li> -->
        @include("layouts/menu")
    </ul>
    <!-- / .navigation -->
</div>
