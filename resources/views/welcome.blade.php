<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>

</head>
<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #ffffff;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 236, 210, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 236, 210, 1))
    }
</style>
<body>
<div id="weatherCarousel" class="carousel slide m-5" data-mdb-ride="carousel" data-mdb-carousel-init>
    <div class="carousel-indicators">
        <button type="button" data-mdb-target="#weatherCarousel" data-mdb-slide-to="0" class="active bg-secondary"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#weatherCarousel" data-mdb-slide-to="1" class="bg-secondary"
                aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#weatherCarousel" data-mdb-slide-to="2" class="bg-secondary"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-5">
        <div class="carousel-item active">
            <div class="d-flex justify-content-between align-items-center px-5 gradient-custom" style="height: 230px">
                <div>
                    <h2 class="text-dark display-2"><strong>23°C</strong></h2>
                    <p class="text-dark mb-0">Coimbra, Portugal</p>
                </div>
                <div>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu3.webp"
                         width="150px">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-around text-center align-items-center px-5 bg-body-tertiary"
                 style="height: 230px">
                <div class="flex-column">
                    <p class="small"><strong>21°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>12:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>2°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>1:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>20°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>2:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>19°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>3:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>18°C</strong></p>
                    <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>4:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-around text-center align-items-center px-5 bg-body-tertiary"
                 style="height: 230px">
                <div class="flex-column">
                    <p class="small"><strong>21°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Mon</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>20°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Tue</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>16°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Wed</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>17°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Thu</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>18°C</strong></p>
                    <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Fri</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ww_f0f095a5e6859" v='1.3' loc='id' a='{"t":"ticker","lang":"tr","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>More forecasts: <a href="https://oneweather.org/london/30_days/" id="ww_f0f095a5e6859_u" target="_blank">30 day weather forecast London</a></div><script async src="https://app3.weatherwidget.org/js/?id=ww_f0f095a5e6859"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
