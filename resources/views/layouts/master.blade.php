<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Hava Durumu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{'template'}}/style.css">

    <script src="{{'template'}}/js/ie-support/html5.js"></script>
    <script src="{{'template'}}/js/ie-support/respond.js"></script>
</head>
<body>

<div class="site-content">
    <div class="site-header">
        <div class="container">
            <a href="{{route('index')}}" class="branding">
                <img src="{{'template'}}/images/logo.png" alt="" class="logo">
                <div class="logo-type">
                    <h1 class="site-title">Hava Durumu</h1>
                    <small class="site-description">güncel hava durumu</small>
                </div>
            </a>

            <div class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="menu-item current-menu-item"><a href="index.html">Anasayfa</a></li>
                    <li class="menu-item"><a href="{{route('index')}}">Haberler</a></li>
                    <li class="menu-item"><a href="{{route('index')}}">Canlı Kameralar</a></li>
                    <li class="menu-item"><a href="{{route('index')}}">Fotoğraflar</a></li>
                    <li class="menu-item"><a href="{{route('index')}}">İletişim</a></li>
                </ul>
            </div>

            <div class="mobile-navigation"></div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('content')
</div>
<div id="ww_f0f095a5e6859" v='1.3' loc='id' a='{"t":"ticker","lang":"tr","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>More forecasts: <a href="https://oneweather.org/london/30_days/" id="ww_f0f095a5e6859_u" target="_blank">30 day weather forecast London</a></div><script async src="https://app3.weatherwidget.org/js/?id=ww_f0f095a5e6859"></script>

<script src="{{'template'}}/js/jquery-1.11.1.min.js"></script>
<script src="{{'template'}}/js/plugins.js"></script>
<script src="{{'template'}}/js/app.js"></script>

</body>

</html>
