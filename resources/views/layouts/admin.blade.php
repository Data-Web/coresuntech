<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!--Basic Styles-->
    {!! Html::style('css/admin/bootstrap.min.css') !!}
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    {!! Html::style('css/admin/font-awesome.min.css') !!}
    {!! Html::style('css/admin/weather-icons.min.css') !!}

    <!--Fonts-->
    {!! Html::style('css/admin/font.css') !!}
    {!! Html::style('css/admin/font-google-api.css') !!}
    <!--Beyond styles-->
    {!! Html::style('css/admin/beyond.min.css') !!}
    {!! Html::style('css/admin/demo.min.css') !!}
    {!! Html::style('css/admin/typicons.min.css') !!}
    {!! Html::style('css/admin/animate.min.css') !!}
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    {!! Html::style('css/admin/dataTables.bootstrap.css') !!}
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    {!! Html::script('js/admin/skins.min.js') !!}
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            {!! Html::image('images/admin/logo.png', 'Logo') !!}
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Notifications" href="#">
                                    <i class="icon fa fa-warning"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-phone bg-themeprimary white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Skype meeting with Patty</span>
                                                    <span class="description">01:00 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o themeprimary"></i>
                                                    <span class="description">office</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-check bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Uncharted break</span>
                                                    <span class="description">03:30 pm - 05:15 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o darkorange"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-gift bg-warning white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Kate birthday party</span>
                                                    <span class="description">08:30 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-calendar warning"></i>
                                                    <i class="fa fa-clock-o warning"></i>
                                                    <span class="description">at home</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-glass bg-success white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Dinner with friends</span>
                                                    <span class="description">10:30 pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer ">
                                        <span>
                                            Today, March 28
                                        </span>
                                        <span class="pull-right">
                                            10°c
                                            <i class="wi wi-cloudy"></i>
                                        </span>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Mails" href="#">
                                    <i class="icon fa fa-envelope"></i>
                                    <span class="badge">3</span>
                                </a>
                                <!--Messages Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                    <li>
                                        <a href="#">
                                            {!! Html::image('images/admin/avatars/divyia.jpg', 'Divyia Austin', ['class' => 'message-avatar']) !!}
                                            <div class="message">
                                                <span class="message-sender">
                                                    Divyia Austin
                                                </span>
                                                <span class="message-time">
                                                    2 minutes ago
                                                </span>
                                                <span class="message-subject">
                                                    Here's the recipe for apple pie
                                                </span>
                                                <span class="message-body">
                                                    to identify the sending application when the senders image is shown for the main icon
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            {!! Html::image('images/admin/avatars/bing.png', 'Divyia Austin', ['class' => 'message-avatar']) !!}
                                            <div class="message">
                                                <span class="message-sender">
                                                    Bing.com
                                                </span>
                                                <span class="message-time">
                                                    Yesterday
                                                </span>
                                                <span class="message-subject">
                                                    Bing Newsletter: The January Issue‏
                                                </span>
                                                <span class="message-body">
                                                    Discover new music just in time for the Grammy® Awards.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            {!! Html::image('images/admin/avatars/bing.png', 'Divyia Austin', ['class' => 'message-avatar']) !!}
                                            <div class="message">
                                                <span class="message-sender">
                                                    Nicolas
                                                </span>
                                                <span class="message-time">
                                                    Friday, September 22
                                                </span>
                                                <span class="message-subject">
                                                    New 4K Cameras
                                                </span>
                                                <span class="message-body">
                                                    The 4K revolution has come over the horizon and is reaching the general populous
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!--/Messages Dropdown-->
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                    <i class="icon fa fa-tasks"></i>
                                    <span class="badge">4</span>
                                </a>
                                <!--Tasks Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                    <li class="dropdown-header bordered-darkorange">
                                        <i class="fa fa-tasks"></i>
                                        4 Tasks In Progress
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Account Creation</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Profile Data</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Updating Resume</span>
                                                <span class="pull-right">75%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Adding Contacts</span>
                                                <span class="pull-right">10%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">
                                            See All Tasks
                                        </a>
                                        <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i class="fa fa-check"></i></button>
                                    </li>
                                </ul>
                                <!--/Tasks Dropdown-->
                            </li>
                            <li>
                                <a class="wave in" id="chat-link" title="Chat" href="#">
                                    <i class="icon glyphicon glyphicon-comment"></i>
                                </a>
                            </li>
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        {!! Html::image('images/admin/avatars/adam-jansen.jpg') !!}
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="email"><a title="{{ Auth::guard('admin')->user()->fullname }}">{{ Auth::guard('admin')->user()->fullname }}</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            {!! Html::image('images/admin/avatars/adam-jansen.jpg') !!}
                                            <span class="caption">Change Photo</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.html" class="pull-left">Profile</a>
                                        <a href="#" class="pull-right">Setting</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="assets/css/skins/blue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="assets/css/skins/azure.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="assets/css/skins/teal.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="assets/css/skins/green.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="assets/css/skins/orange.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="assets/css/skins/pink.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="assets/css/skins/darkred.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="assets/css/skins/purple.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="assets/css/skins/darkblue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="assets/css/skins/gray.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="assets/css/skins/black.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="assets/css/skins/deepblue.min.css"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        {!!  link_to('admin/logout', 'Sign out', ['title' => 'Logout'], $secure = null) !!}
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul><div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div><div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">Fixed Navbar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">Fixed SideBar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                <span class="text">Fixed BreadCrumbs</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedheader">
                                <span class="text">Fixed Header</span>
                            </label>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">

            <!-- Page Sidebar -->
            @include('partials.admin.sidebar')
            <!-- /Page Sidebar -->
            <!-- Chat Bar -->
            <div id="chatbar" class="page-chatbar">
                <div class="chatbar-contacts">
                    <div class="contacts-search">
                        <input type="text" class="searchinput" placeholder="Search Contacts" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Search Your Contacts and Chat History</div>
                    </div>
                    <ul class="contacts-list">
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/divyia.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/Nicolai-Larson.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Adam Johnson</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">left 4 mins ago</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/John-Smith.jpg', 'Alt', ['width' => 60, 'heigh' => 60]) !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">John Smith</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    1:57 am
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/John-Smith.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Osvaldus Valutis</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/John-Smith.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Javi Jimenez</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/John-Smith.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Stephanie Walter</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    yesterday
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/John-Smith.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Sergey Azovskiy</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">offline since oct 24</div>
                                </div>
                                <div class="last-chat-time">
                                    22 oct
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/John-Smith.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Lee Munroe</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                {!! Html::image('images/admin/avatars/John-Smith.jpg') !!}
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chatbar-messages" style="display: none;">
                    <div class="messages-contact">
                        <div class="contact-avatar">
                            {!! Html::image('images/admin/avatars/John-Smith.jpg') !!}
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                a moment ago
                            </div>
                            <div class="back">
                                <i class="fa fa-arrow-circle-left"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="messages-list">
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                    </ul>
                    <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Dashboard
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    @yield('main')
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    {!! Html::script('js/admin/jquery.min.js') !!}
    {!! Html::script('js/admin/bootstrap.min.js') !!}
    {!! Html::script('js/admin/slimscroll/jquery.slimscroll.min.js') !!}
    <!--Beyond Scripts-->
    {!! Html::script('js/admin/beyond.js') !!}
    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
    {!! Html::script('js/admin/charts/sparkline/jquery.sparkline.js') !!}
    {!! Html::script('js/admin/charts/sparkline/sparkline-init.js') !!}
    {!! Html::script('js/admin/charts/easypiechart/jquery.easypiechart.js') !!}
    {!! Html::script('js/admin/charts/easypiechart/jquery.easypiechart.js') !!}
    {!! Html::script('js/admin/charts/easypiechart/easypiechart-init.js') !!}

    <!--Flot Charts Needed Scripts-->
    {!! Html::script('js/admin/charts/flot/jquery.flot.js') !!}
    {!! Html::script('js/admin/charts/flot/jquery.flot.resize.js') !!}
    {!! Html::script('js/admin/charts/flot/jquery.flot.pie.js') !!}
    {!! Html::script('js/admin/charts/flot/jquery.flot.tooltip.js') !!}
    {!! Html::script('js/admin/charts/flot/jquery.flot.orderBars.js') !!}

    <script>
        // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

            //Sets The Hidden Chart Width
            $('#dashboard-bandwidth-chart')
                .data('width', $('.box-tabbs')
                    .width() - 20);

            //-------------------------Visitor Sources Pie Chart----------------------------------------//
            var data = [
                {
                    data: [[1, 21]],
                    color: '#fb6e52'
                },
                {
                    data: [[1, 12]],
                    color: '#e75b8d'
                },
                {
                    data: [[1, 11]],
                    color: '#a0d468'
                },
                {
                    data: [[1, 10]],
                    color: '#ffce55'
                },
                {
                    data: [[1, 46]],
                    color: '#5db2ff'
                }
            ];
            var placeholder = $("#dashboard-pie-chart-sources");
            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        innerRadius: 0.45,
                        show: true,
                        stroke: {
                            width: 4
                        }
                    }
                }
            });

            //------------------------------Visit Chart------------------------------------------------//
            var data2 = [{
                color: themesecondary,
                label: "Direct Visits",
                data: [[3, 2], [4, 5], [5, 4], [6, 11], [7, 12], [8, 11], [9, 8], [10, 14], [11, 12], [12, 16], [13, 9],
                [14, 10], [15, 14], [16, 15], [17, 9]],

                lines: {
                    show: true,
                    fill: true,
                    lineWidth: .1,
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.4
                        }]
                    }
                },
                points: {
                    show: false
                },
                shadowSize: 0
            },
                {
                    color: themeprimary,
                    label: "Referral Visits",
                    data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                    [14, 14], [15, 12], [16, 14], [17, 15]],
                    bars: {
                        order: 1,
                        show: true,
                        borderWidth: 0,
                        barWidth: 0.4,
                        lineWidth: .5,
                        fillColor: {
                            colors: [{
                                opacity: 0.4
                            }, {
                                opacity: 1
                            }]
                        }
                    }
                },
                {
                    color: themethirdcolor,
                    label: "Search Engines",
                    data: [[3, 14], [4, 11], [5, 10], [6, 9], [7, 5], [8, 8], [9, 5], [10, 6], [11, 4], [12, 7], [13, 4],
                    [14, 3], [15, 4], [16, 6], [17, 4]],
                    lines: {
                        show: true,
                        fill: false,
                        fillColor: {
                            colors: [{
                                opacity: 0.3
                            }, {
                                opacity: 0
                            }]
                        }
                    },
                    points: {
                        show: true
                    }
                }
            ];
            var options = {
                legend: {
                    show: false
                },
                xaxis: {
                    tickDecimals: 0,
                    color: '#f3f3f3'
                },
                yaxis: {
                    min: 0,
                    color: '#f3f3f3',
                    tickFormatter: function (val, axis) {
                        return "";
                    },
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false,
                    color: '#fbfbfb'

                },
                tooltip: true,
                tooltipOpts: {
                    defaultTheme: false,
                    content: " <b>%x May</b> , <b>%s</b> : <span>%y</span>",
                }
            };
            var placeholder = $("#dashboard-chart-visits");
            var plot = $.plot(placeholder, data2, options);

            //------------------------------Real-Time Chart-------------------------------------------//
            var realTimedata = [],
                realTimedata2 = [],
                totalPoints = 300;

            var getSeriesObj = function () {
                return [
                {
                    data: getRandomData(),
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: 0
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }, {
                    data: getRandomData2(),
                    lines: {
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: .5
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }
                ];
            };
            function getRandomData() {
                if (realTimedata.length > 0)
                    realTimedata = realTimedata.slice(1);

                // Do a random walk

                while (realTimedata.length < totalPoints) {

                    var prev = realTimedata.length > 0 ? realTimedata[realTimedata.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata.push(y);
                }

                // Zip the generated y values with the x values

                var res = [];
                for (var i = 0; i < realTimedata.length; ++i) {
                    res.push([i, realTimedata[i]]);
                }

                return res;
            }
            function getRandomData2() {
                if (realTimedata2.length > 0)
                    realTimedata2 = realTimedata2.slice(1);

                // Do a random walk

                while (realTimedata2.length < totalPoints) {

                    var prev = realTimedata2.length > 0 ? realTimedata[realTimedata2.length] : 50,
                        y = prev - 25;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata2.push(y);
                }


                var res = [];
                for (var i = 0; i < realTimedata2.length; ++i) {
                    res.push([i, realTimedata2[i]]);
                }

                return res;
            }
            // Set up the control widget
            var updateInterval = 500;
            var plot = $.plot("#dashboard-chart-realtime", getSeriesObj(), {
                yaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                xaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false
                },
                colors: ['#eee', themeprimary],
            });

            function update() {

                plot.setData(getSeriesObj());

                plot.draw();
                setTimeout(update, updateInterval);
            }
            update();


            //-------------------------Initiates Easy Pie Chart instances in page--------------------//
            InitiateEasyPieChart.init();

            //-------------------------Initiates Sparkline Chart instances in page------------------//
            InitiateSparklineCharts.init();
        });

    </script>
   
    <!--Page Related Scripts-->
    {!! Html::script('js/admin/datatable/jquery.dataTables.min.js') !!}
    {!! Html::script('js/admin/datatable/ZeroClipboard.js') !!}
    {!! Html::script('js/admin/datatable/dataTables.tableTools.min.js') !!}
    {!! Html::script('js/admin/datatable/dataTables.bootstrap.min.js') !!}
    {!! Html::script('js/admin/datatable/datatables-init.js') !!}
    <script>
        InitiateSimpleDataTable.init();
        InitiateEditableDataTable.init();
        InitiateExpandableDataTable.init();
        InitiateSearchableDataTable.init();
    </script>


</body>
<!--  /Body -->
</html>
