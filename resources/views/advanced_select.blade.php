@extends('layouts.default')
{{-- Page title --}}
@section('title')
Buttons @parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/select2/css/select2-bootstrap4.min.css')}}" rel="stylesheet">
<!--end of page vendors -->
@stop

{{-- Page content --}}
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Select 2</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Select 2</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body p-20">
                    <h5>Select2 Styles</h5>
                    <p>Select2 is a jQuery-based replacement for select boxes. It supports searching, remote data sets,
                        and pagination of results.
                    </p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card card-box-w">
                                    <div class="card-header card-box-header">Basic Select</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- <label>Basic Select</label> -->
                                            <select class="form-control" placeholder="Select City" data-allow-clear="1">
                                                <option></option>
                                                <option>Hyderabad</option>
                                                <option>Mumbai</option>
                                                <option>Delhi</option>
                                                <option>Bangalore</option>
                                                <option>Pune</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card card-box-w">
                                    <div class="card-header card-box-header">Multiple Select</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- <label>Mutiple Select</label> -->
                                            <select multiple placeholder="Select Known Language" data-allow-clear="1">
                                                <option>English</option>
                                                <option>Hindi</option>
                                                <option>Telugu</option>
                                                <option>Bengali</option>
                                                <option>Marati</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card card-box-w">
                                    <div class="card-header card-box-header">Disabled Select</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- <label>Disabled Select</label> -->
                                            <select disabled placeholder="contact@gmail.com">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card card-box-w">
                                    <div class="card-header card-box-header">Select with Optgroup</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- <label>Select with Optgroup</label> -->
                                            <select placeholder="Select item">
                                                <option></option>
                                                <optgroup label="Mobiles">
                                                    <option>Redmi</option>
                                                    <option>Lenovo</option>
                                                    <option>Microsoft</option>
                                                </optgroup>
                                                <optgroup label="Electronics">
                                                    <option>Air Conditioner</option>
                                                    <option>Microwave oven</option>
                                                    <option>Refrigerator</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card card-box-w">
                                    <div class="card-header card-box-header">Input-Group Style</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- <label>Input-Group Style</label> -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="im im-icon-User"></i></span>
                                                </div>
                                                <select placeholder="Select Role">
                                                    <option></option>
                                                    <option>Java Developer</option>
                                                    <option>Laravel Developer</option>
                                                    <option>SEO Analyst</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card card-box-w">
                                    <div class="card-header card-box-header">Select2 with Validation</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- <label>Select2 with Validation</label> -->
                                            <select placeholder="Select" class="form-control is-invalid">
                                                <option></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Something is wrong.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card card-box-w">
                                    <div class="card-header card-box-header">Select2 with Flags</div>
                                    <div class="card-body">
                                        <div class="form-group select-flag">
                                            <!-- <label>Select2 with Validation</label> -->

                                            <select class="js-source-states " class="form-control">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                            <select class="js-example-templating js-states form-control"></select>
                                            <pre data-fill-from=".js-code-example-templating"></pre>



                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>







                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

@stop
@section('footer_scripts')
<script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>

<script type="text/javascript">
    $(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});
    $(document).ready(function() {
      // Initialize "states" example
      var $states = $(".js-source-states");
      var statesOptions = $states.html();
      $states.remove();

      $(".js-states").append(statesOptions);
    });
</script>
<script type="text/javascript" class="js-code-example-templating">
    function formatState (state) {
    // alert(state);
  if (!state.id) {
    return state.text;
  }
  var baseUrl = "/img/us_states_flags";
  var $state = $(
    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
  );
  return $state;
};


$(document).ready(function() {
$(".js-example-templating").select2({
  templateResult: formatState
});
});
</script>
<!-- end of page level js -->
@stop
