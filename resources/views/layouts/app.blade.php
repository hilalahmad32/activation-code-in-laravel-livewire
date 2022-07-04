<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard {{ $title }} </title>
    <link rel="shortcut icon" id="favicon" href="https://app.lanaieka.com/uploads/company/favicon.png">
    <link rel="apple-touch-icon”" id="favicon-apple-touch-icon"
        href="https://app.lanaieka.com/uploads/company/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" id="reset-css"
        href="https://app.lanaieka.com/assets/css/reset.min.css?v=2.9.3">
    <link rel="stylesheet" type="text/css" id="roboto-css"
        href="https://app.lanaieka.com/assets/plugins/roboto/roboto.css?v=2.9.3">
    <link rel="stylesheet" type="text/css" id="vendor-css"
        href="https://app.lanaieka.com/assets/builds/vendor-admin.css?v=2.9.3">
    <link rel="stylesheet" type="text/css" id="app-css"
        href="https://app.lanaieka.com/assets/css/style.min.css?v=2.9.3">
    <link rel="stylesheet" type="text/css" id="fullcalendar-css"
        href="https://app.lanaieka.com/assets/plugins/fullcalendar/lib/main.min.css?v=2.9.3">
    <link href="https://app.lanaieka.com/modules/prchat/assets/css/chat_styles.css?v=2.9.3" rel="stylesheet"
        type="text/css">
    <link href="https://app.lanaieka.com/modules/prchat/assets/css/lity.css?v=2.9.3" rel="stylesheet" type="text/css" />
    <link href="https://app.lanaieka.com/modules/prchat/assets/css/chat_statuses.css" rel="stylesheet"
        type="text/css" />
    <link href="https://app.lanaieka.com/modules/prchat/assets/css/mentions.css" rel="stylesheet" type="text/css" />
    <script src="https://app.lanaieka.com/modules/prchat/assets/js/jscolor.js?v=2.9.3"></script>
    <script src="https://app.lanaieka.com/modules/prchat/assets/js/emoparser.js?v=2.9.3"></script>
    <link href="https://app.lanaieka.com/modules/timesheets/assets/css/style.css?v=112" rel="stylesheet"
        type="text/css" />
    <link href="https://app.lanaieka.com/modules/mailbox/assets/css/mailbox_styles.css?v=2.9.3" rel="stylesheet"
        type="text/css" />
    <link href="https://app.lanaieka.com/modules/appointly/assets/css/styles.css?v=1656859751" rel="stylesheet"
        type="text/css">
    <style class="custom_style_links-color">
        a {
            color: #081074;
        }
    </style>
    <style class="custom_style_links-hover-focus">
        a:hover,
        a:focus {
            color: #082cff;
        }
    </style>
    <style class="custom_style_tabs-bg">
        .nav-tabs {
            background: #0d0040;
        }
    </style>
    <style class="custom_style_tabs-links">
        .nav-tabs>li>a {
            color: #ffffff;
        }
    </style>
    <style class="custom_style_tabs-active-border">
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li>a:focus,
        .nav-tabs>li>a:hover {
            border-bottom-color: #13443a;
        }
    </style>
    <style class="custom_style_btn-info">
        .btn-info {
            background-color: #2d008a;
        }

        .btn-info:focus,
        .btn-info.focus,
        .btn-info:hover,
        .btn-info:active,
        .btn-info.active,
        .open>.dropdown-toggle.btn-info,
        .btn-info:active:hover,
        .btn-info.active:hover,
        .open>.dropdown-toggle.btn-info:hover,
        .btn-info:active:focus,
        .btn-info.active:focus,
        .open>.dropdown-toggle.btn-info:focus,
        .btn-info:active.focus,
        .btn-info.active.focus,
        .open>.dropdown-toggle.btn-info.focus,
        .btn-info:active,
        .btn-info.active,
        .open>.dropdown-toggle.btn-info {
            background-color: #000058;
            color: #fff;
            border-color: #000058
        }

        .btn-info.disabled,
        .btn-info[disabled],
        fieldset[disabled] .btn-info,
        .btn-info.disabled:hover,
        .btn-info[disabled]:hover,
        fieldset[disabled] .btn-info:hover,
        .btn-info.disabled:focus,
        .btn-info[disabled]:focus,
        fieldset[disabled] .btn-info:focus,
        .btn-info.disabled.focus,
        .btn-info[disabled].focus,
        fieldset[disabled] .btn-info.focus,
        .btn-info.disabled:active,
        .btn-info[disabled]:active,
        fieldset[disabled] .btn-info:active,
        .btn-info.disabled.active,
        .btn-info[disabled].active,
        fieldset[disabled] .btn-info.active {
            background-color: #5f32bc;
            color: #fff;
            border-color: #5f32bc;
        }

        .btn-info {
            border-color: #2d008a;
        }
    </style>
    <style class="custom_style_btn-success">
        .btn-success {
            background-color: #109d00;
        }

        .btn-success:focus,
        .btn-success.focus,
        .btn-success:hover,
        .btn-success:active,
        .btn-success.active,
        .open>.dropdown-toggle.btn-success,
        .btn-success:active:hover,
        .btn-success.active:hover,
        .open>.dropdown-toggle.btn-success:hover,
        .btn-success:active:focus,
        .btn-success.active:focus,
        .open>.dropdown-toggle.btn-success:focus,
        .btn-success:active.focus,
        .btn-success.active.focus,
        .open>.dropdown-toggle.btn-success.focus,
        .btn-success:active,
        .btn-success.active,
        .open>.dropdown-toggle.btn-success {
            background-color: #006b00;
            color: #fff;
            border-color: #006b00
        }

        .btn-success.disabled,
        .btn-success[disabled],
        fieldset[disabled] .btn-success,
        .btn-success.disabled:hover,
        .btn-success[disabled]:hover,
        fieldset[disabled] .btn-success:hover,
        .btn-success.disabled:focus,
        .btn-success[disabled]:focus,
        fieldset[disabled] .btn-success:focus,
        .btn-success.disabled.focus,
        .btn-success[disabled].focus,
        fieldset[disabled] .btn-success.focus,
        .btn-success.disabled:active,
        .btn-success[disabled]:active,
        fieldset[disabled] .btn-success:active,
        .btn-success.disabled.active,
        .btn-success[disabled].active,
        fieldset[disabled] .btn-success.active {
            background-color: #42cf32;
            color: #fff;
            border-color: #42cf32;
        }

        .btn-success {
            border-color: #109d00;
        }
    </style>
    <style class="custom_style_btn-danger">
        .btn-danger {
            background-color: #ff0000;
        }

        .btn-danger:focus,
        .btn-danger.focus,
        .btn-danger:hover,
        .btn-danger:active,
        .btn-danger.active,
        .open>.dropdown-toggle.btn-danger,
        .btn-danger:active:hover,
        .btn-danger.active:hover,
        .open>.dropdown-toggle.btn-danger:hover,
        .btn-danger:active:focus,
        .btn-danger.active:focus,
        .open>.dropdown-toggle.btn-danger:focus,
        .btn-danger:active.focus,
        .btn-danger.active.focus,
        .open>.dropdown-toggle.btn-danger.focus,
        .btn-danger:active,
        .btn-danger.active,
        .open>.dropdown-toggle.btn-danger {
            background-color: #cd0000;
            color: #fff;
            border-color: #cd0000
        }

        .btn-danger.disabled,
        .btn-danger[disabled],
        fieldset[disabled] .btn-danger,
        .btn-danger.disabled:hover,
        .btn-danger[disabled]:hover,
        fieldset[disabled] .btn-danger:hover,
        .btn-danger.disabled:focus,
        .btn-danger[disabled]:focus,
        fieldset[disabled] .btn-danger:focus,
        .btn-danger.disabled.focus,
        .btn-danger[disabled].focus,
        fieldset[disabled] .btn-danger.focus,
        .btn-danger.disabled:active,
        .btn-danger[disabled]:active,
        fieldset[disabled] .btn-danger:active,
        .btn-danger.disabled.active,
        .btn-danger[disabled].active,
        fieldset[disabled] .btn-danger.active {
            background-color: #ff3232;
            color: #fff;
            border-color: #ff3232;
        }

        .btn-danger {
            border-color: #ff0000;
        }
    </style>
    <style class="custom_style_admin-menu">
        .admin #side-menu,
        .admin #setup-menu {
            background: #040a26;
        }

        body {
            background: #040a26;
        }

        #setup-menu-wrapper {
            background: #040a26;
        }
    </style>
    <style class="custom_style_top-header">
        .admin #header {
            background: #0d0040;
        }
    </style>
    <style class="custom_style_modal-heading">
        .modal-header {
            background: #0d0040;
        }
    </style>
    <style class="custom_style_modal-heading-color">
        .modal-header .modal-title {
            color: #ffffff;
        }
    </style>
    <style class="custom_style_modal-close-button-color">
        .modal-header .close {
            color: #0080ff;
        }
    </style>
    <style class="custom_style_modal-header-white-text-color">
        .modal-header>*:not(.modal-title) {
            color: #b1b1b1;
        }
    </style>
    <style id="theme_style_custom_css">
        .admin #header {

            background: rgb(2, 0, 36) !important;
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 2%, rgba(13, 0, 64, 1) 39%, rgba(21, 0, 103, 1) 79%) !important;
        }

        body {

            background: rgb(2, 0, 36) !important;
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 2%, rgba(13, 0, 64, 1) 39%, rgba(21, 0, 103, 1) 79%) !important;
        }
    </style>
    @livewireStyles
