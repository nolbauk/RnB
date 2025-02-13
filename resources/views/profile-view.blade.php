<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PROFILE</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
    <link rel="stylesheet" href="{{ asset('css/profile-view.css') }}">
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/bootstrap.min.css') }}">
    <!-- style css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/style.css') }}">
    <!-- Responsive-->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
    <!-- fevicon -->
    <!-- <link rel="icon" href="images/fevicon.png" type="{{ asset('images/logo.png') }}" /> -->
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/home/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html"><img src="images/logo2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">HERO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">ITEM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icecream.html">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">FORUM</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="cart_bt"><a href="#">LOGIN</a></div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- header section end -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="content" class="content content-full-width">
                    <!-- begin profile -->
                    <div class="profile">
                        <div class="profile-header">
                            <!-- BEGIN profile-header-cover -->
                            <div class="profile-header-cover"></div>
                            <!-- END profile-header-cover -->
                            <!-- BEGIN profile-header-content -->
                            <div class="profile-header-content">
                                <!-- BEGIN profile-header-img -->
                                <div class="profile-header-img">
                                    <img src="images/itembkb.jpg" alt="">
                                </div>
                                <!-- END profile-header-img -->
                                <!-- BEGIN profile-header-info -->
                                <div class="profile-header-info">
                                    <h3 class="m-t-10 m-b-5">Sean Ngu</h3>
                                    <h4 class="m-b-10">UXUI + Frontend Developer</h4>
                                    <a href="#" class="btn btn-sm btn-info mb-2">Edit Profile</a>
                                </div>
                                <!-- END profile-header-info -->
                            </div>
                            <!-- END profile-header-content -->
                            <!-- BEGIN profile-header-tab -->
                            <ul class="profile-header-tab nav nav-tabs">
                                <li class="nav-item"><a href="https://www.bootdey.com/snippets/view/bs4-profile-with-timeline-posts" target="__blank" class="nav-link_">RECENT POSTS</a></li>
                            </ul>
                            <!-- END profile-header-tab -->
                        </div>
                    </div>
                    <!-- end profile -->
                    <!-- begin profile-content -->
                    <div class="profile-content">
                        <!-- begin tab-content -->
                        <div class="tab-content p-0">
                            <!-- begin #profile-post tab -->
                            <div class="tab-pane fade active show" id="profile-post">
                                <!-- begin timeline -->
                                <ul class="timeline">
                                    <li>
                                        <!-- begin timeline-time -->
                                        <div class="timeline-time">
                                            <span class="date">today</span>
                                            <span class="time">04:20</span>
                                        </div>
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                                <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                                                <span class="pull-right text-muted">18 Views</span>
                                            </div>
                                            <div class="timeline-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                                                    Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                                                </p>
                                            </div>
                                            <div class="timeline-likes">
                                                <div class="stats-right">
                                                    <span class="stats-text">259 Shares</span>
                                                    <span class="stats-text">21 Comments</span>
                                                </div>
                                                <div class="stats">
                                                    <span class="fa-stack fa-fw stats-icon">
                                                        <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                                        <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                                    </span>
                                                    <span class="fa-stack fa-fw stats-icon">
                                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                                        <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                    <span class="stats-total">4.3k</span>
                                                </div>
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                            </div>
                                            <div class="timeline-comment-box">
                                                <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                                <div class="input">
                                                    <form action="">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                                            <span class="input-group-btn p-l-10">
                                                                <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end timeline-body -->
                                    </li>
                                    <li>
                                        <!-- begin timeline-time -->
                                        <div class="timeline-time">
                                            <span class="date">yesterday</span>
                                            <span class="time">20:17</span>
                                        </div>
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                                <span class="username">Sean Ngu</span>
                                                <span class="pull-right text-muted">82 Views</span>
                                            </div>
                                            <div class="timeline-content">
                                                <p>Location: United States</p>
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                            </div>
                                        </div>
                                        <!-- end timeline-body -->
                                    </li>
                                    <li>
                                        <!-- begin timeline-time -->
                                        <div class="timeline-time">
                                            <span class="date">24 February 2014</span>
                                            <span class="time">08:17</span>
                                        </div>
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                                <span class="username">Sean Ngu</span>
                                                <span class="pull-right text-muted">1,282 Views</span>
                                            </div>
                                            <div class="timeline-content">
                                                <p class="lead">
                                                    <i class="fa fa-quote-left fa-fw pull-left"></i>
                                                    Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
                                                    <i class="fa fa-quote-right fa-fw pull-right"></i>
                                                </p>
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                            </div>
                                        </div>
                                        <!-- end timeline-body -->
                                    </li>
                                    <li>
                                        <!-- begin timeline-time -->
                                        <div class="timeline-time">
                                            <span class="date">10 January 2014</span>
                                            <span class="time">20:43</span>
                                        </div>
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                                <span class="username">Sean Ngu</span>
                                                <span class="pull-right text-muted">1,021,282 Views</span>
                                            </div>
                                            <div class="timeline-content">
                                                <h4 class="template-title">
                                                    <i class="fa fa-map-marker text-danger fa-fw"></i>
                                                    795 Folsom Ave, Suite 600 San Francisco, CA 94107
                                                </h4>
                                                <p>In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</p>
                                                <p class="m-t-20">
                                                    <img src="../assets/img/gallery/gallery-5.jpg" alt="">
                                                </p>
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                            </div>
                                        </div>
                                        <!-- end timeline-body -->
                                    </li>
                                    <li>
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            Loading...
                                        </div>
                                        <!-- begin timeline-body -->
                                    </li>
                                </ul>
                                <!-- end timeline -->
                            </div>
                            <!-- end #profile-post tab -->
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end profile-content -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/home/jquery.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery.min.js') }}"></script> -->
    <script src="js/home/popper.min.js"></script>
    <!-- <script src="{{ asset('js/home/popper.min.js') }}"></script> -->
    <script src="js/home/bootstrap.bundle.min.js"></script>
    <!-- <script src="{{ asset('js/home/bundle.min.js') }}"></script> -->
    <script src="js/home/jquery-3.0.0.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery-3.0.0.min.js') }}"></script> -->
    <script src="js/home/plugin.js"></script>
    <!-- <script src="{{ asset('js/home/plugin.js') }}"></script> -->
    <!-- sidebar -->
    <script src="js/home/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery.mCustomScrollbar.concat.min.js') }}"></script> -->
    <script src="js/home/custom.js"></script>
    <!-- <script src="{{ asset('js/home/custom.js') }}"></script> -->
    <!-- javascript -->
</body>

</html>