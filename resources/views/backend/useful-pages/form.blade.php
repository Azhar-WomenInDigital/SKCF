@extends('layouts.backend.backend-layouts')
@section('page-title','form||basic-from,advance-form,form-picker,multiple-upload-form')
@push('page-css')
<!-- Advance form css-->
<link href="{{ asset('assets/backend/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/backend/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<!-- End Advance form css-->
<!-- Form Picker -->
<link href="{{ asset('assets/backend/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/plugins/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
<!-- End Form Picker -->
<!-- form Uploads -->
<link href="{{ asset('assets/backend/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('page-content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Forms</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Forms</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div>
    <!-- content -->

    <!-- General Form -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Input Types</h4>

                    <div class="row">
                        <div class="col-xl-6">
                            <form>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter email">
                                    <small class="text-muted">We'll never share your email with anyone
                                        else.
                                    </small>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control"
                                           id="exampleInputPassword1" placeholder="Password">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleSelect1">Example select</label>
                                    <select class="form-control" id="exampleSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleSelect2">Example multiple select</label>
                                    <select multiple class="form-control" id="exampleSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleTextarea">Example textarea</label>
                                    <textarea class="form-control" id="exampleTextarea"
                                              rows="3"></textarea>
                                </fieldset>

                                <fieldset class="form-group">
                                    <label >Example Readonly</label>
                                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                                </fieldset>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div><!-- end col -->

                        <div class="col-xl-6 m-t-sm-40">
                            <form>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <label for="disabledTextInput">Disabled input</label>
                                        <input type="text" id="disabledTextInput" class="form-control"
                                               placeholder="Disabled input">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledSelect">Disabled select menu</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <label >Example Control sizing</label>
                                    <input class="form-control form-control-lg m-b-20" type="text"
                                           placeholder=".form-control-lg">
                                    <input class="form-control m-b-20" type="text" placeholder="Default input">
                                    <input class="form-control form-control-sm m-b-20" type="text"
                                           placeholder=".form-control-sm">

                                    <div class="row">
                                        <div class="col-2">
                                            <input type="text" class="form-control m-b-15"
                                                   placeholder=".col-2">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control m-b-15"
                                                   placeholder=".col-3">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control m-b-15"
                                                   placeholder=".col-4">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <label>Select menu</label>

                                    <select class="custom-select mb-3">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <label> <i class="fa fa-star"></i> Checkboxes and Radios</label>

                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div><!-- end col -->

                    </div><!-- end row -->
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Textual inputs</h4>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Text</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-2 col-form-label">Search</label>
                        <div class="col-10">
                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-2 col-form-label">URL</label>
                        <div class="col-10">
                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                        <div class="col-10">
                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Number</label>
                        <div class="col-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                        <div class="col-10">
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-month-input" class="col-2 col-form-label">Month</label>
                        <div class="col-10">
                            <input class="form-control" type="month" value="2011-08" id="example-month-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-week-input" class="col-2 col-form-label">Week</label>
                        <div class="col-10">
                            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Time</label>
                        <div class="col-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                        <div class="col-10">
                            <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title m-t-0 m-b-30">Inline forms</h4>

                            <h6 class="m-b-20 text-muted">Visible labels</h6>

                            <form class="form-inline">
                                <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">

                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                </div>

                                <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Remember me
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            <form class="form-inline m-t-30">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <div class="custom-control mr-2 custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck13">
                                    <label class="custom-control-label" for="customCheck13">Remember my preference</label>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            <h6 class="m-b-20 m-t-30 text-muted">Hidden labels</h6>

                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Email
                                        address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3"
                                           placeholder="Enter email">
                                </div>
                                <div class="form-group mx-sm-3">
                                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                                    <input type="password" class="form-control"
                                           id="exampleInputPassword3" placeholder="Password">
                                </div>
                                <div class="checkbox mx-sm-3">
                                    <input id="checkbox0" type="checkbox">
                                    <label for="checkbox0">
                                        Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>

                        </div>

                        <div class="col-xl-6 m-t-sm-40">

                            <h4 class="header-title m-t-0 m-b-30">Using the Grid</h4>

                            <form>
                                <div class="form-group row">
                                    <label for="inputEmail3"
                                           class="col-sm-2 form-control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3"
                                               placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">Radios</label>
                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <input type="radio" name="radio" id="radio1" value="option1" checked>
                                            <label for="radio1">
                                                Option one is this and that&mdash;be sure to include why
                                                it's great
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <input type="radio" name="radio" id="radio2" value="option2">
                                            <label for="radio2">
                                                Option two can be something else and selecting it will
                                                deselect option one
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <input type="radio" name="radio" id="radio3" value="option3" disabled>
                                            <label for="radio3">
                                                Option three is disabled
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">Checkbox</label>
                                    <div class="col-sm-10">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox21" type="checkbox">
                                            <label for="checkbox21">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div><!-- end row -->


                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container -->
    <!-- End General Form -->

    <!-- Advance Form -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Advanced Plugins</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active">Advanced Plugins</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-12">
                            <h4 class="header-title m-t-0 m-b-20">Tags Input</h4>

                            <div class="row">
                                <div class="col-xl-6">
                                    <h6>Input Tags</h6>
                                    <p class="text-muted m-b-20 font-13">
                                        Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.
                                    </p>
                                    <div class="tags-default">
                                        <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"/>
                                    </div>

                                </div>

                                <div class="col-xl-6 m-t-sm-40">
                                    <h6>True multi value</h6>
                                    <p class="text-muted m-b-20 font-13">
                                        Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input, to gain true multivalue support.
                                        Instead of a comma separated string, the values will be set in an array. Existing <code>&lt;option /&gt;</code>
                                        elements will automatically be set as tags. This makes it also possible to create tags containing a comma.
                                    </p>
                                    <div class="m-b-0">
                                        <select multiple data-role="tagsinput">
                                            <option value="Amsterdam">Amsterdam</option>
                                            <option value="Washington">Washington</option>
                                            <option value="Sydney">Sydney</option>
                                        </select>
                                    </div>
                                </div>

                            </div><!-- end row -->

                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row m-t-50">
                        <div class="col-12">
                            <h4 class="header-title m-t-0 m-b-0">Switchery</h4>

                            <div class="row">
                                <div class="col-xl-4 m-t-20">
                                    <h6>Basic</h6>
                                    <p class="text-muted m-b-20 font-13">
                                        Add an attribute <code>
                                        data-plugin="switchery" data-color="@colors"</code>
                                        to your input element and it will be converted into switch.
                                    </p>

                                    <div class="switchery-demo">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#039cfd"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#f1b53d"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#ff5d48"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#3db9dc"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#9261c6"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#98a6ad"/>
                                    </div>

                                </div>

                                <div class="col-xl-4 m-t-20">
                                    <h6>Sizes</h6>
                                    <p class="text-muted m-b-30 font-13">
                                        Add an attribute <code>
                                        data-size="small",data-size="large"</code>
                                        to your input element and it will be converted into switch.
                                    </p>

                                    <div class="switchery-demo">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51" data-size="large"/>
                                    </div>

                                </div>

                                <div class="col-xl-4 m-t-20">
                                    <h6>Secondary color</h6>
                                    <p class="text-muted m-b-30 font-13">
                                        Add an attribute <code>
                                        data-color="@color" data-secondary-color="@color"</code>
                                        to your input element and it will be converted into switch.
                                    </p>

                                    <div class="switchery-demo">
                                        <input type="checkbox" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                        <input type="checkbox" data-plugin="switchery" data-color="#9261c6"  data-secondary-color="#ff7aa3" checked />
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row m-t-50">
                        <div class="col-xl-6">
                            <h4 class="header-title m-t-0 m-b-20">Select2</h4>

                            <div class="p-20">
                                <h6 class="text-muted">Single Select</h6>
                                <p class="text-muted m-b-15 font-13">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="form-control select2">
                                    <option>Select</option>
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

                                <h6 class="m-t-30 text-muted">Multiple Select</h6>
                                <p class="text-muted m-b-15 font-13">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="select2 form-control select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">
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
                            </div>

                        </div>


                        <div class="col-xl-6 m-t-sm-40">
                            <h4 class="header-title m-t-0 m-b-20">Auto Complete</h4>

                            <form class="p-20">
                                <div class="form-group m-b-30">
                                    <label class="control-label text-muted">Ajax Lookup</label>
                                    <input type="text" name="country" id="autocomplete-ajax"
                                           class="form-control"
                                           style=" z-index: 2; background: transparent;"/>
                                    <input type="text" name="country" id="autocomplete-ajax-x"
                                           disabled="disabled" class="form-control"
                                           style="color: #CCC; position: absolute; background: transparent; z-index: 1;display: none;"/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-muted">Local Lookup and Grouping</label>
                                    <input type="text" name="country" id="autocomplete"
                                           class="form-control"/>
                                </div>

                            </form>

                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row m-t-50">
                        <div class="col-sm-12">
                            <h4 class="header-title m-t-0 m-b-10">Bootstrap MaxLength</h4>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="p-20">
                                        <h6 class="text-muted">Default usage</h6>
                                        <p class="text-muted m-b-15 font-13">
                                            The badge will show up by default when the remaining chars are 10 or less:
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                        <div class="m-t-20">
                                            <h6 class="text-muted">Threshold value</h6>
                                            <p class="text-muted m-b-15 font-13">
                                                Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                            </p>
                                            <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                        </div>

                                        <div class="m-t-20">
                                            <h6 class="text-muted">All the options</h6>
                                            <p class="text-muted m-b-15 font-13">
                                                Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                            </p>
                                            <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="p-20">

                                        <h6 class="text-muted">Position</h6>
                                        <p class="text-muted m-b-15 font-13">
                                            All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                            is specified, the positioning will be defauted to 'bottom'.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />

                                        <div class="m-t-20">
                                            <h6 class="text-muted">textareas</h6>
                                            <p class="text-muted m-b-15 font-13">
                                                Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                            </p>
                                            <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end row -->

                </div>
            </div><!-- end col-->

        </div>
        <!-- end row -->


    </div> <!-- container -->
    <!-- End Advance Form -->


    <!-- Form Picker -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Form Pickers</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active">Form Pickers</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="header-title m-t-0">Timepicker</h4>
                            <p class="text-muted font-13 m-b-10">
                                Easily select a time for a text input using your mouse or keyboards arrow keys.
                            </p>

                            <div class="p-20">
                                <div class="form-group">
                                    <label>Default Time Picker</label>
                                    <div class="input-group">
                                        <input id="timepicker" type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                        </div>
                                    </div><!-- input-group -->
                                </div>

                                <div class="form-group">
                                    <label>24 Hour Mode Time Picker</label>
                                    <div class="input-group">
                                        <input id="timepicker2" type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                        </div>
                                    </div><!-- input-group -->
                                </div>

                                <div class="form-group">
                                    <label>Specify a step for the minute field</label>
                                    <div class="input-group">
                                        <input id="timepicker3" type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                        </div>
                                    </div><!-- input-group -->
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <h4 class="header-title m-t-0">Colorpicker</h4>
                            <p class="text-muted font-13 m-b-10">
                                Add color picker to field or to any other element.
                            </p>

                            <div class="p-20">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Default</label>
                                        <input type="text" class="colorpicker-default form-control" value="#8fff00">
                                    </div>
                                    <div class="form-group">
                                        <label>RGBA</label>
                                        <input type="text" class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba">
                                    </div>
                                    <div class="form-group m-b-0">
                                        <label>As Component</label>
                                        <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="colorpicker-default input-group">
                                            <input type="text" readonly="readonly" value="" class="form-control">
                                            <span class="input-group-append add-on">
                                                <button class="btn btn-light" type="button">
                                                    <i style="background-color: rgb(124, 66, 84);margin-top: 2px;"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row m-t-50">
                        <div class="col-sm-12 m-t-20">
                            <h4 class="header-title m-t-0">Date Picker</h4>
                            <p class="text-muted font-13 m-b-10">
                                The datepicker is tied to a standard form input field. Click on the input to open
                                an interactive calendar in a small overlay. Click elsewhere on the page or hit the Esc
                                key to close. If a date is chosen, feedback is shown as the input's value.
                            </p>

                            <div class="row">
                                <div class="col-lg-8">

                                    <div class="p-20">
                                        <form action="#">
                                            <div class="form-group">
                                                <label>Default Functionality</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Auto Close</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Multiple Date</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Date Range</label>
                                                <div>
                                                    <div class="input-daterange input-group" id="date-range">
                                                        <input type="text" class="form-control" name="start" />
                                                        <input type="text" class="form-control" name="end" />
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">

                                    <div class="p-20">

                                        <label>Display Inline</label>
                                        <div class="input-group">
                                            <div id="datepicker-inline"></div>
                                        </div><!-- input-group -->

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row m-t-50">

                        <div class="col-lg-6 m-t-20">
                            <h4 class="header-title m-t-0">Date Range Picker</h4>
                            <p class="text-muted font-13 m-b-10">
                                A JavaScript component for choosing date ranges.
                                Designed to work with the Bootstrap CSS framework.
                            </p>

                            <div class="p-20">
                                <form>
                                    <div class="form-group">
                                        <label>With all options</label>
                                        <div id="reportrange" class="float-right form-control">
                                            <i class="fa fa-calendar"></i>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-50">
                                        <label>Date Range Pick</label>
                                        <div>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Range With Time</label>
                                        <div>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM"/>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <label>Limit Selectable Dates</label>
                                        <div>
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015"/>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                        <div class="col-lg-6 m-t-20">
                            <h4 class="header-title m-t-0">Clock Picker</h4>
                            <p class="text-muted font-13 m-b-10">
                                A clock-style timepicker for Bootstrap (or jQuery).Your awesome text goes here.
                            </p>

                            <div class="p-20">
                                <label>Default Clock Picker</label>
                                <div class="input-group clockpicker m-b-20">
                                    <input type="text" class="form-control" value="09:30">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                    </div>
                                </div>

                                <label>Auto close</label>
                                <div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
                                    <input type="text" class="form-control" value="13:14">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                    </div>
                                </div>

                                <label>Now time</label>
                                <div class="input-group m-b-20">
                                    <input class="form-control" id="single-input" value="" placeholder="Now">
                                    <span class="input-group-append">
                                        <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                                    </span>
                                </div>

                                <label>Place at left, align the arrow to top </label>
                                <div class="input-group clockpicker" data-placement="top" data-align="top">
                                    <input type="text" class="form-control" value="13:14">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- end row -->

                </div>
            </div><!-- end col-->

        </div>
        <!-- end row -->


    </div> <!-- container -->
    <!-- End Form Picker -->

    <!-- File Upload -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Default</h4>

                    <input type="file" class="dropify" data-height="300" />
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-4">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Default File</h4>

                    <input type="file" class="dropify img-fluid" data-default-file="{{ asset('assets/backend/images/gallery/1.jpg') }}"  />
                </div>
            </div><!-- end col -->

            <div class="col-md-4">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Disabled the input</h4>

                    <input type="file" class="dropify" disabled="disabled"  />
                </div>
            </div><!-- end col -->

            <div class="col-md-4">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Max File size</h4>

                    <input type="file" class="dropify" data-max-file-size="1M" />
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
    <!-- End File Upload -->



    

   
@endsection
@push('page-js')
<!-- Advance Form -->
<script src="{{ asset('assets/backend/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
<!-- Autocomplete -->
<script src="{{ asset('assets/backend/plugins/autocomplete/jquery.mockjax.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/autocomplete/countries.js') }}"></script>
<script src="{{ asset('assets/backend/pages/jquery.autocomplete.init.js') }}"></script>
<script src="{{ asset('assets/backend/pages/jquery.formadvanced.init.js') }}"></script>  
<!-- End Advance Form -->

<!-- Form Picker -->
<script src="{{ asset('assets/backend/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/clockpicker/bootstrap-clockpicker.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/backend/pages/jquery.form-pickers.init.js') }}"></script>
<!-- End Form Picker -->

<!-- file uploads js -->
<script src="{{ asset('assets/backend/plugins/fileuploads/js/dropify.min.js') }}"></script>
<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'The file size is too big (1M max).'
        }
    });
</script>
@endpush