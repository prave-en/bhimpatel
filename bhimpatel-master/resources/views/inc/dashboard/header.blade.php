<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <meta name="robots" content="noindex,nofollow">
    <title>Aaiselu Admin || BHIM BLOGS </title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/maruti-admin/" />
    <link rel="stylesheet" href="{{ asset('asset-admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset-admin/css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset-admin/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset-admin/css/maruti-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset-admin/css/maruti-media.css') }}" class="skin-color" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <h1><a href="dashboard.html">BHIM BLOGS</a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a>
        <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a
            class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span
                class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i
                class="icon-shopping-cart"></i></a>
    </div>
    <!--close-top-Header-messaages-->

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class=""><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
            <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages"
                    class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span
                        class="label label-important">5</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#">new message</a></li>
                    <li><a class="sInbox" title="" href="#">inbox</a></li>
                    <li><a class="sOutbox" title="" href="#">outbox</a></li>
                    <li><a class="sTrash" title="" href="#">trash</a></li>
                </ul>
            </li>
            <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
            <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span
                        class="text">Logout</span></a></li>
        </ul>
    </div>
    {{-- <div id="search">
        <input type="text" placeholder="Search here..." />
        <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
    </div> --}}
    <!--close-top-Header-menu-->
