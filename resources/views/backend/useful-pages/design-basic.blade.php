@extends('layouts.backend.backend-layouts')
@section('page-title','All typography design is here||button,badge,icons,card,tilebox||etc')
@push('page-css')
  <!-- Custom box css For Modal-->
  <link href="{{ asset('assets/backend/plugins/custombox/css/custombox.min.css') }}" rel="stylesheet">
@endpush
@section('page-content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Design Basic</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Design Basic</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div><!-- content -->


    
    <!--  Buttons -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="header-title m-t-0">Default Buttons</h4>
                        <p class="text-muted m-b-20 font-13">
                            Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                        </p>
                        <div class="button-list">
                            <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                            <button type="button" class="btn btn-secondary waves-effect">Secondary</button>
                            <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                            <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                            <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                            <button type="button" class="btn btn-purple waves-effect waves-light">Purple</button>
                            <button type="button" class="btn btn-pink waves-effect waves-light">Pink</button>
                            <button type="button" class="btn btn-light waves-effect">Light</button>
                            <button type="button" class="btn btn-link waves-effect">Link</button>
                            <button type="button" class="btn btn-custom waves-effect waves-light">Custom</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="header-title m-t-0">Default Rounded Button</h4>
                        <p class="text-muted m-b-20 font-13">
                            Add <code>.btn-rounded</code> to default button to get rounded corners.
                        </p>
                        <div class="button-list">
                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button>
                            <button type="button" class="btn btn-secondary btn-rounded waves-effect">Secondary</button>
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Success</button>
                            <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
                            <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button>
                            <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Danger</button>
                            <button type="button" class="btn btn-dark btn-rounded waves-effect waves-light">Dark</button>
                            <button type="button" class="btn btn-light btn-rounded waves-effect">Light</button>
                            <button type="button" class="btn btn-purple btn-rounded waves-effect waves-light">Purple</button>
                            <button type="button" class="btn btn-pink btn-rounded waves-effect waves-light">Pink</button>
                        </div>
                    </div>
                </div>
                <div class="row m-t-50">
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Outline Buttons</h4>
                        <p class="text-muted m-b-20 font-13">
                            In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-*-outline</code> ones to remove all background images and colors on any button.
                        </p>
                        <div class="button-list">
                            <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                            <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                            <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                            <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                            <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                            <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                            <button type="button" class="btn btn-outline-light waves-effect">Light</button>
                            <button type="button" class="btn btn-outline-purple waves-effect waves-light">Purple</button>
                            <button type="button" class="btn btn-outline-pink waves-effect waves-light">Pink</button>
                            <button type="button" class="btn btn-outline-custom waves-effect waves-light">Custom</button>
                        </div>
                    </div>
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Outline Rounded Button</h4>
                        <p class="text-muted m-b-20 font-13">
                            In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-*-outline</code> <code>.btn-rounded</code> ones to remove all background images and colors on any button.
                        </p>
                        <div class="button-list">
                            <button type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light">Primary</button>
                            <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
                            <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light">Success</button>
                            <button type="button" class="btn btn-outline-info btn-rounded waves-effect waves-light">Info</button>
                            <button type="button" class="btn btn-outline-warning btn-rounded waves-effect waves-light">Warning</button>
                            <button type="button" class="btn btn-outline-danger btn-rounded waves-effect waves-light">Danger</button>
                            <button type="button" class="btn btn-outline-dark btn-rounded waves-effect waves-light">Dark</button>
                            <button type="button" class="btn btn-outline-light btn-rounded waves-effect">Light</button>
                            <button type="button" class="btn btn-outline-purple btn-rounded waves-effect waves-light">Purple</button>
                            <button type="button" class="btn btn-outline-pink btn-rounded waves-effect waves-light">Pink</button>
                            <button type="button" class="btn btn-outline-custom btn-rounded waves-effect waves-light">Custom</button>
                        </div>
                    </div>
                </div>
                <div class="row m-t-50">
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Button-Width</h4>
                        <p class="text-muted m-b-30 font-13">
                            Create buttons with minimum width by adding add <code>.w-xs</code>, <code>.w-sm</code>, <code>.w-md</code> or <code>.w-lg</code>.
                        </p>
                        <div class="button-list">
                            <button type="button" class="btn btn-primary waves-effect waves-light w-xs">Xs</button>
                            <button type="button" class="btn btn-purple waves-effect waves-light w-sm">Small</button>
                            <button type="button" class="btn btn-info waves-effect waves-light w-md">Middle</button>
                            <button type="button" class="btn btn-warning waves-effect waves-light w-lg">Large</button>
                        </div>
                    </div>
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Button-Sizes</h4>
                        <p class="text-muted m-b-30 font-13">
                            Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional sizes.
                        </p>
                        <div class="button-list">
                            <button class="btn btn-primary waves-effect waves-light btn-lg">Large button</button>
                            <button class="btn btn-success waves-effect waves-light btn-sm">Small button</button>
                        </div>
                    </div>
                </div>
                <div class="row m-t-50">
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Button Labels</h4>
                        <p class="text-muted m-b-20 font-13">
                            Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>,
                            or <code>&lt;input&gt;</code> element. And put <code>&lt;span&gt;</code>
                            with class <code>.btn-label</code> and any <code>icon</code> inside it. If you want to put
                            icon on right side then add class <code>.btn-label-right</code> in <code>&lt;span&gt;</code>
                        </p>
                        <div class="button-list">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-check"></i>
                                </span>Success</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-times"></i>
                                </span>Danger</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-exclamation"></i>
                                </span>Info</button>
                            <button type="button" class="btn btn-warning waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-warning"></i>
                                </span>Warning</button>
                            <br>
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-arrow-left"></i>
                                </span>Left</button>
                            <button type="button" class="btn btn-success waves-effect waves-light">Right
                                <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Button Labels Rounded</h4>
                        <p class="text-muted m-b-20 font-13">
                            Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>,
                            or <code>&lt;input&gt;</code> element. And put <code>&lt;span&gt;</code>
                            with class <code>.btn-label</code> and any <code>icon</code> inside it. If you want to put
                            icon on right side then add class <code>.btn-label-right</code> in <code>&lt;span&gt;</code>
                        </p>

                        <div class="button-list">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-check"></i>
                                </span>Success</button>

                            <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-times"></i>
                                </span>Danger</button>

                            <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-exclamation"></i>
                                </span>Info</button>

                            <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-warning"></i>
                                </span>Warning</button>
                            <br>

                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-arrow-left"></i>
                                </span>Left</button>

                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Right
                                <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i>
                                </span>
                            </button>
                        </div>

                    </div>
                </div>


                <div class="row m-t-50">
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Icon Button</h4>
                        <p class="text-muted m-b-20 font-13">
                            Icon only button.
                        </p>

                        <div class="button-list">
                            <button class="btn waves-effect btn-secondary"> <i class="fa fa-heart-o"></i> </button>
                            <button class="btn waves-effect waves-light btn-danger disabled"> <i class="fa fa-remove"></i> </button>
                            <button class="btn waves-effect waves-light btn-purple"> <i class="fa fa-music"></i> </button>
                            <button class="btn waves-effect waves-light btn-primary"> <i class="fa fa-star"></i> </button>
                            <button class="btn waves-effect waves-light btn-success"> <i class="fa fa-thumbs-o-up"></i> </button>
                            <button class="btn waves-effect waves-light btn-info"> <i class="fa fa-keyboard-o"></i> </button>
                            <button class="btn waves-effect waves-light btn-warning"> <i class="fa fa-wrench"></i> </button>
                            <br>
                            <button class="btn btn-secondary waves-effect"> <i class="fa fa-heart m-r-5"></i> <span>Like</span> </button>
                            <button class="btn btn-dark waves-effect waves-light"> <i class="fa fa-envelope-o m-r-5"></i> <span>Share</span> </button>
                            <button class="btn btn-warning waves-effect waves-light"> <i class="fa fa-rocket m-r-5"></i> <span>Launch</span> </button>
                            <button class="btn btn-info waves-effect waves-light disabled"> <i class="fa fa-cloud m-r-5"></i> <span>Cloud Hosting</span> </button>
                            <button class="btn btn-pink waves-effect waves-light"> <span>Book Flight</span> <i class="fa fa-plane m-l-5"></i> </button>
                            <button class="btn btn-purple waves-effect waves-light"> <span>Donate Money</span> <i class="fa fa-money m-l-5"></i> </button>
                        </div>

                    </div>

                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Block Button</h4>
                        <p class="text-muted m-b-20 font-13">
                            Create block level buttons,with by adding add <code>.btn-block</code>.
                        </p>

                        <div class="button-list">
                            <button type="button" class="btn btn-block btn-lg btn-primary waves-effect waves-light">Block Button</button>
                            <button type="button" class="btn btn-block btn--md btn-pink waves-effect waves-light active">Block Button</button>
                            <button type="button" class="btn btn-block btn-sm btn-success waves-effect waves-light">Block Button</button>
                        </div>

                    </div>
                </div>

                <div class="row m-t-50">
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Social Buttons with label</h4>
                        <p class="text-muted m-b-20 font-13">
                            Use class <code>.btn-@yoursocial</code> to the parent.
                        </p>

                        <div class="button-list">
                            <button type="button" class="btn btn-facebook waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-facebook"></i>
                                </span>Facebook</button>

                            <button type="button" class="btn btn-twitter waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-twitter"></i>
                                </span>Twitter</button>

                            <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-linkedin"></i>
                                </span>Linkdin</button>

                            <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-dribbble"></i>
                                </span>Dribbble</button>

                            <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-google-plus"></i>
                                </span>Google+</button>

                            <button type="button" class="btn btn-instagram waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-instagram"></i> </span>Instagram
                            </button>

                            <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-pinterest"></i> </span>Pinterest
                            </button>

                            <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-dropbox"></i> </span>Dropbox
                            </button>

                            <button type="button" class="btn btn-flickr waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-flickr"></i> </span>Flickr
                            </button>

                            <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-tumblr"></i> </span>Tumblr
                            </button>

                            <button type="button" class="btn btn-skype waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-skype"></i> </span>Skype
                            </button>

                            <button type="button" class="btn btn-youtube waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-youtube"></i> </span>Youtube
                            </button>

                            <button type="button" class="btn btn-github waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-github"></i> </span>Github
                            </button>

                        </div>

                    </div>

                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Social buttons</h4>
                        <p class="text-muted m-b-20 font-13">
                            Use class <code>.btn-@yoursocial</code> to the parent.
                        </p>

                        <div class="button-list">
                            <button type="button" class="btn btn-facebook waves-effect waves-light">
                                <i class="fa fa-facebook"></i>
                            </button>

                            <button type="button" class="btn btn-twitter waves-effect waves-light">
                                <i class="fa fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                <i class="fa fa-linkedin"></i>
                            </button>

                            <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                <i class="fa fa-dribbble"></i>
                            </button>

                            <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                <i class="fa fa-google-plus"></i>
                            </button>

                            <button type="button" class="btn btn-instagram waves-effect waves-light">
                                <i class="fa fa-instagram"></i>
                            </button>

                            <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                <i class="fa fa-pinterest"></i>
                            </button>

                            <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                <i class="fa fa-dropbox"></i>
                            </button>

                            <button type="button" class="btn btn-flickr waves-effect waves-light">
                                <i class="fa fa-flickr"></i>
                            </button>

                            <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                <i class="fa fa-tumblr"></i>
                            </button>

                            <button type="button" class="btn btn-skype waves-effect waves-light">
                                <i class="fa fa-skype"></i>
                            </button>

                            <button type="button" class="btn btn-youtube waves-effect waves-light">
                                <i class="fa fa-youtube"></i>
                            </button>

                            <button type="button" class="btn btn-github waves-effect waves-light">
                                <i class="fa fa-github"></i>
                            </button>


                            <br>


                            <button type="button" class="btn btn-facebook waves-effect waves-light">
                                <i class="fa fa-facebook m-r-5"></i> Facebook
                            </button>

                            <button type="button" class="btn btn-twitter waves-effect waves-light">
                                <i class="fa fa-twitter m-r-5"></i> Twitter
                            </button>

                            <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                <i class="fa fa-linkedin m-r-5"></i> Linkedin
                            </button>

                            <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                <i class="fa fa-dribbble m-r-5"></i> Dribbble
                            </button>

                            <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                <i class="fa fa-google-plus m-r-5"></i> Google+
                            </button>

                            <button type="button" class="btn btn-instagram waves-effect waves-light">
                                <i class="fa fa-instagram m-r-5"></i> Instagram
                            </button>

                            <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                <i class="fa fa-pinterest m-r-5"></i> Pinterest
                            </button>

                            <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                <i class="fa fa-dropbox m-r-5"></i> Dropbox
                            </button>

                            <button type="button" class="btn btn-flickr waves-effect waves-light">
                                <i class="fa fa-flickr m-r-5"></i> Flickr
                            </button>

                            <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                <i class="fa fa-tumblr m-r-5"></i> Tumblr
                            </button>

                            <button type="button" class="btn btn-skype waves-effect waves-light">
                                <i class="fa fa-skype m-r-5"></i> Skype
                            </button>

                            <button type="button" class="btn btn-youtube waves-effect waves-light">
                                <i class="fa fa-youtube m-r-5"></i> Youtube
                            </button>

                            <button type="button" class="btn btn-github waves-effect waves-light">
                                <i class="fa fa-github m-r-5"></i> Github
                            </button>
                        </div>

                    </div>
                </div><!-- end row -->

                <div class="row m-t-50">
                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Button group</h4>
                        <p class="text-muted m-b-20 font-13">
                            Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                        </p>

                        <div class="btn-group m-b-20">
                            <button type="button" class="btn btn-secondary waves-effect">Left</button>
                            <button type="button" class="btn btn-secondary waves-effect">Middle</button>
                            <button type="button" class="btn btn-secondary waves-effect">Right</button>
                        </div>
                        <br>

                        <div class="btn-group m-b-20">
                            <button type="button" class="btn btn-secondary waves-effect">1</button>
                            <button type="button" class="btn btn-secondary waves-effect">2</button>
                            <button type="button" class="btn btn-secondary waves-effect">3</button>
                            <button type="button" class="btn btn-secondary waves-effect">4</button>
                        </div>
                        <div class="btn-group m-b-20">
                            <button type="button" class="btn btn-secondary waves-effect">5</button>
                            <button type="button" class="btn btn-secondary waves-effect">6</button>
                            <button type="button" class="btn btn-secondary waves-effect">7</button>
                        </div>
                        <div class="btn-group m-b-20">
                            <button type="button" class="btn btn-secondary waves-effect">8</button>
                        </div>
                        <br>
                        <div class="btn-group m-b-20">
                            <button type="button" class="btn btn-secondary waves-effect">1</button>
                            <button type="button" class="btn btn-secondary waves-effect">2</button>
                            <button type="button" class="btn btn-secondary waves-effect">3</button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="btn-group-vertical m-b-20">
                                    <button type="button" class="btn btn-secondary waves-effect">Top</button>
                                    <button type="button" class="btn btn-secondary waves-effect">Middle</button>
                                    <button type="button" class="btn btn-secondary waves-effect">Bottom</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="btn-group-vertical m-b-20">
                                    <button type="button" class="btn btn-secondary waves-effect">Button 1</button>
                                    <button type="button" class="btn btn-secondary waves-effect">Button 2</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Button 3
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Button plugin</h4>
                        <p class="text-muted m-b-20 font-13">
                            Do more with buttons. Control button states or create groups of buttons for more components like toolbars.
                        </p>

                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="button"
                                aria-pressed="false" autocomplete="off">
                            Single toggle
                        </button>

                        <br><br>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-info active">
                                <input type="checkbox" checked autocomplete="off"> Active
                            </label>
                            <label class="btn btn-info">
                                <input type="checkbox" autocomplete="off"> Check
                            </label>
                            <label class="btn btn-info">
                                <input type="checkbox" autocomplete="off"> Check
                            </label>
                        </div>

                        <br><br>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                            </label>
                        </div>

                    </div>

                </div> <!-- end row -->

            </div>
        </div>

      </div>
      <!-- End of Row -->
    </div>
    <!--  End Buttons -->

    <!-- Cards Design -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <!-- Simple card -->
                <div class="card m-b-20">
                    <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/9.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make
                          up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-sm-6 col-lg-3">
                <div class="card m-b-20">
                    <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/2.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make
                            up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

            </div><!-- end col -->
            <div class="col-sm-6 col-lg-3">

                <div class="card m-b-20">
                    <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/3.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make
                            up the bulk of the card's content.</p>
                    </div>
                </div>

            </div><!-- end col -->
            <div class="col-sm-6 col-lg-3">

                <div class="card m-b-20">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/backend/images/gallery/12.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make
                            up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-sm-6">
                <div class="card m-b-20 card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card m-b-20 card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="card m-b-20 card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20 card-body text-center">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20 card-body text-right">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="card m-b-20">
                    <h6 class="card-header">Featured</h6>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20">
                    <div class="card-header">
                        Quote
                    </div>
                    <div class="card-body">
                        <blockquote class="card-bodyquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer class="blockquote-footer font-13">Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20 text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="card m-b-20">
                    <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/9.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                    <img class="card-img-bottom img-fluid" src="{{ asset('assets/backend/images/gallery/2.jpg') }}" alt="Card image cap">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20 text-white">
                    <img class="card-img img-fluid" src="{{ asset('assets/backend/images/gallery/3.jpg') }}" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.</p>
                        <p class="card-text">
                            <small class="">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>

        </div><!-- end row -->

        <h5 class="m-t-20 m-b-20">Background variants</h5>
        <div class="row">
            <div class="col-lg-4">
                <div class="card m-b-20 card-inverse text-white" style="background-color: #333; border-color: #333;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20 bg-primary text-white">
                    <div class="card-body">
                        <blockquote class="card-bodyquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer class="blockquote-footer text-white font-13">Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card m-b-20 bg-success text-white">
                    <div class="card-body">
                        <blockquote class="card-bodyquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer class="blockquote-footer text-white font-13">Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
      
        <div class="row">
            <div class="col-12">
                <h5 class="m-t-20 m-b-20">Decks</h5>
                <div class="card-deck-wrapper">
                    <div class="card-deck">
                        <div class="card m-b-20">
                            <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/9.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="card m-b-20">
                            <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/11.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural
                                    lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="card m-b-20">
                            <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/12.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as
                                    a natural lead-in to additional content. This card has even longer
                                    content than the first to show that equal height action.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <h5 class="m-t-20 m-b-20">Columns</h5>
                <div class="card-columns">
                    <div class="card m-b-20">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/2.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title that wraps to a new line</h5>
                            <p class="card-text">This is a longer card with supporting text below as a
                                natural lead-in to additional content. This content is a little bit
                                longer.</p>
                        </div>
                    </div>
                    <div class="card m-b-20 card-body">
                        <blockquote class="card-bodyquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer class="blockquote-footer font-13">Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="card m-b-20">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/backend/images/gallery/3.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural
                                lead-in to additional content.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card m-b-20 card-body">
                        <blockquote class="card-bodyquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat.</p>
                            <footer class="blockquote-footer font-13">Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="card m-b-20 card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to
                            additional content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                    <div class="card m-b-20">
                        <img class="card-img img-fluid" src="{{ asset('assets/backend/images/gallery/4.jpg') }}" alt="Card image cap">
                    </div>
                    <div class="card m-b-20 card-body text-right">
                        <blockquote class="card-bodyquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer class="blockquote-footer font-13">Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="card m-b-20 card-body">
                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This card has even longer content
                            than the first to show that equal height action.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div>
    <!-- End Cards Design -->

    <!-- Modal Design -->
    <div class="container-fluid">
      <!-- Bootstrap Modals -->
      <div class="row">
          <div class="col-12">
              <div class="card-box">
                  <h4 class="header-title m-t-0">Bootstrap Modals (default)</h4>
                  <p class="text-muted m-b-20 font-13">
                      A rendered modal with header, body, and set of actions in the footer.
                  </p>

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <h5>Text in a modal</h5>
                                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                  <hr>
                                  <h5>Overflowing text to show scroll behavior</h5>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <h5>Text in a modal</h5>
                                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                  <hr>
                                  <h5>Overflowing text to show scroll behavior</h5>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="mySmallModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="button-list">
                      <!-- Button trigger modal -->
                      <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                      <!-- Large modal -->
                      <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                      <!-- Small modal -->
                      <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- Custom Modals -->
      <div class="row">
          <div class="col-12">
              <div class="card-box">

                  <h4 class="header-title m-t-0">Modals Examples (Animations)</h4>

                  <p class="text-muted m-b-10 font-13">Use<code>data-animation="xxx" data-plugin="custommodal"
                      data-overlaySpeed="xxx" data-overlayColor="#xxx"</code>. </p>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="fadein" data-plugin="custommodal"
                      data-overlaySpeed="200" data-overlayColor="#36404a">Fade in</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="slide" data-plugin="custommodal"
                      data-overlaySpeed="200" data-overlayColor="#36404a">Slide</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="newspaper" data-plugin="custommodal"
                      data-overlaySpeed="200" data-overlayColor="#36404a">Newspaper</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="fall" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Fall</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="sidefall" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Side Fall</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="blur" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Blur</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="flip" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Flip</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="sign" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Sign</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="superscaled" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Super Scaled</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="slit" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Slit</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="rotate" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Rotate</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="letmein" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Letmein</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="makeway" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Makeway</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="slip" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Slip</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="corner" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Corner</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="slidetogether" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Slide together</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="scale" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Scale</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="door" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Door</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="push" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Push</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="contentscale" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Content Scale</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="swell" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Swell</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="rotatedown" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Rotate Down</a>

                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-t-10" data-animation="flash" data-plugin="custommodal"
                      data-overlaySpeed="100" data-overlayColor="#36404a">Flash</a>

              </div>
          </div><!-- end col -->
      </div>
      <!-- End row -->
      <!-- Modal -->
      <div id="custom-modal" class="modal-demo">
          <button type="button" class="close" onclick="Custombox.modal.close();">
              <span>&times;</span><span class="sr-only">Close</span>
          </button>
          <h4 class="custom-modal-title">Modal title</h4>
          <div class="custom-modal-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
      </div>
    </div> 
    <!-- End Modal Design -->

    <!-- Title Box -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-layers float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                    <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                    <span class="badge badge-success"> +11% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-paypal float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                    <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-chart float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                    <span class="badge badge-warning"> 0% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-rocket float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                    <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                    <span class="badge badge-success"> +89% </span> <span class="text-muted">Last year</span>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <i class="icon-rocket float-right text-muted"></i>
                    <h6 class="text-success text-uppercase m-b-15 m-t-10">Product Sold</h6>
                    <h2 class="m-b-10"><span data-plugin="counterup">1,245</span></h2>
                </div>
            </div>
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <i class="icon-chart float-right text-muted"></i>
                    <h6 class="text-primary text-uppercase m-b-15 m-t-10">Average Price</h6>
                    <h2 class="m-b-10">$<span data-plugin="counterup">15.9</span></h2>
                </div>
            </div>
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <i class="icon-layers float-right text-muted"></i>
                    <h6 class="text-pink text-uppercase m-b-15 m-t-10">Orders</h6>
                    <h2 class="m-b-10" data-plugin="counterup">1,587</h2>
                </div>
            </div>
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <i class="icon-paypal float-right text-muted"></i>
                    <h6 class="text-info text-uppercase m-b-15 m-t-10">Revenue</h6>
                    <h2 class="m-b-10">$<span data-plugin="counterup">46,782</span></h2>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <a href="#" class="btn btn-sm btn-custom waves-effect waves-light float-right">View</a>
                    <h6 class="text-muted text-uppercase m-b-15">Product Sold</h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">1,890</span></h2>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <a href="#" class="btn btn-sm btn-custom waves-effect waves-light float-right">View</a>
                    <h6 class="text-muted text-uppercase m-b-15">Average Price</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">22.56</span></h2>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <a href="#" class="btn btn-sm btn-custom waves-effect waves-light float-right">View</a>
                    <h6 class="text-muted text-uppercase m-b-15">Orders</h6>
                    <h2 class="m-b-20" data-plugin="counterup">9,754</h2>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-two">
                    <a href="#" class="btn btn-sm btn-custom waves-effect waves-light float-right">View</a>
                    <h6 class="text-muted text-uppercase m-b-15">Revenue</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">22,459</span></h2>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6  col-xl-3">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('assets/backend/images/users/avatar-3.jpg') }}" class="img-responsive rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h5 class="m-t-20 m-b-5">Chadengle</h5>
                            <p class="text-muted mb-0 font-13">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-warning font-weight-bold">Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('assets/backend/images/users/avatar-2.jpg') }}" class="img-responsive rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h5 class="m-t-20 m-b-5"> Michael Zenaty</h5>
                            <p class="text-muted mb-0 font-13">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-info font-weight-bold">User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('assets/backend/images/users/avatar-1.jpg') }}" class="img-responsive rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h5 class="m-t-20 m-b-5">Stillnotdavid</h5>
                            <p class="text-muted mb-0 font-13">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-success font-weight-bold">Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('assets/backend/images/users/avatar-10.jpg') }}" class="img-responsive rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h5 class="m-t-20 m-b-5">Tomaslau</h5>
                            <p class="text-muted mb-0 font-13">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-pink font-weight-bold">User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class=" icon-wallet"></i>
                    </div>
                    <div class="text-right">
                        <h6 class="text-success text-uppercase m-b-15 m-t-10">Product Sold</h6>
                        <h2 class="m-b-10"><span data-plugin="counterup">2,562</span></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class=" icon-basket"></i>
                    </div>
                    <div class="text-right">
                        <h6 class="text-pink text-uppercase m-b-15 m-t-10">Product Sold</h6>
                        <h2 class="m-b-10"><span data-plugin="counterup">8,542</span></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class="icon-equalizer"></i>
                    </div>
                    <div class="text-right">
                        <h6 class="text-purple text-uppercase m-b-15 m-t-10">Product Sold</h6>
                        <h2 class="m-b-10"><span data-plugin="counterup">6,254</span></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-6  col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class="icon-cup"></i>
                    </div>
                    <div class="text-right">
                        <h6 class="text-warning text-uppercase m-b-15 m-t-10">Product Sold</h6>
                        <h2 class="m-b-10"><span data-plugin="counterup">7,524</span></h2>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->


    </div><!-- container -->
    <!-- End Title Box -->
   
@endsection
@push('page-js')
  <!-- Modal-Effect Js -->
  <script src="{{ asset('assets/backend/plugins/custombox/js/custombox.min.js') }}"></script>
  <script src="{{ asset('assets/backend/plugins/custombox/js/custombox.legacy.min.js') }}"></script>
@endpush