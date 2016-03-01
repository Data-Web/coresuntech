<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    {!! Html::style('css/admin/bootstrap.min.css') !!}
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    {!! Html::style('css/admin/font-awesome.min.css') !!}

    <!--Fonts-->
    {!! Html::style('css/admin/font.css') !!}
    {!! Html::style('css/admin/font-google-api.css') !!}

    <!--Beyond styles-->
    {!! Html::style('css/admin/beyond.min.css') !!}
    {!! Html::style('css/admin/demo.min.css') !!}
    {!! Html::style('css/admin/animate.min.css') !!}
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    {!! Html::script('js/admin/skins.min.js') !!}
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
        {!! Form::open(['url' => 'admin/login']) !!}
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-or">
                    <div class="or-line"></div>
                    <div class="or">WITH</div>
                </div>

                <div class="loginbox-textbox">
                    {!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                    <span class='text-danger'>{{ $errors->first('username') }}</span>
                </div>

                <div class="loginbox-textbox">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    <span class='text-danger'>{{ $errors->first('password') }}</span>
                </div>
                
                <p class="text-danger text-center">{{ session('message') }}</p>

                <div class="loginbox-submit">
                    {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

    <!--Basic Scripts-->
    {!! Html::script('js/admin/jquery.min.js') !!}
    {!! Html::script('js/admin/bootstrap.min.js') !!}
    {!! Html::script('js/admin/slimscroll/jquery.slimscroll.min.js') !!}

    <!--Beyond Scripts-->
    {!! Html::script('js/admin/beyond.js') !!}

</body>
<!--Body Ends-->
</html>
