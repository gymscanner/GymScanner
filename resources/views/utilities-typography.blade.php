@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Typography @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->


    <!--end of page vendors -->
@stop
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Cards</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Typography</li>
            </ol>
        </div>
    </section>
    <!-- /.content -->
    <section class="content typography">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card">
                    <h4 class="card-title"><strong>Misc</strong></h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h5>Text truncate</h5>
                                <p class="text-truncate">Apply <code class="code-bold">.text-truncate</code> to any text element to crop your text with ellipse if it is larger than line width.</p>

                            </div>
                            <div class="col-lg-5 col-12 code-preview ">
                                <p class="col-5 text-truncate">Praeterea iter est quasdam res quas ex communi.</p>
                                <div class="card-footer border-top-0">
                                &lt;div class="text-truncate"&gt;Your long text&lt;/div&gt;
                                </div>

                            </div><br>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6 col-12 mt-3">
                    <h5>Font Size
                    </h5>
                     <p>Apply <code class="code-bold">.fs-{value}</code> to any element, where <code>{value}</code> can be any of: </p>
                        <ul  class="ul-tag">
                            <li>8 9 10 11 12 13 14 15 16 17 18 19 </li>
                            <li>20 22 24 25 26 28</li>
                            <li>30 35 40 45 50</li>
                            <li>60 70 80 90;</li>
                        </ul>
                        </div>



                        <div class="col-lg-6 col-12 mt-3">
                            <div class="card-body">
                                <table class="table table-borderless border border-secondary text-center">
                                    <tr>
                                        <td><p class="fs-10">font size 10px</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="fs-10"&gt;</code>Font Size 10px<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="fs-18">Font Size 18px</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="fs-18"&gt;</code>Font Size 18px<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="fs-26">Font Size 26px</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="fs-26"&gt;</code>Font Size 26px<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>

                                </table>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6 col-12 mt-3">
                            <h5>Font weight
                            </h5>
                            <p>Apply <code class="code-bold">.fw-{value}</code> to any element, where <code>{value}</code> can be any of: 100, 200, 300, 400, 500, 600, 700, 800, 900</p>
                        </div>



                        <div class="col-lg-6 col-12 mt-3">
                            <div class="card-body">
                                <table class="table table-borderless border border-secondary text-center">
                                    <tr>
                                        <td><p class="lead fw-100">Font Weight 100</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lead fw-100"&gt;</code>Font Weight 100<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="lead fw-300">Font Weight 300</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lead fw-300"&gt;</code>Font Weight 300<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="lead fw-500">Font Weight 500</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lead fw-500"&gt;</code>Font Weight 500<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="lead fw-700">Font Weight 700</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lead fw-700"&gt;</code>Font Weight 700<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="lead fw-900">Font Weight 900</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lead fw-900"&gt;</code>Font Weight 900<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6 col-12 mt-3">
                            <h5>Line height
                            </h5>
                            <p>Apply <code class="code-bold">.lh-{size}</code> to any element, where <code>{size}</code> can be any of:</p>
                            <ul class="ul-tag">
                                <li>0, 1, 2, 3, 4, 5</li>
                                <li>15, 25, 35, 45</li>
                                <li>11, 12, 13, 14, 15, 16, 17, 18, 19</li>
                                <li>22, 24, 26, 28</li>
                            </ul>
                            <p>To better understanding of values, take a look at class definition of some of them:</p>
                            <ul class="ul-tag">
                                <li><code>.lh-1  { line-height: 1; }</code></li>
                                <li><code>.lh-15 { line-height: 1.5; }</code></li>
                                <li><code>.lh-24 { line-height: 2.4; }</code></li>
                            </ul>
                        </div>



                        <div class="col-lg-6 col-12 mt-3">
                            <div class="card-body">
                                <table class="table table-borderless border border-secondary ">
                                    <tr>
                                        <td><p class="lh-1">Line Height 1</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lh-1"&gt;</code>line height 1<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="lh-18">Line Height 1.8</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lh-1.8"&gt;</code>line height 1.8<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="lh-2">Line Height 2</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lh-2"&gt;</code>line height 2<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="lh-25">Line Height 2.5</p></td>
                                        <td class="bg-secondary"><div><code>&lt;p class="lh-2.5"&gt;</code>line height 2.5<code>&lt;/p&gt;</code></div>
                                        </td>
                                    </tr>

                                </table>
                            </div>


                        </div>
                    </div>

                </div>


            </div>

        </div>

    </section>

@stop
@section('footer_scripts')
    <!--   page level js ----------->

    <!-- end of page level js -->
@stop
