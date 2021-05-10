@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Tabs @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->

    <!--end of page vendors -->
@stop
{{-- Page content --}}
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div aria-label="breadcrumb" class="card-breadcrumb">
                <h1>Tabs</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Content</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tabs</li>
                </ol>
            </div>
            <div class="separator-breadcrumb border-top"></div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card ">
                        <div class="card-header text-primary">Basic Tabs </div>
                        <hr>
                        <div class="col-12">
                            <ul class="nav nav-tabs pt-15" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content py-3" id="myTabContent">
                                <div class="tab-pane fade show active text-justify" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores aut blanditiis culpa debitis dolore dolorum eos fuga
                                    in magni molestiae porro quaerat, sequi sint veritatis vero voluptate, voluptates voluptatibus!
                                </div>
                                <div class="tab-pane fade py-3 text-justify" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad architecto atque consequuntur dolorem doloribus, dolorum ducimus,
                                    fuga fugiat incidunt inventore laboriosam magnam, mollitia ratione reprehenderit ut veniam vero voluptas.
                                </div>
                                <div class="tab-pane fade py-3 text-justify" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda culpa deserunt in iste molestias nemo nihil, nisi,
                                    nulla odio quis reiciendis, repellendus voluptatibus? Itaque iure molestias quae recusandae ut?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header text-primary">Tabs with Icons</div>
                        <hr>
                        <div class="col-12">
                            <ul class="nav nav-tabs pt-15" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="homeicon-tab" data-toggle="tab" href="#homeicon" role="tab" aria-controls="home" aria-selected="true">
                                        <i class="im im-icon-Home px-2"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profileicon-tab" data-toggle="tab" href="#profileicon" role="tab" aria-controls="profile" aria-selected="false">
                                        <i class="im im-icon-User px-2"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contacticon-tab" data-toggle="tab" href="#contacticon" role="tab" aria-controls="contact" aria-selected="false">
                                        <i class="im im-icon-Phone-3G px-2"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content py-3" id="myTabContenticon">
                                <div class="tab-pane fade show active text-justify" id="homeicon" role="tabpanel" aria-labelledby="home-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores aut blanditiis culpa debitis dolore dolorum eos fuga
                                    in magni molestiae porro quaerat, sequi sint veritatis vero voluptate, voluptates voluptatibus!
                                </div>
                                <div class="tab-pane fade py-3 text-justify" id="profileicon" role="tabpanel" aria-labelledby="profile-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad architecto atque consequuntur dolorem doloribus, dolorum ducimus,
                                    fuga fugiat incidunt inventore laboriosam magnam, mollitia ratione reprehenderit ut veniam vero voluptas.
                                </div>
                                <div class="tab-pane fade py-3 text-justify" id="contacticon" role="tabpanel" aria-labelledby="contact-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda culpa deserunt in iste molestias nemo nihil, nisi,
                                    nulla odio quis reiciendis, repellendus voluptatibus? Itaque iure molestias quae recusandae ut?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-stretch d-flex">
                    <div class="card ">
                        <div class="card-header text-primary">Tabs with Dropdowns</div>
                        <hr>
                        <div class="col-12">

                             <ul class="nav nav-tabs pt-15" id="dropdwonTab">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="homedropdown-tab" data-toggle="tab" href="#homedropdown" aria-controls="home" aria-expanded="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profiledropdown-tab" data-toggle="tab" href="#profiledropdown" aria-controls="profile" aria-expanded="false">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" data-toggle="tab" aria-controls="dropdown2" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content " id="dropdwonTabContent">
                                <div role="tabpanel" class="tab-pane active show py-3 text-justify" id="homedropdown" aria-labelledby="homedropdown-tab" aria-expanded="true">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                        locavore.
                                    </p>
                                </div>
                                <div class="tab-pane py-3 text-justify" id="profiledropdown" role="tabpanel" aria-labelledby="profiledropdown-tab" aria-expanded="false">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="tab-pane py-3" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="true">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim tempora voluptas fuga exercitationem sunt officiis hic accusantium quos, sapiente harum voluptatum facere accusamus impedit at quia ipsum, suscipit praesentium
                                        natus!
                                    </p>
                                </div>
                                <div class="tab-pane py-3 text-justify" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                        locavore.
                                    </p>
                                </div>
                                <div class="tab-pane py-3 text-justify" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate iusto amet rerum aut excepturi sunt, incidunt eaque architecto commodi deserunt, deleniti beatae ducimus. Vel laboriosam iusto nam doloribus
                                        error!
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-stretch d-flex">
                    <div class="card ">
                        <div class="card-header text-primary">Tabs with Pills</div>
                        <hr>
                        <div class="col-12">
                            <ul class="nav nav-pills mb-3 pt-15" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active pb-3 text-justify" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequatur consequuntur culpa doloremque eaque eos,
                                    esse fugiat fugit impedit nemo quasi quia quos repudiandae rerum totam ut. Placeat, sunt.</div>
                                <div class="tab-pane fade pb-3 text-justify" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut commodi consequuntur, ea eaque earum eligendi eum impedit
                                    in incidunt laudantium maxime minus necessitatibus nisi odio sequi tempora totam ullam.</div>
                                <div class="tab-pane fade pb-3 text-justify" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda autem beatae corporis dolorem est et,
                                    iure minus molestiae mollitia nobis quam quis quisquam quo sunt tenetur totam ullam, voluptates!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card ">
                        <div class="card-header text-primary">Tabs with Vertical Pills</div>
                        <hr>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3 py-15">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                    </div>
                                </div>
                                <div class="col-9 align-self-center">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active text-justify" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur deserunt dolor dolore doloremque dolores in labore,
                                            laborum laudantium mollitia obcaecati perferendis quaerat quam quasi quo suscipit voluptas voluptatem voluptates,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur deserunt dolor dolore doloremque dolores in labore,
                                            laborum laudantium mollitia obcaecati perferendis quaerat quam quasi quo suscipit voluptas voluptatem voluptates.</div>
                                        <div class="tab-pane fade text-justify" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi assumenda enim eos, error est exercitationem fugit,
                                            in labore magnam minima necessitatibus, nesciunt nobis pariatur quam quasi ratione repellat voluptas,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur deserunt dolor dolore doloremque dolores in labore,
                                            laborum laudantium mollitia obcaecati perferendis quaerat quam quasi quo suscipit voluptas voluptatem voluptates.</div>
                                        <div class="tab-pane fade text-justify" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fuga hic iusto maiores nostrum?
                                            Aut nulla numquam qui quo temporibus? Aspernatur autem magnam nihil obcaecati perspiciatis! Ea quam suscipit veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur deserunt dolor dolore doloremque dolores in labore,
                                            laborum laudantium mollitia obcaecati perferendis quaerat quam quasi quo suscipit voluptas voluptatem voluptates.</div>
                                        <div class="tab-pane fade text-justify" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad illo nisi quaerat repellendus tempora! Alias,
                                            doloremque est facere harum hic ipsum laboriosam nemo nobis pariatur quae quia quo repellendus, sequi,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur deserunt dolor dolore doloremque dolores in labore,
                                            laborum laudantium mollitia obcaecati perferendis quaerat quam quasi quo suscipit voluptas voluptatem voluptates.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </section>
        <!-- /.content -->

@stop
@section('footer_scripts')
    <!-- end of page level js -->
@stop