</head>

<body class="app admin dashboard invoices-total-manual user-id-15 chrome">
    <div id="header">
        <div class="hide-menu"><i class="fa fa-align-left"></i></div>
        <div id="logo">
            <a href="https://app.lanaieka.com/admin/" class="logo img-responsive">
                <img src="https://app.lanaieka.com/uploads/company/eaa301c5f98057dd9d2d5df7b4d3786d.png"
                    class="img-responsive" alt="Lanaieka">
            </a>
        </div>
        <nav>
            <div class="small-logo">
                <span class="text-primary">
                    <a href="https://app.lanaieka.com/admin/" class="logo img-responsive">
                        <img src="https://app.lanaieka.com/uploads/company/eaa301c5f98057dd9d2d5df7b4d3786d.png"
                            class="img-responsive" alt="Lanaieka">
                    </a> </span>
            </div>
            <div class="mobile-menu">
                <button type="button"
                    class="navbar-toggle visible-md visible-sm visible-xs mobile-menu-toggle collapsed"
                    data-toggle="collapse" data-target="#mobile-collapse" aria-expanded="false">
                    <i class="fa fa-chevron-down"></i>
                </button>
                <ul class="mobile-icon-menu">
                </ul>
                <div class="mobile-navbar collapse" id="mobile-collapse" aria-expanded="false" style="height: 0px;"
                    role="navigation">
                    <ul class="nav navbar-nav">
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <aside id="menu" class="sidebar">
        <ul class="nav metis-menu" id="side-menu">
            <li class="dashboard_user">
                Welcome {{ Auth::user()->name }}
                @livewire('user.auth.logout')
            </li>

            <li class="menu-item-dashboard">
                <a href="{{ route('users.dashboard') }}" aria-expanded="false">
                    <i class="fa fa-home menu-icon"></i>
                    <span class="menu-text">
                        Dashboard </span>
                </a>
            </li>

            <li class="menu-item-dashboard">
                <a href="{{ route('users.product') }}" aria-expanded="false">
                    <i class="fa fa-home menu-icon"></i>
                    <span class="menu-text">
                        Products </span>
                </a>
            </li>
        </ul>
    </aside>
    <div id="wrapper">
        {{ $slot }}
    </div>
    <script type="text/javascript" id="vendor-js" src="https://app.lanaieka.com/assets/builds/vendor-admin.js?v=2.9.3">
    </script>
    <script type="text/javascript" id="jquery-migrate-js"
        src="https://app.lanaieka.com/assets/plugins/jquery/jquery-migrate.min.js?v=2.9.3"></script>
    <script type="text/javascript" id="datatables-js"
        src="https://app.lanaieka.com/assets/plugins/datatables/datatables.min.js?v=2.9.3"></script>
    <script type="text/javascript" id="moment-js" src="https://app.lanaieka.com/assets/builds/moment.min.js?v=2.9.3">
    </script>
    <script type="text/javascript" id="bootstrap-select-js"
        src="https://app.lanaieka.com/assets/builds/bootstrap-select.min.js?v=2.9.3"></script>
    <script type="text/javascript" id="tinymce-js"
        src="https://app.lanaieka.com/assets/plugins/tinymce/tinymce.min.js?v=2.9.3"></script>
    <script type="text/javascript" id="jquery-validation-js"
        src="https://app.lanaieka.com/assets/plugins/jquery-validation/jquery.validate.min.js?v=2.9.3"></script>
    <script type="text/javascript" id="pusher-js" src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script type="text/javascript" id="google-js" src="https://apis.google.com/js/api.js?onload=onGoogleApiLoad" defer>
    </script>
    <script type="text/javascript" id="common-js" src="https://app.lanaieka.com/assets/builds/common.js?v=2.9.3"></script>
    <script type="text/javascript" id="app-js" src="https://app.lanaieka.com/assets/js/main.min.js?v=2.9.3"></script>
    <script type="text/javascript" id="fullcalendar-js"
        src="https://app.lanaieka.com/assets/plugins/fullcalendar/lib/main.min.js?v=2.9.3"></script>

    <script src="https://app.lanaieka.com/modules/prchat/assets/js/lity.min.js?v=2.9.3"></script>
    <script src="https://app.lanaieka.com/modules/prchat/assets/js/pr-chat.js?v=2.9.3"></script>
    <script src="https://app.lanaieka.com/modules/prchat/assets/js/mentions/underscore.js?v=2.9.3"></script>
    <script src="https://app.lanaieka.com/modules/prchat/assets/js/mentions/jquery-elastic.js?v=2.9.3"></script>
    <script src="https://app.lanaieka.com/modules/prchat/assets/js/mentions/mentions.js?v=2.9.3"></script>
    <script src="https://app.lanaieka.com/modules/timesheets/assets/js/check_in_out_ts.js?v=112"></script> <input type="hidden" name="hour_attendance" value="20">
    @livewireScripts
    <script></script>
</body>

</html>
