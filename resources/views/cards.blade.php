@extends('layouts.default')
{{-- Page title --}}
@section('title')
Cards @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">

<!--end of page vendors -->
@stop
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">

    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Cards</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cards</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>




</section>
<!-- /.content -->
<section class="content">
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card p-0">
                <div class="card-header d-flex">
                    <div class="d-flex">
                        <span class="mt-8"><img src="{{ asset('img/profile/images2.jpg')}}" alt="image"
                                class="image-set"></span>
                        <div class="m-2"><strong>John Mark</strong>
                            <p>20 mins.ago</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div><img src="{{ asset('img/images/card-pic2.jpg')}}" alt="image" class="img-fluid"></div>

                </div>
                <div class="card-body">
                    <div class="card-title">Kangaroo Scene Safari
                    </div>
                    <p class="small">Free on Thursdays</p>
                    <p>Cards provide context and an entry point to more robust information and views, and their content
                        and quantity can vary greatly.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card p-0">
                <div class="card-header d-flex">
                    <div class="d-flex">
                        <span class="mt-8"><img src="{{ asset('img/profile/images2.jpg')}}" alt="image"
                                class="image-set"></span>
                        <div class="m-2"><strong>John Mark</strong>
                            <p>20 mins.ago</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div><img src="{{ asset('img/images/card-pic2.jpg')}}" alt="image" class="img-fluid"></div>

                </div>
                <div class="card-body">
                    <div class="card-title">Kangaroo Scene Safari
                    </div>
                    <p class="small">Free on Thursdays</p>
                    <p>Cards provide context and an entry point to more robust information and views.
                    </p>
                    <a href="#" class="card-link text-primary"><span
                            class="im im-icon-Sharethis mr-2 stroke"></span>SHARE</a>
                    <a href="#" class="card-link text-primary"><span
                            class="im im-icon-Internet-Explorer mr-2 stroke"></span>EXPLORE</a>

                </div>

            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">

            <div class="card mb-3 p-0">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('img/profile/bonsai.jpg')}}" class="card-img rounded-left" alt="image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card card-bg1 bg-info text-white rounded-0">
                        <img src="{{asset('img/images/card-pic3.svg')}}" class="card-img" alt="image-missing">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    {{--<div class="card bg-primary text-white text-center p-2">--}}
                    {{--<blockquote class="blockquote mb-0">--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>--}}
                    {{--<footer class="blockquote-footer text-white">--}}
                    {{--<small>--}}
                    {{--Someone famous in <cite title="Source Title">Source Title</cite>--}}
                    {{--</small>--}}
                    {{--</footer>--}}
                    {{--</blockquote>--}}
                    {{--</div>--}}
                </div>
            </div>

        </div>



    </div>

    <div class="row">

        <div class="col-lg-3 col-md-6 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                    </p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>

            </div>
            <div class="card mb-4 p-0 mt-20">
                <div class="card-header border-bottom">
                    <h6 class="card-title">Featured</h6>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Card title text</h6>
                    <p class="card-text mt-2">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-primary btn-round">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12 ">

            <div class="card mt-md-20 mb-4 o-hidden p-0 card-res">
                <img class="card-img-top img-fluid" src="{{ asset('img/images/photo-card1.jpg')}}" alt="">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, cumque!</p>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">List Item One</li>
                    <li class="list-group-item">List Item Two</li>
                    <li class="list-group-item">List Item Three</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4 o-hidden p-0 mt-md-20 card-res">
                        <img class="card-img-top img-fluid" src="{{ asset('img/images/photo-card1.jpg')}}" alt="">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, cumque!</p>
                        </div>
                        <div class="col-xl-8 col-lg-10 mb-20">
                            <a href="#" class="btn btn-primary">Go somewhere</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 card-res">
            <div class="card card-bg">
                <div class="card-header  text-right px-15">

                    <span class="photo-set"><i class="im im-icon-Love-2 text-danger"></i> </span>
                    <span class="photo-set">663</span>
                    <span class="photo-set">+Collect</span>
                </div>
                <div class="overlay"></div>
                <div class="card-footer px-15 py-15">
                    <span class="image-set"><img src="{{ asset('img/profile/images2.jpg')}}" alt="image"></span><span
                        class="pl-2 text-white">John Mark</span>
                    <span class="float-right bg-white py-2 px-3 mt-3 cursor"><i class="im im-icon-Down"></i></span>
                </div>
            </div>
            <div class="card bg-primary text-white text-center p-2">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. iste iste itaque laudantium,
                        magnam magni maiores possimus provident sed sint veniam! Consectetur, dolore?</p>
                    <footer class="blockquote-footer text-white">
                        <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
        </div>

    </div>


</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->

<!-- end of page level js -->
@stop
