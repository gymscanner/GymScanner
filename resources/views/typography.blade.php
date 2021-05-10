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
        <h1>Typography</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Typography</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row ">
        <div class="col-lg-12 col-12 typography">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h4 class="card-header px-0">HEADINGS</h4>
                        <p>Headings are the first thing you ll see or read in a document. We wanted to make them perfect
                            in both size and colour.</p>

                        <div class="card-body">
                            <h1>h1. Bootstrap heading</h1>
                            <h2>h2. Bootstrap heading</h2>
                            <h3>h3. Bootstrap heading</h3>
                            <h4>h4. Bootstrap heading</h4>
                            <h5>h5. Bootstrap heading</h5>
                        </div>

                    </div>

                    <div class="col-md-6 col-12">
                        <h4 class="card-header px-0">DISPLAY HEADINGS</h4>
                        <div class="card-body">
                            <h1 class="display-1">Display 1</h1>
                            <h1 class="display-2">Display 2</h1>
                            <h1 class="display-3">Display 3</h1>
                            <h1 class="display-4">Display 4</h1>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">

                <h4 class="card-header px-0">PARAGRAPH</h4>
                <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
                <div class="card-body">
                    <div class="row card-set">
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <h4 class="card-header">Lead Text</h4>
                                <div class="card-body text-justify">
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita non
                                        obcaecati. Dignissimos ea est id laboriosam laborum
                                        laudantium molestias nesciunt nisi odit officia quos, repellat sit ut, vel
                                        voluptatem?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <h4 class="card-header">Body Text</h4>
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita non
                                        obcaecati. Dignissimos ea est id laboriosam laborum
                                        laudantium molestias nesciunt nisi odit officia quos, repellat sit ut, vel
                                        voluptatem?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <h4 class="card-header">Left Alignment</h4>
                                <div class="card-body">
                                    <p class="text-left">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita non
                                        obcaecati. Dignissimos ea est id laboriosam laborum
                                        laudantium molestias nesciunt nisi odit officia quos, repellat sit ut, vel
                                        voluptatem?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <h4 class="card-header">Center Alignment</h4>
                                <div class="card-body">
                                    <p class="text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita non
                                        obcaecati. Dignissimos ea est id laboriosam laborum
                                        laudantium molestias nesciunt nisi odit officia quos, repellat sit ut, vel
                                        voluptatem?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <h4 class="card-header">Right Alignment</h4>
                                <div class="card-body">
                                    <p class="text-right">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita non
                                        obcaecati. Dignissimos ea est id laboriosam laborum
                                        laudantium molestias nesciunt nisi odit officia quos, repellat sit ut, vel
                                        voluptatem?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <h4 class="card-header">Justify Alignment</h4>
                                <div class="card-body">
                                    <p class="text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita non
                                        obcaecati. Dignissimos ea est id laboriosam laborum
                                        laudantium molestias nesciunt nisi odit officia quos, repellat sit ut, vel
                                        voluptatem?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <h4 class="card-header px-0">INLINE TEXT ELEMENT</h4>
                <p>Styling for common inline HTML5 elements.</p>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td class="text-danger">&lt;mark&gt;</td>
                            <td>
                                <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-danger">&lt;del&gt;</td>
                            <td>
                                <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-danger">&lt;s&gt;</td>
                            <td>
                                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-danger">&lt;ins&gt;</td>
                            <td>
                                <p><ins>This line of text is meant to be treated as an addition to the document.</ins>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-danger">&lt;u&gt;</td>
                            <td>
                                <p><u>This line of text will render as underlined</u></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-danger">&lt;small&gt;</td>
                            <td>
                                <p><small>This line of text is meant to be treated as fine print.</small></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-danger">&lt;strong&gt;</td>
                            <td>
                                <p><strong>This line rendered as bold text.</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-danger">&lt;em&gt;</td>
                            <td>
                                <p><em>This line rendered as italicized text.</em></p>
                            </td>
                        </tr>
                    </table>


                </div>
                <hr>
                <div class="card-body">
                    <h4>TEXT UTILITIES</h4>
                    <p>Change text alignment, transform, style, weight, etc. with our <a
                            href="{{url('utilities-typography')}}">typography utilities</a>, and change color or
                        background-color using <a href="{{url('color_utilities')}}">color utilities</a> and <a
                            href="{{url('spacing_utilities')}}">spacing utilities</a>.</p>
                </div>
            </div>
            <div class="card">
                <h4>List Style</h4>
                Styling of Different List in HTML
                <div class="row card-set">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header"><code>&lt;ul&gt;</code></div>
                            <div class="card-body">
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header"><code>&lt;ol&gt;</code></div>
                            <div class="card-body">
                                <ol>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header"><code>&lt;ul class="list-unstyled"&gt;</code></div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-stretch d-flex">
                        <div class="card ">
                            <div class="card-header"><code>&lt;ul class="list-inline"&gt;</code></div>
                            <div class="card-body">
                                <ul class="list-inline">
                                    <li class="list-inline-item">Lorem ipsum</li>
                                    <li class="list-inline-item">Phasellus iaculis</li>
                                    <li class="list-inline-item">Nulla volutpat</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <h4>Description list alignment</h4>
                <p>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic
                    mixins). For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate
                    the text with an ellipsis.</p>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">
                            <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                            <p>Donec id elit non mi porta gravida at eget metus.</p>
                        </dd>

                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                            fermentum massa justo sit amet risus.</dd>

                        <dt class="col-sm-3">Nesting</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                                <dt class="col-sm-4">Nested definition list</dt>
                                <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.
                                </dd>
                            </dl>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h4>BLOCK QUOTE</h4>
                        <p>For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote class="blockquote"&gt;</code> around any HTML as the
                            quote.</p>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                    posuere erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <h4>ADDRESS TAG</h4>
                        <p></p>
                        <div class="card-body">
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                1355 Market St, Suite 900<br>
                                San Francisco, CA 94103<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card">
                <h4 class="card-title"><strong>Misc</strong></h4>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <h5>Text truncate</h5>
                            <p class="text-truncate">Apply <code class="code-bold">.text-truncate</code> to any text
                                element to crop your text with ellipse if it is larger than line width.</p>

                        </div>
                        <div class="col-lg-5 col-12 code-preview ">
                            <p class="col-5 text-truncate">Praeterea iter est quasdam res quas ex communi.</p>
                            <div class="card-footer border-top-0">
                                &lt;div class="col-5 text-truncate"&gt;Your long text&lt;/div&gt;
                            </div>

                        </div><br>

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
